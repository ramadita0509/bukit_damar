<?php

namespace App\Http\Controllers;

use App\Models\LaporanIuran;
use App\Traits\Loggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LaporanIuranController extends Controller
{
    use Loggable;
    /**
     * Display upload form
     */
    public function index()
    {
        if (!Auth::user()->canManageTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        $laporanIuran = LaporanIuran::orderBy('tahun', 'desc')
            ->orderBy('bulan', 'desc')
            ->get();

        return view('profile.frontend.laporan-iuran.upload', compact('laporanIuran'));
    }

    /**
     * Store uploaded PDF
     */
    public function store(Request $request)
    {
        if (!Auth::user()->canManageTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'bulan' => 'nullable|string',
            'tahun' => 'required|string',
            'judul' => 'nullable|string|max:255',
            'keterangan' => 'nullable|string',
            'file_pdf' => 'required|mimes:pdf|max:10240', // max 10MB
        ]);

        // Upload file
        $file = $request->file('file_pdf');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('laporan-iuran', $fileName, 'public');

        // Simpan ke database
        $laporanIuran = LaporanIuran::create([
            'bulan' => $validated['bulan'],
            'tahun' => $validated['tahun'],
            'nama_file' => $fileName,
            'path_file' => $path,
            'judul' => $validated['judul'] ?? null,
            'keterangan' => $validated['keterangan'] ?? null,
        ]);

        // Log action
        $judulLaporan = $laporanIuran->judul ?? $laporanIuran->nama_file;
        $this->logAction(
            'upload',
            $laporanIuran,
            "Mengunggah laporan iuran: {$judulLaporan} ({$laporanIuran->bulan} {$laporanIuran->tahun})",
            null,
            ['nama_file' => $fileName, 'bulan' => $laporanIuran->bulan, 'tahun' => $laporanIuran->tahun]
        );

        return redirect()->route('laporan-iuran.index')
            ->with('success', 'File PDF laporan iuran berhasil diupload!');
    }

    /**
     * Download PDF based on ID or bulan and tahun
     */
    public function download(Request $request)
    {
        // Jika ada ID, download berdasarkan ID
        if ($request->has('id')) {
            $laporan = LaporanIuran::find($request->get('id'));

            if (!$laporan) {
                return redirect()->route('laporan')
                    ->with('error', 'File PDF laporan iuran tidak ditemukan.');
            }
        } else {
            // Fallback ke metode lama (bulan & tahun)
            $bulan = $request->get('bulan');
            $tahun = $request->get('tahun', date('Y'));

            $query = LaporanIuran::tahun($tahun);

            if ($bulan) {
                $query->bulan($bulan);
            }

            $laporan = $query->orderBy('created_at', 'desc')->first();

            if (!$laporan) {
                return redirect()->route('laporan')
                    ->with('error', 'File PDF laporan iuran tidak ditemukan untuk periode yang dipilih.');
            }
        }

        if (!Storage::disk('public')->exists($laporan->path_file)) {
            return redirect()->route('laporan')
                ->with('error', 'File PDF tidak ditemukan di server.');
        }

        $filePath = Storage::disk('public')->path($laporan->path_file);
        return response()->download($filePath, $laporan->nama_file);
    }

    /**
     * Delete uploaded PDF
     */
    public function destroy(LaporanIuran $laporanIuran)
    {
        if (!Auth::user()->canManageTransactions()) {
            abort(403, 'Unauthorized action.');
        }

        // Get laporan data before delete
        $laporanData = $laporanIuran->toArray();
        $judulLaporan = $laporanIuran->judul ?? $laporanIuran->nama_file;
        $description = "Menghapus laporan iuran: {$judulLaporan} ({$laporanIuran->bulan} {$laporanIuran->tahun})";

        // Hapus file dari storage
        if (Storage::disk('public')->exists($laporanIuran->path_file)) {
            Storage::disk('public')->delete($laporanIuran->path_file);
        }

        // Hapus dari database
        $laporanIuran->delete();

        // Log action
        $this->logAction(
            'delete',
            null,
            $description,
            $laporanData,
            null
        );

        return redirect()->route('laporan-iuran.index')
            ->with('success', 'File PDF laporan iuran berhasil dihapus!');
    }
}
