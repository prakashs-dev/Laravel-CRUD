<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductAppController;
use Illuminate\Support\Facades\Route;

// Auth
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name("login.post");

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name("register.post");

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Product CRUD
Route::get('/products', [ProductAppController::class, 'index'])->name('home');
Route::get('products/create', [ProductAppController::class, 'create']);
Route::post('products/store', [ProductAppController::class, 'store']);

Route::get('products/{id}/view', [ProductAppController::class, 'view']);
Route::get('products/{id}/edit', [ProductAppController::class, 'edit']);
Route::put('products/{id}/update', [ProductAppController::class, 'update']);
Route::get('products/{id}/delete', [ProductAppController::class, 'delete']);