<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'is_published',
        'published_at',
        'user_id',
    ];

    // Laravel akan secara otomatis mengelola konversi published_at ke objek Carbon
    protected $casts = [
        'published_at' => 'datetime',
        'is_published' => 'boolean',
    ];

    // Definisi relasi: Sebuah Post dimiliki oleh satu User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}