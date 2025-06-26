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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul halaman (misal: About Us)
            $table->string('slug')->unique(); // URL yang rapi (misal: about-us)
            $table->longText('content'); // Konten halaman
            $table->string('meta_title')->nullable(); // Untuk SEO
            $table->string('meta_description')->nullable(); // Untuk SEO
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};