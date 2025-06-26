<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

// Controllers untuk Admin Panel
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\ClientController;

// Controller Profile dari Laravel Breeze
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// --- RUTE SISI PUBLIK (FRONTEND) ---

// Halaman Depan (Homepage)
// Menggunakan HomeController untuk merender welcome.blade.php
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk Halaman Dinamis (misalnya About Us, Services, Contact)
Route::get('/pages/{slug}', [PageController::class, 'show'])->name('pages.show');

// Rute untuk Daftar Berita/Artikel
Route::get('/news', [PostController::class, 'index'])->name('news.index');

// Rute untuk Detail Berita/Artikel
Route::get('/news/{slug}', [PostController::class, 'show'])->name('news.show');

// Rute tambahan untuk halaman statis
Route::get('/about', function () {
    return redirect()->route('pages.show', 'about-us');
})->name('about');

Route::get('/services', function () {
    return redirect()->route('pages.show', 'services');
})->name('services');

Route::get('/contact', function () {
    return redirect()->route('pages.show', 'contact');
})->name('contact');

// --- RUTE UNTUK PENGGUNA TERAUTENTIKASI (Laravel Breeze) ---

// Rute /dashboard default Breeze yang mengarahkan ke admin dashboard setelah login
Route::middleware(['auth'])->get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->name('dashboard');

// Rute untuk manajemen profil pengguna Breeze (edit, update, delete)
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --- RUTE SISI ADMIN (BACKEND) ---
// Semua rute di sini dilindungi oleh middleware 'auth' dan 'verified' (jika email verification aktif)
// Memiliki prefiks URL '/admin' dan prefiks nama rute 'admin.'
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Manajemen Berita (Posts) - CRUD
    Route::resource('posts', AdminPostController::class);

    // Manajemen Halaman (Pages) - CRUD
    Route::resource('pages', AdminPageController::class);

    // Manajemen Klien (Clients) - CRUD
    Route::resource('clients', ClientController::class);

    // --- Rute tambahan untuk manajemen lainnya ---
    // Route::resource('portfolios', App\Http\Controllers\Admin\PortfolioController::class);
    // Route::resource('testimonials', App\Http\Controllers\Admin\TestimonialController::class);
    // Route::resource('galleries', App\Http\Controllers\Admin\GalleryController::class);
    
    // Rute untuk pengaturan sistem
    // Route::get('/settings', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
    // Route::post('/settings', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');
    
    // Rute untuk manajemen user (jika diperlukan)
    // Route::resource('users', App\Http\Controllers\Admin\UserController::class);
});

// RUTE AUTENTIKASI BAWAAN BREEZE (Login, Register, Logout, Reset Password, dll.)
// Ini harus di bagian paling bawah file untuk menghindari konflik rute
require __DIR__.'/auth.php';
