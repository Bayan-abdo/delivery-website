<?php

// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\Customer\CartController;
use App\Http\Controllers\Customer\RegisterController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('create-product', [ProductController::class, 'create'])->middleware('auth');
Route::post('store-product', [ProductController::class, 'store'])->middleware('auth');
Route::get('show-product/{key}', [ProductController::class, 'show']);
Route::get('edit-product/{key}', [ProductController::class, 'edit']);
Route::patch('/products/{key}', [ProductController::class, 'update']);
Route::delete('/products/{key}', [ProductController::class, 'destroy']);

Route::get('/about', [ProductController::class, 'about']);
Route::get('/laroca', [ProductController::class, 'laroca']);

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('orders', [App\Http\Controllers\OrderController::class, 'index'])->middleware('auth');
Route::get('orders/{id}', [App\Http\Controllers\OrderController::class, 'show'])->middleware('auth');

// Customer Routes:
Route::get('customer/register', [RegisterController::class, 'showRegistrationFrom']); 
Route::post('customer/register', [RegisterController::class, 'register']);

Route::get('customer/login', [AuthController::class, 'showLoginForm']);
Route::post('customer/login', [AuthController::class, 'login']);
Route::post('customer/logout', [AuthController::class, 'logout']);

Route::post('cart', [CartController::class, 'store']);
Route::delete('cart', [CartController::class, 'destroy']);
Route::get('cart', [CartController::class, 'index']);
Route::patch('cart', [CartController::class, 'update']);

Route::post('order', [App\Http\Controllers\Customer\OrderController::class, 'store']);