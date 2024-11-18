<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class LoginController extends Controller
{
    // Fungsi untuk menampilkan form login
    public function showLoginForm()
    {
        return view('admin.auth.login');  // Memanggil tampilan 'auth.login' di resources/views/auth/login.blade.php
    }

    // Fungsi untuk menangani login
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Kirim pesan flash ke session untuk menunjukkan bahwa login berhasil
            return redirect()->route('gallery.index')->with('success', 'Login Berhasil');
        }

        // Jika login gagal, kembali ke halaman login dengan error message
        return back()->withErrors(['email' => 'The provided credentials do not match our records.'])->with('error', 'Login Gagal');
    
    }

    // Fungsi untuk logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
