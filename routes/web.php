<?php
use App\Http\Controllers\ProdectController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
Route::get('/products', [ProdectController::class, 'index']);

Route::get('create-product', [ProdectController::class, 'create'])->middleware('auth');

Route::post('store-product', [ProdectController::class, 'store'])->middleware('auth');

Route::get('show-product/{key}', [ProdectController::class, 'show']);

Route::get('/', [ProdectController::class, 'index']);


Route::delete('/products/{key}', [ProdectController::class, 'destroy']);

Route::get('edit-product/{key}', [ProdectController::class, 'edit']);

Route::patch('/products/{key}', [ProdectController::class, 'update']);


Route::get('/cart', [ProdectController::class, 'cart']);
Route::get('/laroca', [ProdectController::class, 'laroca']);



Route::get('/eloquent', function () {

    // get a specific product
    // return Product::find(2);

    // accessing an attribute of the product
    // $product = Product::find(3);
    // return $product->name;

    // or
    // return Product::find(3)->name;

    // get all products
    // return Product::all();

    // get latest 2 products
    // return Product::latest('id')->limit(2)->get();

    // get products ordered by specific column
    // return Product::orderBy('price', 'ASC')->get()

    // get latest product
    // return Product::latest('id')->first();

    // get products that has price over 20
    // return Product::where('price', '>', 20)->get();

});


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');