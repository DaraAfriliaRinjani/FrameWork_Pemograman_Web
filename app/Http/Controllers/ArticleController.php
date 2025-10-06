<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // Import model Article
use Illuminate\Support\Facades\Auth; // Import Auth untuk cek user login

class ArticleController extends Controller
{
    /**
     * Tampilkan daftar artikel.
     */
    public function index()
    {
        // Admin bisa lihat semua artikel, user hanya lihat artikelnya sendiri
        if (Auth::user()->role === 'admin') {
            $articles = Article::all();
        } else {
            $articles = Article::where('user_id', Auth::id())->get();
        }

        return view('articles.index', compact('articles'));
    }

    /**
     * Form buat artikel baru.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Simpan artikel baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dibuat');
    }

    /**
     * Hapus artikel.
     */
    public function destroy(Article $article)
    {
        // Admin bisa hapus semua, user hanya bisa hapus artikelnya sendiri
        if (Auth::user()->role === 'admin' || $article->user_id === Auth::id()) {
            $article->delete();
            return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus');
        }

        return redirect()->route('articles.index')->with('error', 'Tidak punya hak menghapus artikel ini');
    }
}