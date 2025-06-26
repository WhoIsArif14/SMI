<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client; // Import model Client

class HomeController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('name')->get(); // Ambil semua klien, urutkan berdasarkan nama
        return view('welcome', compact('clients'));
    }
}