<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul berita
            $table->string('slug')->unique(); // URL berita yang rapi
            $table->longText('content'); // Konten berita
            $table->string('image')->nullable(); // Path gambar thumbnail (opsional)
            $table->boolean('is_published')->default(false); // Status publikasi (draft/published)
            $table->timestamp('published_at')->nullable(); // Tanggal publikasi
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Siapa yang memposting (relasi ke tabel users)
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};