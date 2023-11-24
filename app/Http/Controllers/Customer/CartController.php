<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $customer = auth('customer')->user();

        return view('customer/cart')
            ->with('cartItems', $customer->cart->items);
    }

    public function store(Request $request)
    {
        $customer = auth('customer')->user();

        $cart = $customer->cart;

        if (! $cart) {
            $cart = new Cart;
            $cart->customer_id = $customer->id;
            $cart->save();
        }

        $item = $cart->items()->make();

        $item->product_id = request('product_id');

        $item->save();

        return redirect()->back();
    }

    public function update()
    {
        $customer = auth('customer')->user();

        $item = $customer->cart->items()->where('product_id', request('product_id'))->first();

        $item->quantity = request('quantity');

        $item->save();

        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $customer = auth('customer')->user();

        $cart = $customer->cart;

        $cart->items()->where('product_id', '=', $request->product_id)->delete();

        return redirect()->back();
    }
}
