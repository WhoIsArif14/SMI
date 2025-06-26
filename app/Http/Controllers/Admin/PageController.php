<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Untuk membuat slug

class PageController extends Controller
{
    /**
     * Menampilkan daftar semua halaman (untuk admin).
     */
    public function index()
    {
        $pages = Page::latest()->paginate(10);
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Menampilkan form untuk membuat halaman baru.
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Menyimpan halaman baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $slug = Str::slug($request->title);

        Page::create([
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Halaman berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail halaman tertentu (opsional).
     */
    public function show(Page $page)
    {
        // Biasanya tidak digunakan langsung untuk admin
        return view('admin.pages.show', compact('page'));
    }

    /**
     * Menampilkan form untuk mengedit halaman yang sudah ada.
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Memperbarui halaman yang sudah ada di database.
     */
    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $slug = Str::slug($request->title); // Buat slug baru jika judul berubah

        $page->update([
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Halaman berhasil diperbarui!');
    }

    /**
     * Menghapus halaman dari database.
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index')->with('success', 'Halaman berhasil dihapus!');
    }
}