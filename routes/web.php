<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanIuranController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/', function () {
    return view('profile.frontend.welcome');
});

Route::get('/dashboard', function () {
    return view('profile.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/laporan', [TransaksiController::class, 'laporan'])->middleware(['auth', 'verified'])->name('laporan');
Route::get('/laporan/iuran-pdf', [LaporanIuranController::class, 'download'])->middleware(['auth', 'verified'])->name('laporan.iuran-pdf');
Route::get('/laporan/export-excel', [TransaksiController::class, 'exportExcel'])->middleware(['auth', 'verified'])->name('laporan.export-excel');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk menampilkan data Web
Route::get('/skck', function () {
    return view('profile.frontend.skck');
});
Route::get('/ktp', function () {
    return view('profile.frontend.ktp');
});
Route::get('/ktp/download-pdf', function () {
    $pdf = Pdf::loadView('pdf.ktp');
    return $pdf->download('Formulir_Permohonan_KTP.pdf');
})->name('ktp.download-pdf');
Route::get('/domisili', function () {
    return view('profile.frontend.domisili');
});
Route::get('/akta-lahir', function () {
    return view('profile.frontend.akta-lahir');
});
Route::get('/surat-kematian', function () {
    return view('profile.frontend.surat-kematian');
});
Route::get('/izin-usaha', function () {
    return view('profile.frontend.izin-usaha');
});
Route::get('/kontak', function () {
    return view('profile.frontend.kontak');
});

// Route untuk Transaksi Keuangan
Route::middleware(['auth', 'verified'])->group(function () {
    // Hanya admin dan super admin bisa input/edit transaksi
    Route::middleware('role:admin,super_admin')->group(function () {
        Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
        Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
        Route::get('/transaksi/{transaksi}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
        Route::put('/transaksi/{transaksi}', [TransaksiController::class, 'update'])->name('transaksi.update');
    });

    // Hanya super admin bisa delete transaksi
    Route::middleware('role:super_admin')->group(function () {
        Route::delete('/transaksi/{transaksi}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
    });

    // Route untuk Upload Laporan Iuran PDF (Admin & Super Admin)
    Route::middleware('role:admin,super_admin')->group(function () {
        Route::get('/laporan-iuran', [LaporanIuranController::class, 'index'])->name('laporan-iuran.index');
        Route::post('/laporan-iuran', [LaporanIuranController::class, 'store'])->name('laporan-iuran.store');
        Route::delete('/laporan-iuran/{laporanIuran}', [LaporanIuranController::class, 'destroy'])->name('laporan-iuran.destroy');
    });
});

require __DIR__.'/auth.php';
