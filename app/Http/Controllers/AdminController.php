<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Module;
use App\Models\SettingKontak;
use App\Models\SettingMedsos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index1()
    {
        $kontak = SettingKontak::first();
        $medsos = SettingMedsos::first();

        return view('user.dashboard', compact( 'kontak', 'medsos'));
    }
    public function index2()
    {
            // Ambil semua module beserta jumlah object-nya
            $modules = Module::withCount('objects')->get();
    
            // Hitung berdasarkan nama modul
            $totalProducts = Module::where('name', 'Produk')->withCount('objects')->first()?->objects_count ?? 0;
            $totalGalleries = Module::where('name', 'Galeri')->withCount('objects')->first()?->objects_count ?? 0;
    
            return view('operator.dashboard', compact('modules'), [
                'totalArticles' => Article::count(),
                'totalProducts' => $totalProducts,
                'totalGalleries' => $totalGalleries,
                'recentArticles' => Article::latest()->take(5)->get(),
            ]);
    }
    
}
