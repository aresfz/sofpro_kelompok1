<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    //
    use HasFactory;

    protected $table = 'siswa';
    protected $fillable = ['Nama', 'C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7'];

    public function mataPelajaran()
    {
        return $this->belongsToMany(MataPelajaran::class, 'siswa_mata_pelajaran', 'siswa_id', 'mata_pelajaran_id')
                    ->withPivot('nilai');
    }

    public function rekomendasi()
{
    return $this->hasMany(Rekomendasi::class);
}

    
}
