<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('karakteristik', function (Blueprint $table) {
            $table->id();  // Kolom id sebagai primary key
            $table->foreignId('karir_id')->constrained('karir')->onDelete('cascade');  // Relasi ke tabel karir
            $table->foreignId('mata_pelajaran_id')->constrained('mata_pelajaran')->onDelete('cascade'); // Relasi ke tabel mata_pelajarans
            $table->string('karakteristik');  // Nama karakteristik
            $table->decimal('bobot', 5, 2)->default(0);  // Bobot karakteristik (0.0 - 1.00)
            $table->timestamps();  // created_at, updated_at
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karakteristik');
    }
};
