<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    // Accessor untuk mendapatkan URL gambar
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            // Cek apakah file benar-benar ada
            if (Storage::disk('public')->exists($this->image)) {
                return asset('storage/' . $this->image);
            }
        }
        return null;
    }

    // Accessor untuk mendapatkan URL gambar dengan fallback
    public function getImageUrlWithFallbackAttribute()
    {
        if ($this->image && Storage::disk('public')->exists($this->image)) {
            return asset('storage/' . $this->image);
        }
        // Return default image atau null
        return asset('images/default-news.jpg'); // Sesuaikan dengan path default image Anda
    }

    // Scope untuk post yang dipublikasikan
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
