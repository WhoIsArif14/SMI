<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController; // Masih diperlukan jika Anda punya halaman dinamis lain selain about/services/contact
use App\Http\Controllers\PostController; // Untuk berita/artikel

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
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk Daftar Berita/Artikel
Route::get('/news', [PostController::class, 'index'])->name('news.index');

// Rute untuk Detail Berita/Artikel
Route::get('/news/{slug}', [PostController::class, 'show'])->name('news.show');

// Halaman Statis: Tentang Kami
Route::get('/abouts', function () {
    return view('abouts.static'); // Pastikan Anda memiliki resources/views/about-us.blade.php
})->name('about-us');

// Halaman Statis: Services
Route::get('/services', function () {
    return view('services.static'); // Pastikan Anda memiliki resources/views/services.blade.php
})->name('services');

// Halaman Statis: Layanan Outbound
Route::get('/services/rekrutmen', function () {
    return view('services.rekrutmen');
})->name('services.rekrutmen');

Route::get('/services/asesmen', function () {
    return view('services.asesmen');
})->name('services.asesmen');

Route::get('/services/test', function () {
    return view('services.test');
})->name('services.test');

Route::get('/services/coaching', function () {
    return view('services.coaching');
})->name('services.coaching');

Route::get('/services/seminar', function () {
    return view('services.seminat');
})->name('services.seminar');

Route::get('/services/konseling', function () {
    return view('services.konseling');
})->name('services.konseling');

Route::get('/services/pengembangan', function () {
    return view('services.pengembangan');
})->name('services.pengembangan');

Route::get('/services/pelatihan', function () {
    return view('services.pelatihan');
})->name('services.pelatihan');

Route::get('/services/outbond', function () {
    return view('services.outbond');
})->name('services.outbond');

// Halaman Statis: Contact
Route::get('/contacts', function () {
    return view('contacts.static'); // Pastikan Anda memiliki resources/views/contact.blade.php
})->name('contact');

// Halaman Statis: Expert Kami
Route::get('/experts', function () {
    return view('experts.static'); // Pastikan Anda memiliki resources/views/experts/static.blade.php
})->name('experts.index');

Route::get('/careers', function () {
    return view('careers.static');
})->name('careers.index');


// Redirect /pages ke home untuk mencegah akses langsung
Route::get('/pages', function () {
    return redirect()->route('home');
});


// --- RUTE UNTUK PENGGUNA TERAUTENTIKASI (Laravel Breeze) ---

// Dashboard redirect ke admin dashboard
Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->name('dashboard');

// Rute untuk manajemen profil pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --- RUTE SISI ADMIN (BACKEND) ---
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Redirect /admin ke dashboard
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    // Manajemen Berita (Posts) - CRUD
    Route::resource('posts', AdminPostController::class);

    // Manajemen Halaman (Pages) - CRUD
    Route::resource('pages', AdminPageController::class);

    // Manajemen Klien (Clients) - CRUD
    Route::resource('clients', ClientController::class);

    // --- Rute tambahan untuk manajemen lainnya (uncomment jika diperlukan) ---
    // Route::resource('portfolios', App\Http\Controllers\Admin\PortfolioController::class);
    // Route::resource('testimonials', App\Http\Controllers\Admin\TestimonialController::class);
    // Route::resource('galleries', App\Http\Controllers\Admin\GalleryController::class);

    // Rute untuk pengaturan sistem
    // Route::get('/settings', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
    // Route::post('/settings', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');

    // Rute untuk manajemen user (jika diperlukan)
    // Route::resource('users', App\Http\Controllers\Admin\UserController::class);
});

// RUTE AUTENTIKASI BAWAAN BREEZE
require __DIR__.'/auth.php';