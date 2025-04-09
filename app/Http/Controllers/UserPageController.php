<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserPageController extends Controller
{
    public function profile()
    {
        $profile = DB::table('setting_profile')->first(); // asumsinya 1 data saja
        return view('user.profile', compact('profile'));
    }
    
    public function produk($id)
    {
        $module = Module::with('objects')->findOrFail($id); // Hanya module yg dipilih
        $modules = Module::orderBy('index_order')->get(); // Untuk dropdown
    
        return view('user.produk', compact('module', 'modules'));
    }    

    public function artikel()
    {
        $articles = Article::where('status', 'publish')->orderBy('created_at', 'desc')->get();
        return view('user.artikel', compact('articles'));
    }

    public function show($slug)
{
    $article = Article::where('post_name', $slug)->firstOrFail();
    return view('user.artikel-detail', compact('article'));
}

    function galeri()
    {
        return view('user.galeri');
    }
    function kontak()
    {
        return view('user.kontak');
    }
}
