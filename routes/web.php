<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'authenticate']);
Route::get('register', [LoginController::class, 'registerForm'])->name('register');
Route::post('register', [LoginController::class, 'register']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::get('/products/{product}/buy', [ProductController::class, 'buyForm'])->name('products.buy');
    Route::post('/products/{product}/purchase', [ProductController::class, 'buy'])->name('products.purchase');

    Route::get('/sales', [SaleController::class, 'index'])->name('sales.index');
});