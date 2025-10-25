<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BeritaPromoController;
use App\Http\Controllers\HomeController;



Route::get('/', [ProductController::class, 'index']);
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/kategori/{kategori}', [ProductController::class, 'kategori'])->name('product.kategori');
Route::get('/detail/{kode_product}', [ProductController::class, 'detail'])->name('detail');
Route::match(['get', 'post'],'/simpan/keranjang/', [ProductController::class, 'keranjang'])->name('simpan.keranjang');
Route::get('/beritapromo', [BeritaPromoController::class, 'index'])->name('beritapromo');
Route::get('/regis', [HomeController::class, 'index'])->name('regis');
Route::get('/regis/save', [HomeController::class, 'regis'])->name('regis.save');
Route::get('/login/view', [HomeController::class, 'loginView'])->name('login.view');
Route::get('/login', [HomeController::class, 'login'])->name('login');
