<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\LaporanIuran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile.frontend.transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::user()->canManageTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'tanggal' => 'required|date',
            'keterangan' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'jenis' => 'required|in:pemasukan,pengeluaran',
            'jumlah' => 'required|numeric|min:0',
            'catatan' => 'nullable|string',
            'bukti' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // max 5MB
        ]);

        // Upload bukti jika ada
        if ($request->hasFile('bukti')) {
            $file = $request->file('bukti');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('bukti-transaksi', $fileName, 'public');
            $validated['bukti'] = $path;
        }

        Transaksi::create($validated);

        return redirect()->route('laporan')
            ->with('success', 'Transaksi berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        if (!Auth::user()->canManageTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        return view('profile.frontend.transaksi.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        if (!Auth::user()->canManageTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'tanggal' => 'required|date',
            'keterangan' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'jenis' => 'required|in:pemasukan,pengeluaran',
            'jumlah' => 'required|numeric|min:0',
            'catatan' => 'nullable|string',
            'bukti' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // max 5MB
        ]);

        // Upload bukti baru jika ada
        if ($request->hasFile('bukti')) {
            // Hapus bukti lama jika ada
            if ($transaksi->bukti && Storage::disk('public')->exists($transaksi->bukti)) {
                Storage::disk('public')->delete($transaksi->bukti);
            }

            $file = $request->file('bukti');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('bukti-transaksi', $fileName, 'public');
            $validated['bukti'] = $path;
        }

        $transaksi->update($validated);

        return redirect()->route('laporan')
            ->with('success', 'Transaksi berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        if (!Auth::user()->canDeleteTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        // Hapus file bukti jika ada
        if ($transaksi->bukti && Storage::disk('public')->exists($transaksi->bukti)) {
            Storage::disk('public')->delete($transaksi->bukti);
        }

        $transaksi->delete();

        return redirect()->route('laporan')
            ->with('success', 'Transaksi berhasil dihapus!');
    }

    /**
     * Display laporan page
     */
    public function laporan(Request $request)
    {
        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun', Carbon::now('Asia/Jakarta')->format('Y'));

        $query = Transaksi::query();

        if ($bulan) {
            $query->bulan($bulan);
        }

        if ($tahun) {
            $query->tahun($tahun);
        }

        $transaksi = $query->orderBy('tanggal', 'desc')->get();

        $totalPemasukan = $transaksi->where('jenis', 'pemasukan')->sum('jumlah');
        $totalPengeluaran = $transaksi->where('jenis', 'pengeluaran')->sum('jumlah');
        $saldo = $totalPemasukan - $totalPengeluaran;

        // Get list of uploaded PDF files
        $laporanIuran = LaporanIuran::orderBy('tahun', 'desc')
            ->orderBy('bulan', 'desc')
            ->get();

        return view('profile.frontend.informasi.laporan', compact('transaksi', 'totalPemasukan', 'totalPengeluaran', 'saldo', 'bulan', 'tahun', 'laporanIuran'));
    }

    /**
     * Generate PDF laporan iuran warga
     */
    public function laporanIuranPdf(Request $request)
    {
        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun', Carbon::now('Asia/Jakarta')->format('Y'));

        $query = Transaksi::where('jenis', 'pemasukan')
            ->where('kategori', 'Iuran');

        if ($bulan) {
            $query->bulan($bulan);
        }

        if ($tahun) {
            $query->tahun($tahun);
        }

        $iuran = $query->orderBy('tanggal', 'asc')->get();
        $totalIuran = $iuran->sum('jumlah');

        $bulanNama = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $periode = $bulan ? $bulanNama[(int)$bulan] . ' ' . $tahun : 'Tahun ' . $tahun;

        $pdf = Pdf::loadView('pdf.laporan-iuran', compact('iuran', 'totalIuran', 'periode', 'bulan', 'tahun'));
        $filename = 'Laporan_Iuran_Warga_' . ($bulan ? str_pad($bulan, 2, '0', STR_PAD_LEFT) . '_' : '') . $tahun . '.pdf';

        return $pdf->download($filename);
    }

    /**
     * Export laporan ke Excel (CSV format)
     */
    public function exportExcel(Request $request)
    {
        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun', Carbon::now('Asia/Jakarta')->format('Y'));

        $query = Transaksi::query();

        if ($bulan) {
            $query->bulan($bulan);
        }

        if ($tahun) {
            $query->tahun($tahun);
        }

        $transaksi = $query->orderBy('tanggal', 'desc')->get();

        $bulanNama = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $periode = $bulan ? $bulanNama[(int)$bulan] . ' ' . $tahun : 'Tahun ' . $tahun;
        $filename = 'Laporan_Keuangan_' . ($bulan ? str_pad($bulan, 2, '0', STR_PAD_LEFT) . '_' : '') . $tahun . '.csv';

        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        $callback = function() use ($transaksi, $periode) {
            $file = fopen('php://output', 'w');

            // Add BOM for UTF-8
            fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));

            // Header
            fputcsv($file, ['LAPORAN KEUANGAN RT 002 RW 017']);
            fputcsv($file, ['Periode: ' . $periode]);
            fputcsv($file, ['Tanggal Export: ' . Carbon::now('Asia/Jakarta')->format('d F Y H:i:s')]);
            fputcsv($file, []); // Empty row

            // Table header
            fputcsv($file, ['No', 'Tanggal', 'Keterangan', 'Kategori', 'Jenis', 'Jumlah (Rp)', 'Catatan']);

            // Data
            $no = 1;
            $saldoBerjalan = 0;
            foreach ($transaksi as $item) {
                $pemasukan = $item->jenis == 'pemasukan' ? $item->jumlah : 0;
                $pengeluaran = $item->jenis == 'pengeluaran' ? $item->jumlah : 0;
                $saldoBerjalan += $pemasukan - $pengeluaran;

                fputcsv($file, [
                    $no++,
                    $item->tanggal->format('d/m/Y'),
                    $item->keterangan,
                    $item->kategori,
                    ucfirst($item->jenis),
                    number_format($item->jumlah, 0, ',', '.'),
                    $item->catatan ?? '-'
                ]);
            }

            // Summary
            fputcsv($file, []); // Empty row
            fputcsv($file, ['TOTAL PEMASUKAN', '', '', '', '', number_format($transaksi->where('jenis', 'pemasukan')->sum('jumlah'), 0, ',', '.'), '']);
            fputcsv($file, ['TOTAL PENGELUARAN', '', '', '', '', number_format($transaksi->where('jenis', 'pengeluaran')->sum('jumlah'), 0, ',', '.'), '']);
            fputcsv($file, ['SALDO', '', '', '', '', number_format($transaksi->where('jenis', 'pemasukan')->sum('jumlah') - $transaksi->where('jenis', 'pengeluaran')->sum('jumlah'), 0, ',', '.'), '']);

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    /**
     * Serve bukti transaksi file
     */
    public function showBukti($filename)
    {
        // Pastikan user sudah login
        if (!Auth::check()) {
            abort(403, 'Unauthorized');
        }

        $path = 'bukti-transaksi/' . $filename;

        if (!Storage::disk('public')->exists($path)) {
            abort(404, 'File not found');
        }

        return response()->file(Storage::disk('public')->path($path));
    }
}
