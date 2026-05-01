<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginProses(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard')
                ->with('success', 'Login berhasil! Selamat datang, ' . Auth::user()->nama . '!');
        } else {
            return redirect()->back()
                ->with('error', 'Email atau Password Salah!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')
            ->with('success', 'Logout berhasil!');
    }
}