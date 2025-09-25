<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'welcome']);

Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/create', [ProductController::class, 'create']);
