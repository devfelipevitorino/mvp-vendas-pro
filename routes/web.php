<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ClientController;

Route::get('/', [ProductController::class, 'welcome']);

Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth');

Route::post('/products', [ProductController::class, 'store'])->middleware('auth');
Route::get('/products/create', [ProductController::class, 'create'])->middleware('auth');
Route::get('/products/list', [ProductController::class, 'list'])->middleware('auth');
Route::get('/product/{id}', [ProductController::class, 'edit'])->middleware('auth');
Route::put('/product/{id}', [ProductController::class, 'update'])->middleware('auth');

Route::post('/category', [CategoryController::class, 'store'])->middleware('auth');
Route::get('/category/create', [CategoryController::class, 'create'])->middleware('auth');
Route::get('/category/list', [CategoryController::class, 'list'])->middleware('auth');
Route::get('/category/{id}', [CategoryController::class, 'edit'])->middleware('auth');
Route::put('/category/{id}', [CategoryController::class, 'update'])->middleware('auth');

Route::post('/suppliers', [SupplierController::class, 'store'])->middleware('auth');
Route::get('/suppliers/create', [SupplierController::class, 'create'])->middleware('auth');
Route::get('/suppliers/list', [SupplierController::class, 'list'])->middleware('auth');
Route::get('/supplier/{id}', [SupplierController::class, 'edit'])->middleware('auth');
Route::put('/supplier/{id}', [SupplierController::class, 'update'])->middleware('auth');

Route::post('clients', [ClientController::class, 'store'])->middleware('auth');
Route::get('clients/create', [ClientController::class, 'create'])->middleware('auth');
Route::get('clients/list', [ClientController::class, 'list'])->middleware('auth');
Route::get('clients/{id}', [ClientController::class, 'edit'])->middleware('auth');
Route::put('clients/{id}', [ClientController::class, 'update'])->middleware('auth');
