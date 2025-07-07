<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'university',
        'category',
        'experience',
        'full_bio',
        'photo_path',
    ];

    // Optional: Definisi kategori sebagai konstanta agar lebih mudah dikelola
    public const CATEGORIES = [
        'PSIKOLOG INDUSTRI DAN ORGANISASI',
        'PSIKOLOG PENDIDIKAN',
        'PSIKOLOG KLINIS UMUM',
        'PSIKOLOG ANAK',
        'PSIKOLOG REMAJA',
    ];
}