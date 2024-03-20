<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;


class loginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginproses(Request $request)
    {
        if (auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }
         return redirect('login');
    }
}
