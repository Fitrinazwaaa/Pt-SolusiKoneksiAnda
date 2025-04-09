<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            // $produks = Produk::all();
            // $artikels = Artikel::all();
            // $galeris = Galeri::all();

            return view('operator.dashboard', compact('user'));
        } elseif ($user->role === 'user') {
            // Jika tidak login, arahkan ke landing page publik
            // $produk = Produk::all();
            // $artikel = Artikel::latest()->take(12)->get(); // misal hanya 6 artikel terbaru
            // $galeri = Galeri::latest()->take(9)->get(); // dan 9 gambar galeri
            
            return view('user.dashboard', compact('user'));      
        } else {
            abort(403, 'Akses tidak diizinkan');
        }
    }
}
