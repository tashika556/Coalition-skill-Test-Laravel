<?php

use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get('/edit', [ProductController::class, 'edit'])->name('edit');