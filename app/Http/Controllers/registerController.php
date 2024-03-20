<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class registerController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registeruser(Request $request)
    {
        // dd($request->all());
        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'address' => $request->address,
            'password' => bcrypt($request->password),
            'password_confirm' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('login');
    }
}
