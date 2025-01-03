<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Karir extends Model
{
    //
    use HasFactory;

    protected $table = 'karir';
    protected $fillable = ['kode_karir', 'nama_karir', 'deskripsi'];

    public function karakteristik()
    {
        return $this->hasMany(Karakteristik::class);
    }
    
    public function rekomendasi()
    {
        return $this->hasMany(Rekomendasi::class);
    }
}
