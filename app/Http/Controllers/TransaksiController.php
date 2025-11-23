<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\LaporanIuran;
use App\Models\IuranWarga;
use App\Models\ChecklistIuran;
use App\Models\User;
use App\Traits\Loggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class TransaksiController extends Controller
{
    use Loggable;
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
            'jumlah' => 'required',
            'jumlah_raw' => 'nullable',
            'catatan' => 'nullable|string',
            'bukti' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // max 5MB
        ]);

        // Gunakan jumlah_raw jika ada (dari form dengan format), jika tidak gunakan jumlah
        if ($request->has('jumlah_raw') && $request->jumlah_raw) {
            $jumlahValue = (float) $request->jumlah_raw;
        } else {
            // Hapus titik dari jumlah jika ada
            $jumlahValue = (float) str_replace('.', '', $request->jumlah);
        }

        // Validasi jumlah
        if ($jumlahValue <= 0) {
            return redirect()->back()
                ->withErrors(['jumlah' => 'Jumlah harus lebih besar dari 0'])
                ->withInput();
        }

        $validated['jumlah'] = $jumlahValue;

        // Upload bukti jika ada
        if ($request->hasFile('bukti')) {
            $file = $request->file('bukti');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('bukti-transaksi', $fileName, 'public');
            $validated['bukti'] = $path;
        }

        // Transaksi yang dibuat admin langsung approved
        $validated['status'] = 'approved';

        $transaksi = Transaksi::create($validated);

        // Log action
        $this->logAction(
            'create',
            $transaksi,
            "Menambah transaksi: {$transaksi->keterangan} ({$transaksi->jenis} - Rp " . number_format($transaksi->jumlah, 0, ',', '.') . ")",
            null,
            $validated
        );

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
            'jumlah' => 'required',
            'jumlah_raw' => 'nullable',
            'catatan' => 'nullable|string',
            'bukti' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // max 5MB
        ]);

        // Gunakan jumlah_raw jika ada (dari form dengan format), jika tidak gunakan jumlah
        if ($request->has('jumlah_raw') && $request->jumlah_raw) {
            $jumlahValue = (float) $request->jumlah_raw;
        } else {
            // Hapus titik dari jumlah jika ada
            $jumlahValue = (float) str_replace('.', '', $request->jumlah);
        }

        // Validasi jumlah
        if ($jumlahValue <= 0) {
            return redirect()->back()
                ->withErrors(['jumlah' => 'Jumlah harus lebih besar dari 0'])
                ->withInput();
        }

        $validated['jumlah'] = $jumlahValue;

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

        // Get old values before update
        $oldValues = $transaksi->toArray();
        $changed = $this->getChangedValues($transaksi, $validated);

        $transaksi->update($validated);

        // Log action
        $this->logAction(
            'update',
            $transaksi,
            "Memperbarui transaksi: {$transaksi->keterangan} ({$transaksi->jenis} - Rp " . number_format($transaksi->jumlah, 0, ',', '.') . ")",
            $changed['old'],
            $changed['new']
        );

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

        // Get transaksi data before delete
        $transaksiData = $transaksi->toArray();
        $description = "Menghapus transaksi: {$transaksi->keterangan} ({$transaksi->jenis} - Rp " . number_format($transaksi->jumlah, 0, ',', '.') . ")";

        // Hapus file bukti jika ada
        if ($transaksi->bukti && Storage::disk('public')->exists($transaksi->bukti)) {
            Storage::disk('public')->delete($transaksi->bukti);
        }

        $transaksi->delete();

        // Log action (after delete, so we use array instead of model)
        $this->logAction(
            'delete',
            null,
            $description,
            $transaksiData,
            null
        );

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

        // Hanya tampilkan transaksi yang approved atau yang tidak punya status (backward compatibility)
        $query->where(function($q) {
            $q->where('status', 'approved')
              ->orWhereNull('status');
        });

        if ($bulan) {
            $query->bulan($bulan);
        }

        if ($tahun) {
            $query->tahun($tahun);
        }

        // Ambil semua transaksi untuk perhitungan total dan saldo awal
        $allTransaksi = (clone $query)
            ->orderBy('tanggal', 'asc')
            ->orderBy('created_at', 'asc')
            ->get();

        $totalPemasukan = $allTransaksi->where('jenis', 'pemasukan')->sum('jumlah');
        $totalPengeluaran = $allTransaksi->where('jenis', 'pengeluaran')->sum('jumlah');
        $saldo = $totalPemasukan - $totalPengeluaran;

        // Pagination dengan 20 item per halaman
        $transaksi = $query->with('user')
            ->orderBy('tanggal', 'asc')
            ->orderBy('created_at', 'asc')
            ->paginate(20);

        // Hitung saldo awal sebelum halaman saat ini (untuk saldo berjalan yang benar)
        $saldoAwal = 0;
        $currentPage = $transaksi->currentPage();
        $perPage = $transaksi->perPage();
        $skip = ($currentPage - 1) * $perPage;

        if ($skip > 0) {
            $transaksiSebelumnya = $allTransaksi->take($skip);
            foreach ($transaksiSebelumnya as $item) {
                $pemasukan = $item->jenis == 'pemasukan' ? $item->jumlah : 0;
                $pengeluaran = $item->jenis == 'pengeluaran' ? $item->jumlah : 0;
                $saldoAwal += $pemasukan - $pengeluaran;
            }
        }

        // Get list of uploaded PDF files
        $laporanIuran = LaporanIuran::orderBy('tahun', 'desc')
            ->orderBy('bulan', 'desc')
            ->get();

        return view('profile.frontend.informasi.laporan', compact('transaksi', 'totalPemasukan', 'totalPengeluaran', 'saldo', 'saldoAwal', 'bulan', 'tahun', 'laporanIuran'));
    }

    /**
     * Generate PDF laporan iuran warga
     */
    public function laporanIuranPdf(Request $request)
    {
        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun', Carbon::now('Asia/Jakarta')->format('Y'));

        $query = Transaksi::where('jenis', 'pemasukan')
            ->where('kategori', 'Iuran')
            ->where(function($q) {
                $q->where('status', 'approved')
                  ->orWhereNull('status');
            });

        if ($bulan) {
            $query->bulan($bulan);
        }

        if ($tahun) {
            $query->tahun($tahun);
        }

        $iuran = $query->with('user')->orderBy('tanggal', 'asc')->get();
        $totalIuran = $iuran->sum('jumlah');

        $bulanNama = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $periode = $bulan ? $bulanNama[(int)$bulan] . ' ' . $tahun : 'Tahun ' . $tahun;

        $pdf = Pdf::loadView('pdf.laporan-iuran', compact('iuran', 'totalIuran', 'periode', 'bulan', 'tahun'));
        $filename = 'Laporan_Iuran_Warga_' . ($bulan ? str_pad($bulan, 2, '0', STR_PAD_LEFT) . '_' : '') . $tahun . '.pdf';

        return $pdf->download($filename);
    }

    /**
     * Export laporan transaksi to PDF
     */
    public function exportLaporanPdf(Request $request)
    {
        if (!Auth::user()->canManageTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun', Carbon::now('Asia/Jakarta')->format('Y'));

        $query = Transaksi::query();

        // Hanya tampilkan transaksi yang approved atau yang tidak punya status (backward compatibility)
        $query->where(function($q) {
            $q->where('status', 'approved')
              ->orWhereNull('status');
        });

        if ($bulan) {
            $query->bulan($bulan);
        }

        if ($tahun) {
            $query->tahun($tahun);
        }

        // Ambil semua transaksi tanpa pagination untuk PDF
        $transaksi = $query->with('user')
            ->orderBy('tanggal', 'asc')
            ->orderBy('created_at', 'asc')
            ->get();

        $totalPemasukan = $transaksi->where('jenis', 'pemasukan')->sum('jumlah');
        $totalPengeluaran = $transaksi->where('jenis', 'pengeluaran')->sum('jumlah');
        $saldo = $totalPemasukan - $totalPengeluaran;

        // Hitung saldo berjalan
        $saldoBerjalan = 0;
        $transaksiWithSaldo = [];
        foreach ($transaksi as $item) {
            $pemasukan = $item->jenis == 'pemasukan' ? $item->jumlah : 0;
            $pengeluaran = $item->jenis == 'pengeluaran' ? $item->jumlah : 0;
            $saldoBerjalan += $pemasukan - $pengeluaran;
            $transaksiWithSaldo[] = [
                'transaksi' => $item,
                'pemasukan' => $pemasukan,
                'pengeluaran' => $pengeluaran,
                'saldo' => $saldoBerjalan,
            ];
        }

        $bulanNama = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $periode = $bulan ? $bulanNama[(int)$bulan] . ' ' . $tahun : 'Tahun ' . $tahun;

        try {
            // Increase memory limit for PDF generation
            ini_set('memory_limit', '256M');

            $pdf = Pdf::loadView('pdf.laporan-transaksi', compact(
                'transaksiWithSaldo',
                'totalPemasukan',
                'totalPengeluaran',
                'saldo',
                'bulan',
                'tahun',
                'periode'
            ))
                ->setPaper('a4', 'landscape')
                ->setOption('enable-local-file-access', true)
                ->setOption('isHtml5ParserEnabled', true)
                ->setOption('isRemoteEnabled', false);

            $filename = 'Laporan_Keuangan_' . ($bulan ? $bulan . '_' : '') . $tahun . '.pdf';

            return $pdf->download($filename);
        } catch (\Exception $e) {
            \Log::error('PDF Export Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal export PDF: ' . $e->getMessage());
        }
    }

    /**
     * Export laporan ke Excel (CSV format)
     */
    public function exportExcel(Request $request)
    {
        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun', Carbon::now('Asia/Jakarta')->format('Y'));

        $query = Transaksi::query();

        // Hanya export transaksi yang approved atau yang tidak punya status (backward compatibility)
        $query->where(function($q) {
            $q->where('status', 'approved')
              ->orWhereNull('status');
        });

        if ($bulan) {
            $query->bulan($bulan);
        }

        if ($tahun) {
            $query->tahun($tahun);
        }

        $transaksi = $query->with('user')->orderBy('tanggal', 'desc')->get();

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

    /**
     * Serve bukti iuran warga file
     */
    public function showBuktiIuran($filename)
    {
        // Pastikan user sudah login
        if (!Auth::check()) {
            abort(403, 'Unauthorized');
        }

        $path = 'bukti-iuran/' . $filename;

        if (!Storage::disk('public')->exists($path)) {
            abort(404, 'File not found');
        }

        return response()->file(Storage::disk('public')->path($path));
    }

    /**
     * Show form for user to submit iuran payment
     */
    public function createIuran()
    {
        return view('profile.frontend.iuran.create');
    }

    /**
     * Store user iuran payment submission
     */
    public function storeIuran(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'jumlah' => 'required',
            'jumlah_raw' => 'nullable',
            'catatan' => 'nullable|string',
            'bukti' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // max 5MB
        ]);

        // Gunakan jumlah_raw jika ada (dari form dengan format), jika tidak gunakan jumlah
        if ($request->has('jumlah_raw') && $request->jumlah_raw) {
            $jumlahValue = (float) $request->jumlah_raw;
        } else {
            // Hapus titik dari jumlah jika ada
            $jumlahValue = (float) str_replace('.', '', $request->jumlah);
        }

        // Validasi jumlah
        if ($jumlahValue <= 0) {
            return redirect()->back()
                ->withErrors(['jumlah' => 'Jumlah harus lebih besar dari 0'])
                ->withInput();
        }

        // Upload bukti transfer
        $file = $request->file('bukti');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('bukti-iuran', $fileName, 'public');

        // Create iuran warga with pending status
        $iuranWarga = IuranWarga::create([
            'user_id' => Auth::id(),
            'tanggal_transfer' => $validated['tanggal'],
            'jumlah' => $jumlahValue,
            'bukti_transfer' => $path,
            'catatan' => $validated['catatan'] ?? null,
            'status' => 'pending',
        ]);

        // Log action
        $this->logAction(
            'create',
            $iuranWarga,
            "User " . Auth::user()->name . " mengajukan pembayaran iuran: Rp " . number_format($iuranWarga->jumlah, 0, ',', '.'),
            null,
            $iuranWarga->toArray()
        );

        return redirect()->route('iuran.history')
            ->with('success', 'Bukti pembayaran iuran berhasil diupload! Menunggu konfirmasi admin.');
    }

    /**
     * Show user's iuran payment history
     */
    public function historyIuran()
    {
        $iuranWargas = IuranWarga::where('user_id', Auth::id())
            ->orderBy('tanggal_transfer', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('profile.frontend.iuran.history', compact('iuranWargas'));
    }

    /**
     * Show all pending iuran payments for admin
     */
    public function pendingIuran()
    {
        if (!Auth::user()->canManageTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        $iuranWargas = IuranWarga::where('status', 'pending')
            ->with('user')
            ->orderBy('tanggal_transfer', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('profile.backend.iuran.pending', compact('iuranWargas'));
    }

    /**
     * Approve iuran payment
     */
    public function approveIuran(IuranWarga $iuranWarga)
    {
        if (!Auth::user()->canManageTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        if ($iuranWarga->status !== 'pending') {
            return redirect()->back()
                ->with('error', 'Pembayaran iuran ini sudah diproses sebelumnya.');
        }

        $oldStatus = $iuranWarga->status;
        $iuranWarga->update(['status' => 'approved']);

        // Log action
        $userName = $iuranWarga->user ? $iuranWarga->user->name : 'User tidak ditemukan';
        $this->logAction(
            'update',
            $iuranWarga,
            "Admin " . Auth::user()->name . " menyetujui pembayaran iuran dari " . $userName . " sebesar Rp " . number_format($iuranWarga->jumlah, 0, ',', '.'),
            ['status' => $oldStatus],
            ['status' => 'approved']
        );

        return redirect()->route('iuran.pending')
            ->with('success', 'Pembayaran iuran berhasil disetujui!');
    }

    /**
     * Reject iuran payment
     */
    public function rejectIuran(Request $request, IuranWarga $iuranWarga)
    {
        if (!Auth::user()->canManageTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        if ($iuranWarga->status !== 'pending') {
            return redirect()->back()
                ->with('error', 'Pembayaran iuran ini sudah diproses sebelumnya.');
        }

        $validated = $request->validate([
            'alasan' => 'nullable|string|max:500',
        ]);

        $oldStatus = $iuranWarga->status;
        $iuranWarga->update([
            'status' => 'rejected',
            'catatan_admin' => $validated['alasan'] ?? 'Tidak ada alasan yang diberikan',
        ]);

        // Log action
        $userName = $iuranWarga->user ? $iuranWarga->user->name : 'User tidak ditemukan';
        $this->logAction(
            'update',
            $iuranWarga,
            "Admin " . Auth::user()->name . " menolak pembayaran iuran dari " . $userName . " sebesar Rp " . number_format($iuranWarga->jumlah, 0, ',', '.') . ". Alasan: " . ($validated['alasan'] ?? 'Tidak ada alasan'),
            ['status' => $oldStatus],
            ['status' => 'rejected']
        );

        return redirect()->route('iuran.pending')
            ->with('success', 'Pembayaran iuran ditolak.');
    }

    /**
     * Display laporan iuran warga page
     */
    public function laporanIuranWarga(Request $request)
    {
        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun', Carbon::now('Asia/Jakarta')->format('Y'));
        $status = $request->get('status'); // Filter by status

        $query = IuranWarga::with('user');

        if ($bulan) {
            $query->whereMonth('tanggal_transfer', $bulan);
        }

        if ($tahun) {
            $query->whereYear('tanggal_transfer', $tahun);
        }

        if ($status) {
            $query->where('status', $status);
        }

        // Urutkan dari yang terbaru
        $iuranWargas = $query->orderBy('tanggal_transfer', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        // Hitung statistik
        $totalQuery = IuranWarga::query();
        if ($bulan) {
            $totalQuery->whereMonth('tanggal_transfer', $bulan);
        }
        if ($tahun) {
            $totalQuery->whereYear('tanggal_transfer', $tahun);
        }

        $totalIuran = $totalQuery->sum('jumlah');
        $totalPending = (clone $totalQuery)->where('status', 'pending')->sum('jumlah');
        $totalApproved = (clone $totalQuery)->where('status', 'approved')->sum('jumlah');
        $totalRejected = (clone $totalQuery)->where('status', 'rejected')->sum('jumlah');
        $totalCount = $totalQuery->count();
        $countPending = (clone $totalQuery)->where('status', 'pending')->count();
        $countApproved = (clone $totalQuery)->where('status', 'approved')->count();
        $countRejected = (clone $totalQuery)->where('status', 'rejected')->count();

        return view('profile.frontend.iuran.laporan', compact(
            'iuranWargas',
            'totalIuran',
            'totalPending',
            'totalApproved',
            'totalRejected',
            'totalCount',
            'countPending',
            'countApproved',
            'countRejected',
            'bulan',
            'tahun',
            'status'
        ));
    }

    /**
     * Export laporan iuran warga to PDF
     */
    public function exportLaporanIuranPdf(Request $request)
    {
        if (!Auth::user()->canManageTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun', Carbon::now('Asia/Jakarta')->format('Y'));
        $status = $request->get('status');

        $query = IuranWarga::with('user');

        if ($bulan) {
            $query->whereMonth('tanggal_transfer', $bulan);
        }

        if ($tahun) {
            $query->whereYear('tanggal_transfer', $tahun);
        }

        if ($status) {
            $query->where('status', $status);
        }

        // Ambil semua data tanpa pagination untuk PDF
        $iuranWargas = $query->orderBy('tanggal_transfer', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();

        // Hitung statistik
        $totalQuery = IuranWarga::query();
        if ($bulan) {
            $totalQuery->whereMonth('tanggal_transfer', $bulan);
        }
        if ($tahun) {
            $totalQuery->whereYear('tanggal_transfer', $tahun);
        }

        $totalIuran = $totalQuery->sum('jumlah');
        $totalPending = (clone $totalQuery)->where('status', 'pending')->sum('jumlah');
        $totalApproved = (clone $totalQuery)->where('status', 'approved')->sum('jumlah');
        $totalRejected = (clone $totalQuery)->where('status', 'rejected')->sum('jumlah');
        $totalCount = $totalQuery->count();
        $countPending = (clone $totalQuery)->where('status', 'pending')->count();
        $countApproved = (clone $totalQuery)->where('status', 'approved')->count();
        $countRejected = (clone $totalQuery)->where('status', 'rejected')->count();

        $bulanNama = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $periode = $bulan ? $bulanNama[(int)$bulan] . ' ' . $tahun : 'Tahun ' . $tahun;
        if ($status) {
            $periode .= ' - ' . ucfirst($status);
        }

        try {
            // Increase memory limit for PDF generation
            ini_set('memory_limit', '256M');

            $pdf = Pdf::loadView('pdf.laporan-iuran-warga', compact(
                'iuranWargas',
                'totalIuran',
                'totalPending',
                'totalApproved',
                'totalRejected',
                'totalCount',
                'countPending',
                'countApproved',
                'countRejected',
                'bulan',
                'tahun',
                'status',
                'periode'
            ))
                ->setPaper('a4', 'portrait')
                ->setOption('enable-local-file-access', true)
                ->setOption('isHtml5ParserEnabled', true)
                ->setOption('isRemoteEnabled', false);

            $filename = 'Laporan_Iuran_Warga_' . ($bulan ? $bulan . '_' : '') . $tahun . ($status ? '_' . $status : '') . '.pdf';

            return $pdf->download($filename);
        } catch (\Exception $e) {
            \Log::error('PDF Export Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal export PDF: ' . $e->getMessage());
        }
    }

    /**
     * Display laporan iuran warga page
     */
    public function checklistIuran(Request $request)
    {
        if (!Auth::user()->canManageTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        $tahun = $request->get('tahun', Carbon::now('Asia/Jakarta')->year);

        // Ambil semua user (warga) - sort by alamat dengan natural sorting (cf1/1, cf1/2, cf2/1, dst)
        // Extract nomor setelah "cf" (case insensitive) dan nomor setelah "/" untuk sorting numerik
        $users = User::where(function($query) {
                $query->where('role', 'user')
                    ->orWhereNull('role');
            })
            ->orderByRaw("
                CASE
                    WHEN LOWER(alamat) LIKE 'cf%' THEN
                        CAST(
                            TRIM(
                                SUBSTRING_INDEX(
                                    SUBSTRING_INDEX(
                                        REPLACE(LOWER(alamat), 'cf ', 'cf'),
                                        'cf',
                                        -1
                                    ),
                                    '/',
                                    1
                                )
                            ) AS UNSIGNED
                        )
                    ELSE 999999
                END,
                CASE
                    WHEN alamat LIKE '%/%' THEN
                        CAST(
                            TRIM(
                                SUBSTRING_INDEX(
                                    SUBSTRING_INDEX(alamat, '/', -1),
                                    ' ',
                                    1
                                )
                            ) AS UNSIGNED
                        )
                    ELSE 999999
                END
            ")
            ->orderBy('name', 'asc')
            ->get();

        // Ambil atau buat checklist untuk setiap user
        $checklists = [];
        foreach ($users as $user) {
            $checklist = ChecklistIuran::firstOrCreate(
                ['user_id' => $user->id, 'tahun' => $tahun],
                [
                    'januari' => 0,
                    'februari' => 0,
                    'maret' => 0,
                    'april' => 0,
                    'mei' => 0,
                    'juni' => 0,
                    'juli' => 0,
                    'agustus' => 0,
                    'september' => 0,
                    'oktober' => 0,
                    'november' => 0,
                    'desember' => 0,
                    'thr' => 0,
                    'sosial' => 0,
                ]
            );
            $checklists[$user->id] = $checklist;
        }

        // Hitung total untuk setiap user
        $totals = [];
        foreach ($checklists as $userId => $checklist) {
            $totals[$userId] = $checklist->januari + $checklist->februari + $checklist->maret + $checklist->april +
                              $checklist->mei + $checklist->juni + $checklist->juli + $checklist->agustus +
                              $checklist->september + $checklist->oktober + $checklist->november + $checklist->desember +
                              $checklist->thr + $checklist->sosial;
        }

        // Hitung total per bulan
        $totalPerBulan = [
            'januari' => 0,
            'februari' => 0,
            'maret' => 0,
            'april' => 0,
            'mei' => 0,
            'juni' => 0,
            'juli' => 0,
            'agustus' => 0,
            'september' => 0,
            'oktober' => 0,
            'november' => 0,
            'desember' => 0,
            'thr' => 0,
            'sosial' => 0,
        ];

        foreach ($checklists as $checklist) {
            $totalPerBulan['januari'] += $checklist->januari;
            $totalPerBulan['februari'] += $checklist->februari;
            $totalPerBulan['maret'] += $checklist->maret;
            $totalPerBulan['april'] += $checklist->april;
            $totalPerBulan['mei'] += $checklist->mei;
            $totalPerBulan['juni'] += $checklist->juni;
            $totalPerBulan['juli'] += $checklist->juli;
            $totalPerBulan['agustus'] += $checklist->agustus;
            $totalPerBulan['september'] += $checklist->september;
            $totalPerBulan['oktober'] += $checklist->oktober;
            $totalPerBulan['november'] += $checklist->november;
            $totalPerBulan['desember'] += $checklist->desember;
            $totalPerBulan['thr'] += $checklist->thr;
            $totalPerBulan['sosial'] += $checklist->sosial;
        }

        $grandTotal = array_sum($totalPerBulan);

        // Ambil note dari checklist pertama (note sama untuk semua checklist di tahun yang sama)
        $note = ChecklistIuran::where('tahun', $tahun)->value('note');

        return view('profile.backend.iuran.checklist', compact('users', 'checklists', 'totals', 'totalPerBulan', 'grandTotal', 'note', 'tahun'));
    }

    /**
     * Update checklist iuran
     */
    public function updateChecklistIuran(Request $request)
    {
        if (!Auth::user()->canManageTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'checklist_id' => 'required|exists:checklist_iurans,id',
            'field' => 'required|in:januari,februari,maret,april,mei,juni,juli,agustus,september,oktober,november,desember,thr,sosial',
            'value' => 'required|numeric|min:0',
        ]);

        $checklist = ChecklistIuran::findOrFail($validated['checklist_id']);
        $oldValue = $checklist->{$validated['field']};
        $checklist->update([$validated['field'] => $validated['value']]);

        // Log action
        $this->logAction(
            'update',
            $checklist,
            "Admin " . Auth::user()->name . " mengupdate checklist iuran untuk " . $checklist->user->name . " tahun " . $checklist->tahun . " - " . ucfirst($validated['field']) . ": Rp " . number_format($validated['value'], 0, ',', '.'),
            [$validated['field'] => $oldValue],
            [$validated['field'] => $validated['value']]
        );

        return response()->json([
            'success' => true,
            'message' => 'Checklist berhasil diupdate'
        ]);
    }

    /**
     * Update note for checklist iuran
     */
    public function updateNoteChecklist(Request $request)
    {
        if (!Auth::user()->canManageTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'tahun' => 'required|integer',
            'note' => 'nullable|string',
        ]);

        // Update note untuk semua checklist di tahun tersebut
        ChecklistIuran::where('tahun', $validated['tahun'])
            ->update(['note' => $validated['note'] ?? null]);

        // Log action
        $this->logAction(
            'update',
            null,
            "Admin " . Auth::user()->name . " mengupdate catatan checklist iuran tahun " . $validated['tahun'],
            null,
            ['note' => $validated['note'] ?? null]
        );

        return redirect()->route('iuran.checklist', ['tahun' => $validated['tahun']])
            ->with('success', 'Catatan berhasil disimpan!');
    }

    /**
     * Export checklist iuran to PDF
     */
    public function exportChecklistPdf(Request $request)
    {
        if (!Auth::user()->canManageTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        $tahun = $request->get('tahun', Carbon::now('Asia/Jakarta')->year);

        $users = User::where(function($query) {
                $query->where('role', 'user')
                    ->orWhereNull('role');
            })
            ->orderByRaw("
                CASE
                    WHEN LOWER(alamat) LIKE 'cf%' THEN
                        CAST(
                            TRIM(
                                SUBSTRING_INDEX(
                                    SUBSTRING_INDEX(
                                        REPLACE(LOWER(alamat), 'cf ', 'cf'),
                                        'cf',
                                        -1
                                    ),
                                    '/',
                                    1
                                )
                            ) AS UNSIGNED
                        )
                    ELSE 999999
                END,
                CASE
                    WHEN alamat LIKE '%/%' THEN
                        CAST(
                            TRIM(
                                SUBSTRING_INDEX(
                                    SUBSTRING_INDEX(alamat, '/', -1),
                                    ' ',
                                    1
                                )
                            ) AS UNSIGNED
                        )
                    ELSE 999999
                END
            ")
            ->orderBy('name', 'asc')
            ->get();

        $checklists = [];
        foreach ($users as $user) {
            $checklist = ChecklistIuran::firstOrCreate(
                ['user_id' => $user->id, 'tahun' => $tahun],
                [
                    'januari' => 0,
                    'februari' => 0,
                    'maret' => 0,
                    'april' => 0,
                    'mei' => 0,
                    'juni' => 0,
                    'juli' => 0,
                    'agustus' => 0,
                    'september' => 0,
                    'oktober' => 0,
                    'november' => 0,
                    'desember' => 0,
                    'thr' => 0,
                    'sosial' => 0,
                ]
            );
            $checklists[$user->id] = $checklist;
        }

        // Hitung total untuk setiap user
        $totals = [];
        foreach ($checklists as $userId => $checklist) {
            $totals[$userId] = $checklist->januari + $checklist->februari + $checklist->maret + $checklist->april +
                              $checklist->mei + $checklist->juni + $checklist->juli + $checklist->agustus +
                              $checklist->september + $checklist->oktober + $checklist->november + $checklist->desember +
                              $checklist->thr + $checklist->sosial;
        }

        // Hitung total per bulan
        $totalPerBulan = [
            'januari' => 0,
            'februari' => 0,
            'maret' => 0,
            'april' => 0,
            'mei' => 0,
            'juni' => 0,
            'juli' => 0,
            'agustus' => 0,
            'september' => 0,
            'oktober' => 0,
            'november' => 0,
            'desember' => 0,
            'thr' => 0,
            'sosial' => 0,
        ];

        foreach ($checklists as $checklist) {
            $totalPerBulan['januari'] += $checklist->januari;
            $totalPerBulan['februari'] += $checklist->februari;
            $totalPerBulan['maret'] += $checklist->maret;
            $totalPerBulan['april'] += $checklist->april;
            $totalPerBulan['mei'] += $checklist->mei;
            $totalPerBulan['juni'] += $checklist->juni;
            $totalPerBulan['juli'] += $checklist->juli;
            $totalPerBulan['agustus'] += $checklist->agustus;
            $totalPerBulan['september'] += $checklist->september;
            $totalPerBulan['oktober'] += $checklist->oktober;
            $totalPerBulan['november'] += $checklist->november;
            $totalPerBulan['desember'] += $checklist->desember;
            $totalPerBulan['thr'] += $checklist->thr;
            $totalPerBulan['sosial'] += $checklist->sosial;
        }

        $grandTotal = array_sum($totalPerBulan);
        $note = ChecklistIuran::where('tahun', $tahun)->value('note') ?? '';

        try {
            // Increase memory limit for PDF generation
            ini_set('memory_limit', '256M');

            $pdf = Pdf::loadView('pdf.checklist-iuran', compact('users', 'checklists', 'totals', 'totalPerBulan', 'grandTotal', 'note', 'tahun'))
                ->setPaper('a4', 'landscape')
                ->setOption('enable-local-file-access', true)
                ->setOption('isHtml5ParserEnabled', true)
                ->setOption('isRemoteEnabled', false);
            $filename = 'Laporan_Iuran_Warga_' . $tahun . '.pdf';

            return $pdf->download($filename);
        } catch (\Exception $e) {
            \Log::error('PDF Export Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal export PDF: ' . $e->getMessage());
        }
    }

    /**
     * Export checklist iuran to Excel (CSV)
     */
    public function exportChecklistExcel(Request $request)
    {
        if (!Auth::user()->canManageTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        $tahun = $request->get('tahun', Carbon::now('Asia/Jakarta')->year);

        $users = User::where(function($query) {
                $query->where('role', 'user')
                    ->orWhereNull('role');
            })
            ->orderByRaw("
                CASE
                    WHEN LOWER(alamat) LIKE 'cf%' THEN
                        CAST(
                            TRIM(
                                SUBSTRING_INDEX(
                                    SUBSTRING_INDEX(
                                        REPLACE(LOWER(alamat), 'cf ', 'cf'),
                                        'cf',
                                        -1
                                    ),
                                    '/',
                                    1
                                )
                            ) AS UNSIGNED
                        )
                    ELSE 999999
                END,
                CASE
                    WHEN alamat LIKE '%/%' THEN
                        CAST(
                            TRIM(
                                SUBSTRING_INDEX(
                                    SUBSTRING_INDEX(alamat, '/', -1),
                                    ' ',
                                    1
                                )
                            ) AS UNSIGNED
                        )
                    ELSE 999999
                END
            ")
            ->orderBy('name', 'asc')
            ->get();

        $checklists = [];
        foreach ($users as $user) {
            $checklist = ChecklistIuran::firstOrCreate(
                ['user_id' => $user->id, 'tahun' => $tahun],
                [
                    'januari' => 0,
                    'februari' => 0,
                    'maret' => 0,
                    'april' => 0,
                    'mei' => 0,
                    'juni' => 0,
                    'juli' => 0,
                    'agustus' => 0,
                    'september' => 0,
                    'oktober' => 0,
                    'november' => 0,
                    'desember' => 0,
                    'thr' => 0,
                    'sosial' => 0,
                ]
            );
            $checklists[$user->id] = $checklist;
        }

        // Hitung total per bulan
        $totalPerBulan = [
            'januari' => 0,
            'februari' => 0,
            'maret' => 0,
            'april' => 0,
            'mei' => 0,
            'juni' => 0,
            'juli' => 0,
            'agustus' => 0,
            'september' => 0,
            'oktober' => 0,
            'november' => 0,
            'desember' => 0,
            'thr' => 0,
            'sosial' => 0,
        ];

        foreach ($checklists as $checklist) {
            $totalPerBulan['januari'] += $checklist->januari;
            $totalPerBulan['februari'] += $checklist->februari;
            $totalPerBulan['maret'] += $checklist->maret;
            $totalPerBulan['april'] += $checklist->april;
            $totalPerBulan['mei'] += $checklist->mei;
            $totalPerBulan['juni'] += $checklist->juni;
            $totalPerBulan['juli'] += $checklist->juli;
            $totalPerBulan['agustus'] += $checklist->agustus;
            $totalPerBulan['september'] += $checklist->september;
            $totalPerBulan['oktober'] += $checklist->oktober;
            $totalPerBulan['november'] += $checklist->november;
            $totalPerBulan['desember'] += $checklist->desember;
            $totalPerBulan['thr'] += $checklist->thr;
            $totalPerBulan['sosial'] += $checklist->sosial;
        }

        $grandTotal = array_sum($totalPerBulan);
        $note = ChecklistIuran::where('tahun', $tahun)->value('note') ?? '';

        $filename = 'Laporan_Iuran_Warga_' . $tahun . '.csv';

        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        $callback = function() use ($users, $checklists, $tahun, $totalPerBulan, $grandTotal, $note) {
            $file = fopen('php://output', 'w');

            // Add BOM for UTF-8
            fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));

            // Header
            fputcsv($file, ['LAPORAN IURAN WARGA RT 002 RW 017'], ';');
            fputcsv($file, ['Tahun: ' . $tahun], ';');
            fputcsv($file, ['Tanggal Export: ' . Carbon::now('Asia/Jakarta')->format('d F Y H:i:s')], ';');
            fputcsv($file, [], ';'); // Empty row

            // Table header
            fputcsv($file, [
                'No',
                'Nama',
                'Status',
                'Alamat',
                'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
                'THR',
                'Sosial',
                'Total'
            ], ';');

            // Data
            $no = 1;
            foreach ($users as $user) {
                $checklist = $checklists[$user->id] ?? null;
                $role = $user->role ?? 'user';
                $roleLabels = [
                    'user' => 'Warga',
                    'admin' => 'Admin',
                    'humas' => 'Humas',
                    'super_admin' => 'Super Admin'
                ];

                $row = [
                    $no++,
                    $user->name,
                    $roleLabels[$role] ?? 'Warga',
                    $user->alamat ?? '-',
                ];

                if ($checklist) {
                    $bulan = ['januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember'];
                    $total = 0;
                    foreach ($bulan as $b) {
                        $value = $checklist->$b ?? 0;
                        // Gunakan format angka tanpa titik untuk Excel (Excel akan format sendiri)
                        $row[] = $value > 0 ? $value : '';
                        $total += $value;
                    }
                    $thrValue = $checklist->thr ?? 0;
                    $sosialValue = $checklist->sosial ?? 0;
                    $row[] = $thrValue > 0 ? $thrValue : '';
                    $row[] = $sosialValue > 0 ? $sosialValue : '';
                    $total += $thrValue + $sosialValue;
                    $row[] = $total;
                } else {
                    $row = array_merge($row, array_fill(0, 15, ''));
                }

                fputcsv($file, $row, ';');
            }

            // Total per bulan row
            fputcsv($file, [], ';'); // Empty row
            $totalRow = ['TOTAL PER BULAN', '', '', ''];
            $bulan = ['januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember'];
            foreach ($bulan as $b) {
                $totalRow[] = $totalPerBulan[$b] ?? 0;
            }
            $totalRow[] = $totalPerBulan['thr'] ?? 0;
            $totalRow[] = $totalPerBulan['sosial'] ?? 0;
            $totalRow[] = $grandTotal ?? 0;
            fputcsv($file, $totalRow, ';');

            // Note section
            if ($note) {
                fputcsv($file, [], ';'); // Empty row
                fputcsv($file, ['NOTE:'], ';');
                $noteLines = explode("\n", $note);
                foreach ($noteLines as $line) {
                    fputcsv($file, [$line], ';');
                }
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
