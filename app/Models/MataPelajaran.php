<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MataPelajaran extends Model
{
    //
    use HasFactory;

    protected $table = 'mata_pelajaran';
    protected $fillable = ['kode_mapel', 'nama_mapel'];

    public function siswa()
    {
        return $this->belongsToMany(Siswa::class, 'siswa_mata_pelajaran', 'mata_pelajaran_id', 'siswa_id')
                    ->withPivot('nilai');
    }
}
