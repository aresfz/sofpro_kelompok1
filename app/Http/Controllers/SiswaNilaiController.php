<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class SiswaNilaiController extends Controller
{
    // Menampilkan form untuk menambah nilai siswa
    public function create(Request $request)
    {
        $siswa = Siswa::all();
        $mataPelajaran = MataPelajaran::all();

        return view('siswa_nilai', compact('siswa', 'mataPelajaran'));
    }

    // Menyimpan data nilai siswa secara batch
    public function store(Request $request)
    {
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'nilai' => 'required|array',
            'nilai.*' => 'numeric|between:0,100',
        ]);

        $siswa = Siswa::findOrFail($request->siswa_id);

        foreach ($validated['nilai'] as $mataPelajaranId => $nilai) {
            // Menyimpan ke tabel pivot antara siswa dan mata pelajaran
            $siswa->mataPelajaran()->attach($mataPelajaranId, ['nilai' => $nilai]);
        }

        return redirect()->route('siswa_nilai.create')->with('success', 'Nilai berhasil disimpan untuk semua mata pelajaran');
    }
}
