<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationFrom()
    {
        return view('customer/register');
    }

    public function register(Request $request)
    {
        $c = new Customer;

        $c->name = request('name');
        $c->phone = request('phone');
        $c->password = bcrypt(request('password'));

        $c->save();

        return redirect('products');
    }

}
