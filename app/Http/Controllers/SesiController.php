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

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}