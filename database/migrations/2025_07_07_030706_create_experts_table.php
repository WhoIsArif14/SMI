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
        Schema::create('experts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama lengkap expert
            $table->string('university')->nullable(); // Universitas
            $table->string('category'); // Kategori (PSIKOLOG INDUSTRI DAN ORGANISASI, dll.)
            $table->text('experience'); // Pengalaman kerja
            $table->text('full_bio')->nullable(); // Detail 'Lihat selengkapnya'
            $table->string('photo_path')->nullable(); // Path foto profil
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experts');
    }
};