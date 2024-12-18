<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class SiswaNilaiController extends Controller
{
    // Menampilkan form untuk menambah nilai siswa
    public function create()
    {
        $siswa = Siswa::all();  // Ambil semua siswa
        $mataPelajaran = MataPelajaran::all(); // Ambil semua mata pelajaran
        return view('siswa_nilai', compact('siswa', 'mataPelajaran'));
    }

    // Menyimpan data nilai siswa
    public function store(Request $request)
    {
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'mata_pelajaran_id' => 'required|exists:mata_pelajaran,id',
            'nilai' => 'required|numeric',
        ]);

        // Simpan nilai siswa ke tabel pivot
        $siswa = Siswa::findOrFail($request->siswa_id);
        $siswa->mataPelajaran()->attach($request->mata_pelajaran_id, ['nilai' => $request->nilai]);

        return redirect()->route('siswa_nilai.create')->with('success', 'Nilai berhasil disimpan');
    }
}
