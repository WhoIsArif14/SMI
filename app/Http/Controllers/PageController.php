<?php

namespace App\Http\Controllers;

use App\Models\Page; // Panggil model Page
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Menampilkan halaman dinamis berdasarkan slug.
     */
    public function show($slug)
    {
        // Ambil halaman dari database berdasarkan slug, atau tampilkan 404 jika tidak ditemukan
        $page = Page::where('slug', $slug)->firstOrFail();

        // Tampilkan view dengan data halaman
        return view('pages.show', compact('page'));
    }
}