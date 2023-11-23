<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view("login");
    }
    public function proseslogin(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        $data = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('index');
        } else {
            return redirect()->route('login')->with('failed', 'Email/Password salah');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Berhasil Logout');
    }
}
