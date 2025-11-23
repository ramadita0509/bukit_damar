<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanIuranController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ActionLogController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/', function () {
    return view('profile.frontend.welcome');
});

Route::get('/dashboard', function () {
    return view('profile.backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/laporan', [TransaksiController::class, 'laporan'])->middleware(['auth', 'verified'])->name('laporan');
Route::get('/laporan/iuran-pdf', [LaporanIuranController::class, 'download'])->middleware(['auth', 'verified'])->name('laporan.iuran-pdf');
Route::get('/laporan/export-excel', [TransaksiController::class, 'exportExcel'])->middleware(['auth', 'verified'])->name('laporan.export-excel');
Route::get('/laporan/export-pdf', [TransaksiController::class, 'exportLaporanPdf'])->middleware(['auth', 'verified'])->name('laporan.export-pdf');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/email', [ProfileController::class, 'updateEmail'])->name('profile.update-email');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk manage users (hanya super admin)
    Route::middleware('role:super_admin')->group(function () {
        Route::get('/users', [ProfileController::class, 'index'])->name('users.index');
        Route::get('/users/create', [ProfileController::class, 'create'])->name('users.create');
        Route::post('/users', [ProfileController::class, 'store'])->name('users.store');
        Route::get('/users/{user}/edit', [ProfileController::class, 'editUser'])->name('users.edit');
        Route::put('/users/{user}', [ProfileController::class, 'updateUser'])->name('users.update');
        Route::delete('/users/{user}', [ProfileController::class, 'destroyUser'])->name('users.destroy');
    });
});

// Route untuk menampilkan data Web
Route::get('/skck', function () {
    return view('profile.frontend.informasi.skck');
});

Route::get('/ktp', function () {
    return view('profile.frontend.informasi.ktp');
});
Route::get('/ktp/download-pdf', function () {
    $pdf = Pdf::loadView('pdf.ktp');
    return $pdf->download('Formulir_Permohonan_KTP.pdf');
})->name('ktp.download-pdf');

Route::get('/domisili', function () {
    return view('profile.frontend.informasi.domisili');
});
Route::get('/domisili/download-pdf', function () {
    $pdf = Pdf::loadView('pdf.domisili');
    return $pdf->download('Surat_Keterangan_Domisili.pdf');
})->name('domisili.download-pdf');

Route::get('/akta-lahir', function () {
    return view('profile.frontend.informasi.akta-lahir');
});

Route::get('/surat-kematian', function () {
    return view('profile.frontend.informasi.surat-kematian');
});
Route::get('/surat-kematian/download-pdf', function () {
    $pdf = Pdf::loadView('pdf.surat-kematian');
    return $pdf->download('Surat_Keterangan_Kematian.pdf');
})->name('surat-kematian.download-pdf');

Route::get('/izin-usaha', function () {
    return view('profile.frontend.informasi.izin-usaha');
});
Route::get('/izin-usaha/download-pdf', function () {
    $pdf = Pdf::loadView('pdf.izin-usaha');
    return $pdf->download('Surat_Keterangan_Izin_Usaha.pdf');
})->name('izin-usaha.download-pdf');

Route::get('/kontak', function () {
    return view('profile.frontend.informasi.kontak');
});

Route::get('/nikah', function () {
    return view('profile.frontend.informasi.nikah');
});
Route::get('/nikah/download-pdf', function () {
    $pdf = Pdf::loadView('pdf.nikah');
    return $pdf->download('Informasi_Persyaratan_Surat_Nikah.pdf');
})->name('nikah.download-pdf');

Route::get('/fasilitas/damar-sport-center', function () {
    return view('profile.frontend.fasilitas.dsc');
})->name('fasilitas.dsc');

Route::get('/fasilitas/masjid', function () {
    return view('profile.frontend.fasilitas.masjid');
})->name('fasilitas.masjid');

Route::get('/fasilitas/damar-park', function () {
    return view('profile.frontend.fasilitas.damar-park');
})->name('fasilitas.damar-park');

