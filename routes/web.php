<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profile.frontend.welcome');
});

Route::get('/dashboard', function () {
    return view('profile.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/administrator', function () {
    return view('profile.administrator');
})->middleware(['auth', 'verified'])->name('administrator');

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
require __DIR__.'/auth.php';
