<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use App\Models\Rekomendasi;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RekomendasiController extends Controller
{
    public function index()
    {
        // Ambil semua rekomendasi karir berdasarkan nilai_rekomendasi
        $siswa = Siswa::all();
        $rekomendasi = Rekomendasi::with('siswa', 'karir')->orderBy('nilai_rekomendasi', 'desc')->get();
        return view('rekomendasi.home', compact('rekomendasi', 'siswa'));
    }
    public function hitungRekomendasi($siswa_id)
    {
        // Ambil data siswa
        $siswa = Siswa::findOrFail($siswa_id);

        // Inisialisasi array untuk menyimpan skor karir
        $karirScores = [];

        // Ambil semua data karir
        $karirs = Karir::all();

        // Loop untuk menghitung skor karir berdasarkan karakteristik
        foreach ($karirs as $karir) {
            $score = 0;
            $hasValidData = false; // Flag to check if there's valid data for this career

            // Loop untuk menghitung skor berdasarkan karakteristik setiap karir
            foreach ($karir->karakteristik as $karakteristik) {
                // Ambil nilai mata pelajaran siswa yang sesuai dengan karakteristik
                $nilaiMataPelajaran = $siswa->mataPelajaran()
                    ->wherePivot('mata_pelajaran_id', $karakteristik->mata_pelajaran_id) // Menggunakan wherePivot untuk tabel pivot
                    ->value('nilai'); // Ambil nilai dari kolom 'nilai' di tabel pivot

                // Debugging log
                Log::debug("Karir: {$karir->nama_karir}, Karakteristik: {$karakteristik->karakteristik}, Nilai Mata Pelajaran: $nilaiMataPelajaran");

                // Hitung skor (nilai siswa * bobot karakteristik)
                if ($nilaiMataPelajaran) {
                    $score += $nilaiMataPelajaran * $karakteristik->bobot;
                    $hasValidData = true; // We found valid data for this career
                } else {
                    Log::debug("Nilai Mata Pelajaran untuk Karakteristik {$karakteristik->karakteristik} tidak ditemukan.");
                }
            }

            // Jika ada data yang valid, simpan skor untuk karir ini
            if ($hasValidData) {
                $karirScores[$karir->id] = $score;
                Log::debug("Total Skor untuk Karir {$karir->nama_karir}: $score");
            } else {
                Log::debug("Tidak ada data yang valid untuk Karir {$karir->nama_karir}. Skor tetap 0.");
            }
        }

        // Mengurutkan skor berdasarkan nilai tertinggi
        arsort($karirScores);

        // Ambil 3 karir teratas berdasarkan skor
        $topKarirIds = array_slice(array_keys($karirScores), 0, 3);

        // Ambil data karir teratas
        $topKarirs = Karir::whereIn('id', $topKarirIds)->get();

        // Tampilkan hasil rekomendasi
        return view('rekomendasi.index', compact('topKarirs', 'siswa', 'karirScores'));
    }


}
