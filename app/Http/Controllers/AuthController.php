<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if(Auth::check()){
            return redirect('/'); 
        }
        return view('pages.auth.login'); 
    }

    public function postlogin(Request $request)
    {
        $credentials = $request->validate([
            'username'  => 'required|string|max:20',
            'password'  => 'required|string|min:6',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/');
        }
        
        return back()->withErrors([
            'username' => 'Username atau password salah',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();   
        return redirect('login'); 
    }
}