Route::get('/fasilitas/balai-warga', function () {
    return view('profile.frontend.fasilitas.balai-warga');
})->name('fasilitas.balai-warga');

Route::get('/fasilitas/meeting-point', function () {
    return view('profile.frontend.fasilitas.meeting-point');
})->name('fasilitas.meeting-point');

Route::get('/fasilitas/keamanan', function () {
    return view('profile.frontend.fasilitas.keamanan');
})->name('fasilitas.keamanan');

Route::get('/kepengurusan', function () {
    return view('profile.frontend.informasi.kepengurusan');
})->name('kepengurusan');

Route::get('/tentang', function () {
    return view('profile.frontend.tentang');
})->name('tentang');

// Route untuk Blog (Frontend)
Route::get('/blog', [BlogController::class, 'frontend'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Route untuk Transaksi Keuangan
Route::middleware(['auth', 'verified'])->group(function () {
    // Route untuk melihat bukti transaksi (semua user yang sudah login)
    Route::get('/storage/bukti-transaksi/{filename}', [TransaksiController::class, 'showBukti'])->name('transaksi.bukti');
    Route::get('/storage/bukti-iuran/{filename}', [TransaksiController::class, 'showBuktiIuran'])->name('iuran.bukti');

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

    // Route untuk Blog Management (Humas & Super Admin)
    Route::middleware('role:humas,super_admin')->group(function () {
        Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
        Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
        Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
        Route::post('/blogs/upload-image', [BlogController::class, 'uploadImage'])->name('blogs.upload-image');
        Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
        Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
        Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    });

    // Route untuk Action Logs (Hanya Super Admin)
    Route::middleware('role:super_admin')->group(function () {
        Route::get('/action-logs', [ActionLogController::class, 'index'])->name('action-logs.index');
        Route::get('/action-logs/{actionLog}', [ActionLogController::class, 'show'])->name('action-logs.show');
    });

    // Route untuk Pembayaran Iuran Warga (Semua User)
    // Pastikan route GET didefinisikan sebelum route POST untuk menghindari konflik
    Route::get('/iuran', function () {
        return redirect()->route('iuran.create');
    })->name('iuran.index');
    Route::get('/iuran/create', [TransaksiController::class, 'createIuran'])->name('iuran.create');
    Route::get('/iuran/history', [TransaksiController::class, 'historyIuran'])->name('iuran.history');
    Route::get('/iuran/laporan', [TransaksiController::class, 'laporanIuranWarga'])->name('iuran.laporan');
    Route::get('/iuran/laporan/export-pdf', [TransaksiController::class, 'exportLaporanIuranPdf'])->name('iuran.laporan.export-pdf');
    Route::post('/iuran', [TransaksiController::class, 'storeIuran'])->name('iuran.store');

    // Route untuk Admin mengelola pembayaran iuran
    Route::middleware('role:admin,super_admin')->group(function () {
        Route::get('/iuran/pending', [TransaksiController::class, 'pendingIuran'])->name('iuran.pending');
        Route::get('/iuran/checklist', [TransaksiController::class, 'checklistIuran'])->name('iuran.checklist');
        Route::post('/iuran/checklist/update', [TransaksiController::class, 'updateChecklistIuran'])->name('iuran.checklist.update');
        Route::post('/iuran/checklist/update-note', [TransaksiController::class, 'updateNoteChecklist'])->name('iuran.checklist.update-note');
        Route::get('/iuran/checklist/export-pdf', [TransaksiController::class, 'exportChecklistPdf'])->name('iuran.checklist.export-pdf');
        Route::get('/iuran/checklist/export-excel', [TransaksiController::class, 'exportChecklistExcel'])->name('iuran.checklist.export-excel');
        Route::post('/iuran/{iuranWarga}/approve', [TransaksiController::class, 'approveIuran'])->name('iuran.approve');
        Route::post('/iuran/{iuranWarga}/reject', [TransaksiController::class, 'rejectIuran'])->name('iuran.reject');
    });
});

require __DIR__.'/auth.php';
