<?php

use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');


Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');