<?php

namespace App\Http\Controllers;

use App\Models\Post; // Panggil model Post
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Menampilkan daftar berita yang sudah dipublikasikan.
     */
    public function index()
    {
        $posts = Post::where('is_published', true) // Hanya tampilkan yang sudah dipublikasikan
                     ->latest() // Urutkan dari yang terbaru
                     ->paginate(10); // Paginate untuk 10 berita per halaman

        return view('news.index', compact('posts'));
    }

    /**
     * Menampilkan detail berita berdasarkan slug.
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)
                    ->where('is_published', true) // Pastikan hanya yang sudah dipublikasikan
                    ->firstOrFail(); // Ambil berita atau tampilkan 404

        return view('news.show', compact('post'));
    }
}