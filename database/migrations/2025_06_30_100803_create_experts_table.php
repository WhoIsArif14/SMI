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
            $table->foreignId('specialization_id')->constrained()->onDelete('cascade'); // Foreign key ke tabel specializations
            $table->string('full_name');
            $table->string('university')->nullable();
            $table->text('experience')->nullable(); // Bisa berupa teks panjang atau list
            $table->string('photo')->nullable(); // Path ke foto expert
            $table->longText('bio')->nullable(); // Detail biografi untuk halaman "Lihat selengkapnya"
            $table->boolean('is_published')->default(false);
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
