<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

Route::get('/', [ProductController::class, 'welcome']);

Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth');

Route::post('/products', [ProductController::class, 'store'])->middleware('auth');
Route::get('/products/create', [ProductController::class, 'create'])->middleware('auth');

Route::post('/category', [CategoryController::class, 'store'])->middleware('auth');
Route::get('/category/create', [CategoryController::class, 'create'])->middleware('auth');
