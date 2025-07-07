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
        // Ambil semua kategori
        $categories = Expert::distinct()->pluck('category')->filter();

        // Filter expert berdasarkan kategori jika diminta
        $query = Expert::query();

        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }

        $experts = $query->get();

        return view('experts.index', compact('experts', 'categories'));
    }
    /**
     * Display the specified expert.
     */
    public function show(Expert $expert)
    {
        return view('experts.show', compact('expert'));
    }
}
