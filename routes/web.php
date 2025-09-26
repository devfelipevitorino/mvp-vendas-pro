<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/', [ProductController::class, 'welcome']);

Route::post('/products', [ProductController::class, 'store'])->middleware('auth');
Route::get('/products/create', [ProductController::class, 'create'])->middleware('auth');

Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth');
