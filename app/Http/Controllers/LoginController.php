<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect('dashboard');
        }
        return view('login');
    }

    public function auth(Request $request){
        if (Auth::attempt($request->only('username', 'password')))
        {
            return redirect('dashboard');
        }
        return redirect('/');
    }

    public function register(Request $request){
        return view('register');
    }

    public function create(Request $request){
        
        $user = new User;

        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = Hash::make( $request->password);

        $user->save();

        return redirect('/');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
