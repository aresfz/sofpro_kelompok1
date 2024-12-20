<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataPelajaran; // Import model untuk Mata Pelajaran
use App\Models\Siswa; // Import model untuk Siswa
use App\Models\Karir; // Import model untuk Karir

class DashboardController extends Controller
{
    public function dashboard()
    {
        $jumlahMataPelajaran = MataPelajaran::count();
        $jumlahSiswa = Siswa::count();
        $jumlahKarir = Karir::count();

        // Kirim data ke view
        return view('dashboard.index', compact('jumlahMataPelajaran', 'jumlahSiswa', 'jumlahKarir'));
    }
}
