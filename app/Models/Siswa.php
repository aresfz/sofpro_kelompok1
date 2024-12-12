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
}
