<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        // mulai query dari model Post
        $query = Post::query();

        // kalau ada input pencarian
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('content', 'like', '%' . $request->search . '%');
        }

        // pagination + simpan parameter search
        $posts = $query->paginate(5)->withQueryString();

        // kirim ke view
        return view('posts.index', compact('posts'));
    }

    // method lainnya (create, store, dst) tetap kamu punya seperti biasa
}

