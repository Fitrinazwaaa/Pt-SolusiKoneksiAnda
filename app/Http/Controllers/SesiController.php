<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email'   => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib di isi',
            'password.required' => 'Password wajib di isi',
        ]);

        $infologin = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return redirect('/dashboard'); // Redirect ke dashboard utama
        } else {
            return redirect('/')->withErrors('Email atau password tidak sesuai')->withInput();
        }
    }

    public function register()
    {
        return view('register');
    }
    
    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.confirmed' => 'Konfirmasi password tidak cocok',
        ]);
    
        // Buat user baru dengan role default "user"
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // ← role otomatis 'user'
        ]);
    
        return redirect('/')->with('success', 'Akun berhasil dibuat, silakan login!');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}