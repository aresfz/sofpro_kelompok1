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
        // Ambil hanya siswa yang belum memiliki nilai
        $siswa = Siswa::whereDoesntHave('mataPelajaran')->get();
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

        // Cek apakah siswa sudah memiliki nilai
        if ($siswa->mataPelajaran()->exists()) {
            return redirect()
                ->route('siswa_nilai.create')
                ->with('error', 'Siswa ini sudah memiliki nilai yang tersimpan');
        }

        try {
            foreach ($validated['nilai'] as $mataPelajaranId => $nilai) {
                // Menyimpan ke tabel pivot antara siswa dan mata pelajaran
                $siswa->mataPelajaran()->attach($mataPelajaranId, ['nilai' => $nilai]);
            }

            return redirect()
                ->route('siswa_nilai.create')
                ->with('success', 'Nilai berhasil disimpan untuk semua mata pelajaran');
        } catch (\Exception $e) {
            return redirect()
                ->route('siswa_nilai.create')
                ->with('error', 'Terjadi kesalahan saat menyimpan nilai');
        }
    }
}