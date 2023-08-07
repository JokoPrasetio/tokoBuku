<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Toko Buku | Joko Prasetio',

        ];
        return view('auth.login', $data);
    }

    public function authentication()
    {
        $validator = request()->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:6',
        ]);
        if (Auth::attempt($validator)) {
            request()->session()->regenerate();
            return redirect()->intended('/category');
        }
        return back()->with(['loginError' => 'Login failed chek Email Or Password']);
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
