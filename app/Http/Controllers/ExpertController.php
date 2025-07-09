<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    /**
     * Display a listing of the experts for the public frontend.
     */
    public function index(Request $request)
    {
        // Ambil kategori dari konstanta di Model Expert
        $categories = Expert::CATEGORIES; // Ini adalah array string

        // Query untuk mengambil experts
        $query = Expert::query();

        // **PENTING:** Inisialisasi variabel untuk kategori yang dipilih
        $selectedCategory = null;

        // Jika ada parameter 'category' di URL
        if ($request->has('category')) {
            $requestedCategory = $request->query('category');

            // Kita perlu membersihkan string kategori yang diminta dari URL
            // dan membandingkannya dengan cara yang lebih toleran terhadap spasi ekstra
            // atau perbedaan case.
            // Gunakan trim() untuk menghapus spasi di awal/akhir
            // Gunakan strtoupper() untuk memastikan perbandingan case-insensitive jika database case-sensitive

            // Coba temukan kategori yang cocok di daftar konstanta kita
            foreach ($categories as $categoryNameInConst) {
                if (strtoupper(trim($requestedCategory)) == strtoupper(trim($categoryNameInConst))) {
                    $selectedCategory = $categoryNameInConst;
                    break;
                }
            }

            // Jika kategori yang diminta ditemukan dan valid dari daftar konstanta
            if ($selectedCategory) {
                // Filter expert berdasarkan nama kategori yang sudah divalidasi
                // Pastikan nilai di DB juga sudah di-trim dan di-uppercase jika perlu untuk perbandingan
                $query->whereRaw('TRIM(UPPER(category)) = ?', [strtoupper(trim($selectedCategory))]);
                // Atau yang lebih sederhana jika Anda yakin data di DB sudah bersih:
                // $query->where('category', $selectedCategory);
            }
            // else: Jika category di URL tidak cocok dengan konstanta, jangan filter.
            // Atau Anda bisa menambahkan error/redirect jika ingin filter yang ketat.
        }

        // Ambil experts dengan pagination
        $experts = $query->latest()->paginate(10); // Menggunakan latest() untuk mengurutkan terbaru

        // Kirim $categories dan $experts ke view
        return view('experts.index', compact('experts', 'categories', 'selectedCategory')); // Kirim juga selectedCategory
    }
    /**
     * Display the specified expert.
     */
    public function show(Expert $expert)
    {
        return view('experts.show', compact('expert'));
    }
}
