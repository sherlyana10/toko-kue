<?php

use Illuminate\Support\Facades\Route;

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
