<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->get();

        return view('orders/index')
            ->with('orders', $orders);
    }

    public function show($id)
    {
        $order = Order::find($id);

        return view('orders/show')
            ->with('order', $order);
    }
}
