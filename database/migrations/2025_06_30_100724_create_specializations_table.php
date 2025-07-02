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
        Schema::create('specializations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Nama spesialisasi (e.g., "Psikolog Industri dan Organisasi")
            $table->string('slug')->unique(); // Untuk URL yang rapi (e.g., "psikolog-industri-dan-organisasi")
            $table->boolean('is_published')->default(false); // Opsional: untuk mengontrol publikasi spesialisasi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specializations');
    }
};
