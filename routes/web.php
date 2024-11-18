<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileDesaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GalleryController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/tentang', [TentangController::class, 'index']);

Route::resource('profile_desa', ProfileDesaController::class);

Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');

Route::get('/wisata', [WisataController::class, 'index'])->name('wisata');

// Rute untuk menampilkan form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Rute untuk menangani login (POST request)
Route::post('/login', [LoginController::class, 'login']);

// Rute untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk halaman index setelah login (Halaman utama untuk admin)
Route::middleware('auth')->get('/index', function () {
    return view('admin.gallery.index');  // Ganti dengan tampilan galeri index
});

// Rute untuk halaman galeri yang dilindungi oleh autentikasi
Route::middleware('auth')->prefix('admin')->name('gallery.')->group(function () {
    Route::get('/gallery', [GalleryController::class, 'index'])->name('index');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('create');
    Route::post('/gallery', [GalleryController::class, 'store'])->name('store');
    Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('edit');
    Route::put('/gallery/{id}', [GalleryController::class, 'update'])->name('update');
    Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('destroy');
});
