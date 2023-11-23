<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationFrom()
    {
        $customers = Customer::all();

        return view('Customer/Register')->with('customers', $customers);
    }

    public function register(Request $request)
    {
        // php artisan storage:link
        $c = new Customer;

        $c->name = request('name');
        $c->phone = request('phone');
        $c->password = request('password');

        $c->save();

        return redirect('products');
    }

}
