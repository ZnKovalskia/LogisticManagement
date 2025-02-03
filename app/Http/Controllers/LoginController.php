<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan Form Login
    public function index()
    {
        return view('sesi.login'); // Pastikan ini mengarah ke halaman login
    }

    // Proses Login
    public function login(Request $request)
    {
        // Validasi input user
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Tentukan apakah "Remember Me" dicentang
        $remember = $request->has('remember') ? true : false;

        // Cek kredensial dan login user
        if (Auth::attempt($credentials)) {
            // Arahkan ke dashboard jika berhasil login
            return redirect()->intended('dashboard')->with('success','Berhasil Login');
        }

        // Kembali ke form login jika gagal
        return back()->withErrors([
            'email' => 'The provided credentials are incorrect.',
        ]);
    }

    public function logout()
    {
        Auth::logout(); // Logout user
        return redirect('/sesi/login'); // Redirect ke halaman login setelah logout
    }
}
