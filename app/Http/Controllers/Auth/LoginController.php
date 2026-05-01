<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard';

    // Tambahkan ini - gunakan email untuk login
    public function username()
    {
        return 'email';
    }

    // Notif login berhasil
    protected function authenticated(Request $request, $user)
    {
        session()->flash('swal', [
            'title' => 'Login Berhasil!',
            'text' => 'Selamat datang, ' . $user->nama . '!',
            'icon' => 'success'
        ]);
        return redirect()->intended('/dashboard');
    }

    // Notif login gagal
    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->back()
            ->with('error', 'Email atau Password Salah!')
            ->withInput($request->only($this->username(), 'remember'));
    }
}