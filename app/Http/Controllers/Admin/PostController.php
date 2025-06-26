<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Untuk membuat slug
use Illuminate\Support\Facades\Storage; // Untuk mengelola upload file

class PostController extends Controller
{
    /**
     * Menampilkan daftar semua berita (untuk admin).
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10); // Ambil semua berita, terbaru duluan
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Menampilkan form untuk membuat berita baru.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Menyimpan berita baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Max 2MB
            'is_published' => 'boolean', // Ini akan otomatis dihandle oleh checkbox
        ]);

        $slug = Str::slug($request->title); // Buat slug dari judul
        $imagePath = null;

        // Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/posts'); // Simpan di storage/app/public/posts
        }

        // Buat record berita baru
        Post::create([
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $imagePath,
            'is_published' => $request->has('is_published'), // Cek apakah checkbox dicentang
            'published_at' => $request->has('is_published') ? now() : null, // Set tanggal publikasi jika dipublikasikan
            'user_id' => auth()->id(), // Ambil ID user yang sedang login
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail berita tertentu (opsional, karena admin biasanya pakai edit).
     */
    public function show(Post $post)
    {
        // Biasanya tidak digunakan langsung untuk admin, lebih ke halaman publik
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Menampilkan form untuk mengedit berita yang sudah ada.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Memperbarui berita yang sudah ada di database.
     */
    public function update(Request $request, Post $post)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_published' => 'boolean',
        ]);

        $slug = Str::slug($request->title);
        $imagePath = $post->image; // Pertahankan gambar lama secara default

        // Proses upload gambar baru jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($imagePath) {
                Storage::delete($imagePath);
            }
            $imagePath = $request->file('image')->store('public/posts');
        }

        // Perbarui record berita
        $post->update([
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $imagePath,
            'is_published' => $request->has('is_published'),
            // Jika is_published diubah menjadi true, set published_at ke sekarang jika belum ada
            // Jika is_published diubah menjadi false, set published_at menjadi null
            'published_at' => $request->has('is_published') ? ($post->published_at ?? now()) : null,
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Berita berhasil diperbarui!');
    }

    /**
     * Menghapus berita dari database.
     */
    public function destroy(Post $post)
    {
        // Hapus gambar terkait jika ada
        if ($post->image) {
            Storage::delete($post->image);
        }

        $post->delete(); // Hapus record berita

        return redirect()->route('admin.posts.index')->with('success', 'Berita berhasil dihapus!');
    }
}