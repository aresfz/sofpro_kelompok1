<?php

namespace App\Http\Controllers;

use App\Models\Karakteristik;
use App\Models\Karir;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class KarakteristikController extends Controller
{
    // Menampilkan form untuk menambah data karakteristik
    public function create()
    {
        $karirs = Karir::all(); // Ambil semua data karir
        $mataPelajarans = MataPelajaran::all(); // Ambil semua data mata pelajaran
        return view('karakteristik.create', compact('karirs', 'mataPelajarans'));
    }

    // Menyimpan data karakteristik ke dalam database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'karir_id' => 'required|exists:karir,id',
            'mata_pelajaran_id' => 'required|exists:mata_pelajaran,id',
            'karakteristik' => 'required|string|max:255',
            'bobot' => 'required|numeric|min:0|max:1',
        ]);

        Karakteristik::create($validated);

        return redirect()->route('karakteristik.index')->with('success', 'Karakteristik berhasil ditambahkan.');
    }

    // Menampilkan daftar karakteristik
    public function index()
    {
        $karakteristiks = Karakteristik::with('karir', 'mataPelajaran')->get();
        return view('karakteristik.index', compact('karakteristiks'));
    }

    // Menampilkan form untuk mengedit data karakteristik
    public function edit($id)
    {
        $karakteristik = Karakteristik::findOrFail($id);
        $karirs = Karir::all();
        $mataPelajarans = MataPelajaran::all();

        return view('karakteristik.edit', compact('karakteristik', 'karirs', 'mataPelajarans'));
    }

    // Menyimpan perubahan data karakteristik
    public function update(Request $request, $id)
    {
        $karakteristik = Karakteristik::findOrFail($id);

        $validated = $request->validate([
            'karir_id' => 'required|exists:karir,id',
            'mata_pelajaran_id' => 'required|exists:mata_pelajaran,id',
            'karakteristik' => 'required|string|max:255',
            'bobot' => 'required|numeric|min:0|max:1',
        ]);

        $karakteristik->update($validated);

        return redirect()->route('karakteristik.index')->with('success', 'Karakteristik berhasil diperbarui.');
    }

    // Menghapus data karakteristik
    public function destroy($id)
    {
        $karakteristik = Karakteristik::findOrFail($id);
        $karakteristik->delete();

        return redirect()->route('karakteristik.index')->with('success', 'Karakteristik berhasil dihapus.');
    }
}
