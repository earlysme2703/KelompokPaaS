<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Ambil semua data dari tabel posts
        return view('posts.index', ['posts' => $posts]);
    }
}
