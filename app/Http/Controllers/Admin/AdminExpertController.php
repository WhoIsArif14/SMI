<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Expert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Untuk menghapus foto lama

class AdminExpertController extends Controller
{
    /**
     * Display a listing of the experts.
     */
    public function index()
    {
        $experts = Expert::orderBy('category')->orderBy('name')->get();
        return view('admin.experts.index', compact('experts'));
    }

    /**
     * Show the form for creating a new expert.
     */
    public function create()
    {
        $categories = Expert::CATEGORIES; // Ambil kategori dari model
        return view('admin.experts.create', compact('categories'));
    }

    /**
     * Store a newly created expert in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'university' => 'nullable|string|max:255',
            'category' => 'required|string|in:' . implode(',', Expert::CATEGORIES), // Validasi kategori
            'experience' => 'required|string',
            'full_bio' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi foto
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('experts', 'public');
        }

        Expert::create([
            'name' => $request->name,
            'university' => $request->university,
            'category' => $request->category,
            'experience' => $request->experience,
            'full_bio' => $request->full_bio,
            'photo_path' => $photoPath,
        ]);

        return redirect()->route('admin.experts.index')->with('success', 'Expert berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified expert.
     */
    public function edit(Expert $expert)
    {
        $categories = Expert::CATEGORIES;
        return view('admin.experts.edit', compact('expert', 'categories'));
    }

    /**
     * Update the specified expert in storage.
     */
    public function update(Request $request, Expert $expert)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'university' => 'nullable|string|max:255',
            'category' => 'required|string|in:' . implode(',', Expert::CATEGORIES),
            'experience' => 'required|string',
            'full_bio' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $photoPath = $expert->photo_path;
        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($photoPath && Storage::disk('public')->exists($photoPath)) {
                Storage::disk('public')->delete($photoPath);
            }
            $photoPath = $request->file('photo')->store('experts', 'public');
        } elseif ($request->boolean('remove_photo')) { // Opsi untuk menghapus foto tanpa mengunggah yang baru
            if ($photoPath && Storage::disk('public')->exists($photoPath)) {
                Storage::disk('public')->delete($photoPath);
            }
            $photoPath = null;
        }

        $expert->update([
            'name' => $request->name,
            'university' => $request->university,
            'category' => $request->category,
            'experience' => $request->experience,
            'full_bio' => $request->full_bio,
            'photo_path' => $photoPath,
        ]);

        return redirect()->route('admin.experts.index')->with('success', 'Expert berhasil diperbarui!');
    }

    /**
     * Remove the specified expert from storage.
     */
    public function destroy(Expert $expert)
    {
        // Hapus foto expert dari storage
        if ($expert->photo_path && Storage::disk('public')->exists($expert->photo_path)) {
            Storage::disk('public')->delete($expert->photo_path);
        }

        $expert->delete();

        return redirect()->route('admin.experts.index')->with('success', 'Expert berhasil dihapus!');
    }
}