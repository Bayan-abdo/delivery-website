<?php

// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\ProdectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProdectController::class, 'index']);
Route::get('/products', [ProdectController::class, 'index']);
Route::get('create-product', [ProdectController::class, 'create'])->middleware('auth');
Route::post('store-product', [ProdectController::class, 'store'])->middleware('auth');
Route::get('show-product/{key}', [ProdectController::class, 'show']);
Route::get('edit-product/{key}', [ProdectController::class, 'edit']);
Route::patch('/products/{key}', [ProdectController::class, 'update']);
Route::delete('/products/{key}', [ProdectController::class, 'destroy']);

Route::get('/cart', [ProdectController::class, 'cart']);
Route::get('/laroca', [ProdectController::class, 'laroca']);

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('customer/login', [AuthController::class, 'showLoginForm']);