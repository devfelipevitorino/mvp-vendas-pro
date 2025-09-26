<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [ProductController::class, 'welcome']);

Route::post('/products', [ProductController::class, 'store'])->middleware('auth');
Route::get('/products/create', [ProductController::class, 'create'])->middleware('auth');
