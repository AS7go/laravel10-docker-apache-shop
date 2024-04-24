<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/{cat}', [ProductController::class, 'showCategory'])->name('showCategory');
Route::get('/{cat}/{product_id}', [ProductController::class, 'show'])->name('showProduct');

// Route::get('/{cat}/{product_alias}', [ProductController::class, 'show'])->name('showProduct');


// Route::get('/', [HomeController::class, 'index']);
// Route::get('/{cat_alias}', [ProductController::class, 'showCategory'])->name('showCategory');
// Route::get('/{cat_alias}/{product_alias}', [ProductController::class, 'show'])->name('showProduct');


// Route::get('/category/{product_alias}', [ProductController::class, 'show'])->name('showProduct');

// Route::get('/{cat}/{product_alias}', [ProductController::class, 'show'])->name('showProduct');


// Route::get('/{cat}/{product_title}', [ProductController::class])->name('showTitle');

// Route::get('/{cat}/{product_id}', [HomeController::class, 'index']);


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', function () {
//     return view('home.index');
// });
