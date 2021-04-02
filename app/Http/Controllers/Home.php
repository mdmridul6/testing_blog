<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Home extends Controller
{
    public function index()
    {
        $data=[];
        $data['airticals']=Posts::with('author','Category')->paginate('20');
        return view('index',$data);
    }

    public function login()
    {
        return view('login');
    }


    public function authenticate(Request $request){

        $email=$request->inputEmail;
        $password=$request->inputPassword;
        $remember=$request->remember;
        if (Auth::attempt(['email' => $email, 'password' => $password],$remember)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }else{
            return redirect()->route('login');
        }
    }

    public function register()
    {
        return view('register');
    }


    public function registerProcess(Request $request)
    {
        $user= new User();
        $user->name=$request->name;
        $user->address=$request->address;
        $user->email=$request->email;
        $user->email_verified_at=Carbon::now();
        $user->password=Hash::make($request->password);
        $user->save();
        return view('register');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
