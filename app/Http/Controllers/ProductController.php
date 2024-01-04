<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index() 
    {
        $products = Product::query();

        if (request('category_id')) {
            $products = $products->where('category_id', request('category_id'));
        }

        $products = $products->latest()->get();

        $customer = auth('customer')->user();

        $cartItems = $customer?->cart?->items;

        $categories = Category::all();

        return view('products/index')
            ->with('products', $products)
            ->with('cartItems', $cartItems)
            ->with('categories', $categories);
    }

    public function create()
    {
        $categories = Category::all();

        return view('products/create')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        // php artisan storage:link
        $p = new Product;

        $p->name = request('name');
        $p->price = request('price');
        $p->description = request('description');
        $p->category_id = request('category_id');

        if (request('image')) {
            $imagePath = request('image')->store('product_images');

            $p->image = $imagePath;
        }


        $p->save();

        return redirect('products');
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('products/show')->with('item', $product);
    }

    public function edit($id)
    {
        $categories = Category::all();

        $product = Product::find($id);

        return view('products/edit')
            ->with('categories', $categories)
            ->with('product', $product);
    }

    public function update($id)
    {
        $p = Product::find($id);

        $p->name = request('name');
        $p->price = request('price');
        $p->description = request('description');
        $p->category_id = request('category_id');

        if (request('image')) {
            $imagePath = request('image')->store('product_images');

            $p->image = $imagePath;
        }

        $p->save();

        return redirect('products');
    }
    
    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect('products');
    }
    
    public function about()
    {
    

        return view('products/about');
    }
    public function laroca()
    {
    

        return view('products/laroca');
    }
    
}

