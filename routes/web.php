<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/produk', function () {
    return view('admin.produk');
});
Route::get('/admin/pesanan', function () {
    return view('admin.pesanan');
});
Route::get('/admin/logout', function () {
    return view('admin.logout');
});
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');


// ======= Halaman Utama (Public) =======
// Public Routes
Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::get('/produk', function () {
    return view('public.produk');
})->name('produk');

Route::get('/tentang', function () {
    return view('public.tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('public.kontak');
})->name('kontak');
