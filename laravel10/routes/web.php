<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cart', [CartController::class, 'index'])->name('cartIndex');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('addToCart');

Route::get('/{cat}', [ProductController::class, 'showCategory'])->name('showCategory');
Route::get('/{cat}/{product_id}', [ProductController::class, 'show'])->name('showProduct');

// Route::get('/{cat}/{product_alias}', [ProductController::class, 'show'])->name('showProduct');

// Route::get('/', function () {
//     return view('welcome');
// });
