<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;

Route::get('/', [MenuController::class, 'index']);
Route::get('/checkout', [MenuController::class, 'checkout'])->name('checkout');
Route::post('/submit-order', [OrderController::class, 'store'])->name('submit.order');
Route::get('/admin', [AdminController::class, 'index']);
