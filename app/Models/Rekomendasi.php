<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    //
    use HasFactory;

    protected $table = 'rekomendasi';
    protected $fillable = ['siswa_id', 'karir_id', 'nilai_rekomendasi'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function karir()
    {
        return $this->belongsTo(Karir::class);
    }
}
