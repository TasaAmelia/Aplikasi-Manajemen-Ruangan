<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function indexLogin()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authLogin(Request $request)
    {
        // $request->validate([
        //     'username_admin' => 'required',
        //     'password_admin' => 'required'
        // ]);

        // $credentials = $request->only('username_admin', 'password_admin');

        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('/');
        // }

        // return back()->with('loginError', 'Login failed !');

        $credentials = $request->validate([
            'username_admin' => 'required',
            'password_admin' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed !');
    }
}
