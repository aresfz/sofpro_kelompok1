<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karakteristik extends Model
{
    //
    use HasFactory;

    protected $table = 'karakteristik'; // Nama tabel yang digunakan (optional jika sesuai default)

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'karir_id', 
        'mata_pelajaran_id', 
        'karakteristik', 
        'bobot',
    ];

    /**
     * Relasi dengan tabel Karir
     */
    public function karir()
    {
        return $this->belongsTo(Karir::class);
    }

    /**
     * Relasi dengan tabel Mata Pelajaran
     */
    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
    }
}
