<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Redirect ke halaman utama atau tampilkan daftar halaman
        return redirect()->route('home');
        
        // Atau jika ingin menampilkan daftar halaman:
        // $pages = [
        //     ['title' => 'Tentang Kami', 'slug' => 'about-us'],
        //     ['title' => 'Layanan', 'slug' => 'services'],
        //     ['title' => 'Kontak', 'slug' => 'contact'],
        // ];
        // return view('pages.index', compact('pages'));
    }

    public function show($slug)
    {
        switch ($slug) {
            case 'about-us':
                return view('pages.about-us');
            case 'services':
                return view('pages.services');
            case 'contact':
                return view('pages.contact');
            default:
                abort(404);
        }
    }
}