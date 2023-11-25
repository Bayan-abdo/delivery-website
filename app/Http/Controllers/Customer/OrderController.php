<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store()
    {
        $customer = auth('customer')->user();

        $order = $customer->orders()->make();

        $order->reception_type = request('reception_type');
        $order->save();

        foreach ($customer->cart->items as $cartItem) {
            $orderItem = $order->items()->make();

            $orderItem->product_id = $cartItem->product_id;
            $orderItem->quantity = $cartItem->quantity;
            $orderItem->sold_price = $cartItem->product->price;

            $orderItem->save();
        }

        $customer->cart->items()->delete();

        return redirect('products')->with('status', 'تم الطلب بنجاح، طلبية رقم #' . $order->id);
    }
}
