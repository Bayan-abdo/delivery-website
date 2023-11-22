<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function username()
    {
        return 'phone';
    }

    protected function guard()
    {
        return Auth::guard('customer');
    }

    public function showLoginForm()
    {
        return view('customer.auth.login');
    }
}
