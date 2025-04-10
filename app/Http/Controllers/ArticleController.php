<?php


namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $tags = Tag::all(); // ambil semua tag dari tabel
        $articles = Article::latest()->paginate(10);
        return view('operator.article', compact('articles', 'tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required',
            'meta_keyword' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'title_image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'status' => 'required|in:publish,draft',
            'tags' => 'required|string',
        ]);

        $imagePath = null;
        if ($request->hasFile('title_image')) {
            $imagePath = $request->file('title_image')->store('article_images', 'public');
        }

        Article::create([
            'post_name' => $request->post_name,
            'title' => $request->title,
            'content' => $request->content,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,
            'title_image' => $imagePath,
            'status' => $request->status,
            'tags' => $request->tags,
        ]);

        return back()->with('success', 'Artikel berhasil ditambahkan!');
    }

    public function update(Request $request, Article $article)
{
    $request->validate([
        'post_name' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'content' => 'nullable|string',
        'meta_keyword' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string|max:255',
        'title_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'status' => 'required|in:publish,draft',
        'tags' => 'required|in:travel,project,technology,life style,design',
    ]);

    // Cek jika ada gambar baru diupload
    if ($request->hasFile('title_image')) {
        // Hapus gambar lama jika ada
        if ($article->title_image) {
            Storage::disk('public')->delete($article->title_image);
        }

        $imagePath = $request->file('title_image')->store('articles', 'public');
    } else {
        $imagePath = $article->title_image;
    }

    $article->update([
        'post_name' => $request->post_name,
        'title' => $request->title,
        'content' => $request->content,
        'meta_keyword' => $request->meta_keyword,
        'meta_description' => $request->meta_description,
        'title_image' => $imagePath,
        'status' => $request->status,
        'tags' => $request->tags,
    ]);

    return redirect()->back()->with('success', 'Artikel berhasil diperbarui.');
}

    public function destroy(Article $article)
{
    // Hapus file gambar dari storage jika ada
    if ($article->title_image) {
        Storage::disk('public')->delete($article->title_image);
    }

    // Hapus data artikel dari database
    $article->delete();

    return redirect()->back()->with('success', 'Artikel berhasil dihapus.');
}
}
