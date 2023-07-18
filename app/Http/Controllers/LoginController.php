<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{

    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        Log::debug("sesuatu terjadi");

        if (!Auth::attempt($credentials)) {
            
            Log::debug("gagal login");
            return back()->withErrors([
                'username' => 'Login Gagal',
            ])->onlyInput('username');
        } 

        $request->session()->regenerate();

        Log::debug("Seseorang login");
        return redirect()->intended('/');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('login');
    }
}
