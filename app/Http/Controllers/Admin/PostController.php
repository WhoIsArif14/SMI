<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Untuk membuat slug
use Illuminate\Support\Facades\Storage; // Untuk mengelola upload file
use Illuminate\Support\Facades\Auth; // Untuk mendapatkan user yang sedang login

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
            // 'is_published' akan otomatis dihandle oleh $request->has()
        ]);

        $slug = Str::slug($request->title);
        $imagePath = null;

        // Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            // Menggunakan disk 'public' dan menyimpan di folder 'posts' di dalamnya
            // Path yang disimpan ke DB akan relatif dari storage/app/public/, misal: 'posts/nama_file_unik.jpg'
            $imagePath = $request->file('image')->store('posts', 'public');
        }

        // Buat record berita baru
        Post::create([
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $imagePath, // Path gambar yang sudah benar
            'is_published' => $request->has('is_published'), // Cek apakah checkbox 'is_published' dicentang
            'published_at' => $request->has('is_published') ? now() : null, // Set tanggal publikasi jika dipublikasikan
            'user_id' => Auth::id(), // Ambil ID user yang sedang login
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail berita tertentu (opsional, karena admin biasanya pakai edit).
     */
    public function show(Post $post)
    {
        // Ini adalah method show untuk tampilan detail di sisi admin (jika ada)
        // Untuk halaman publik, Anda akan punya PostController terpisah atau method lain.
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
            // 'is_published' akan otomatis dihandle oleh $request->has()
        ]);

        $slug = Str::slug($request->title);
        $imagePath = $post->image; // Pertahankan gambar lama secara default

        // Proses upload gambar baru jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada, pastikan menggunakan disk 'public' untuk menghapus
            if ($imagePath && Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }
            // Simpan gambar baru ke disk 'public' di folder 'posts'
            $imagePath = $request->file('image')->store('posts', 'public');
        }
        // Tambahkan logika untuk menghapus gambar tanpa mengunggah yang baru
        // Anda perlu menambahkan input tersembunyi/checkbox di form edit jika ingin fitur ini
        // Contoh: <input type="checkbox" name="remove_image" value="1"> Hapus Gambar

        // else if ($request->boolean('remove_image')) { // Jika ada checkbox 'remove_image'
        //     if ($imagePath && Storage::disk('public')->exists($imagePath)) {
        //         Storage::disk('public')->delete($imagePath);
        //     }
        //     $imagePath = null;
        // }


        // Perbarui record berita
        $post->update([
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $imagePath, // Path gambar yang sudah benar
            'is_published' => $request->has('is_published'),
            // Jika is_published diubah menjadi true, set published_at ke sekarang jika belum ada
            'published_at' => $request->has('is_published') ? ($post->published_at ?? now()) : null,
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Berita berhasil diperbarui!');
    }

    /**
     * Menghapus berita dari database.
     */
    public function destroy(Post $post)
    {
        // Hapus gambar terkait jika ada, pastikan menggunakan disk 'public' untuk menghapus
        if ($post->image && Storage::disk('public')->exists($post->image)) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete(); // Hapus record berita

        return redirect()->route('admin.posts.index')->with('success', 'Berita berhasil dihapus!');
    }
}