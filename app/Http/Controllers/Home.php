<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }


    public function authenticate(Request $request){
        dd($request->all());
        if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
            // Authentication was successful...
        }
    }

    public function register()
    {
        return view('register');
    }


    public function registerProcess(Request $request)
    {
        dd($request->except('_token'));
        return view('register');
    }
}
