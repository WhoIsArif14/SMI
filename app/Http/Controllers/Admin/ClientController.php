<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Untuk mengelola penyimpanan file

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::latest()->paginate(10);
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        $logoPath = null;
        if ($request->hasFile('logo')) {
            // Simpan logo ke direktori 'public/clients'
            $logoPath = $request->file('logo')->store('public/clients');
            // Ubah path agar bisa diakses publik (hapus 'public/')
            $logoPath = str_replace('public/', '', $logoPath);
        }

        Client::create([
            'name' => $request->name,
            'logo' => $logoPath,
        ]);

        return redirect()->route('admin.clients.index')->with('success', 'Klien berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('admin.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Logo opsional saat update
        ]);

        $logoPath = $client->logo; // Gunakan logo lama secara default

        if ($request->hasFile('logo')) {
            // Hapus logo lama jika ada
            if ($client->logo) {
                Storage::delete('public/' . $client->logo); // Hati-hati dengan path 'public/'
            }
            // Simpan logo baru
            $logoPath = $request->file('logo')->store('public/clients');
            $logoPath = str_replace('public/', '', $logoPath);
        }

        $client->update([
            'name' => $request->name,
            'logo' => $logoPath,
        ]);

        return redirect()->route('admin.clients.index')->with('success', 'Klien berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        if ($client->logo) {
            Storage::delete('public/' . $client->logo);
        }
        $client->delete();

        return redirect()->route('admin.clients.index')->with('success', 'Klien berhasil dihapus!');
    }
}