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
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('sesi.login')->with('success', 'Selamat datang, Anda berhasil login!');
        }
        

        // Kembali ke form login jika gagal dengan session flash (agar bisa dipakai untuk pop-up)
        return back()->with('error', 'Email atau password yang Anda masukkan salah.')->withInput();
    }

    public function logout()
    {
        Auth::logout(); // Logout user
        return redirect()->route('sesi.login'); // Redirect ke halaman login setelah logout
    }
}
