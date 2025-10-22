<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BeritaPromoController;



Route::get('/', [ProductController::class, 'index']);
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/kategori/{kategori}', [ProductController::class, 'kategori'])->name('product.kategori');
Route::get('/detail/{kode_product}', [ProductController::class, 'detail'])->name('detail');
Route::match(['get', 'post'],'/simpan/keranjang/', [ProductController::class, 'keranjang'])->name('simpan.keranjang');
Route::get('/beritapromo', [BeritaPromoController::class, 'index'])->name('beritapromo');
