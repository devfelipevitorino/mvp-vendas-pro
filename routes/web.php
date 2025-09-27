<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;

Route::get('/', [ProductController::class, 'welcome']);

Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth');

Route::post('/products', [ProductController::class, 'store'])->middleware('auth');
Route::get('/products/create', [ProductController::class, 'create'])->middleware('auth');

Route::post('/category', [CategoryController::class, 'store'])->middleware('auth');
Route::get('/category/create', [CategoryController::class, 'create'])->middleware('auth');

Route::post('/suppliers', [SupplierController::class, 'store'])->middleware('auth');
Route::get('/suppliers/create', [SupplierController::class, 'create'])->middleware('auth');
