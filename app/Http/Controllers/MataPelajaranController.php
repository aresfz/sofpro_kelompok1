<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    // Menampilkan daftar mata pelajaran
    public function index()
    {
        $mataPelajaran = MataPelajaran::all();
        return view('mataPelajaran.index', compact('mataPelajaran'));
    }

    // Menampilkan form tambah mata pelajaran
    public function create()
    {
        return view('mataPelajaran.create');
    }

    // Menyimpan mata pelajaran baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_mapel' => 'required|string|max:255',
            'nama_mapel' => 'required|string|max:255',
        ]);

        MataPelajaran::create($request->all());

        return redirect()->route('mataPelajaran.index')->with('success', 'Mata Pelajaran berhasil ditambahkan');
    }

    // Menampilkan form edit mata pelajaran
    public function edit($id)
    {
        $mataPelajaran = MataPelajaran::findOrFail($id);
        return view('mataPelajaran.edit', compact('mataPelajaran'));
    }

    // Mengupdate mata pelajaran
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_mapel' => 'required|string|max:255',
            'nama_mapel' => 'required|string|max:255',
        ]);

        $mataPelajaran = MataPelajaran::findOrFail($id);
        $mataPelajaran->update($request->all());

        return redirect()->route('mataPelajaran.index')->with('success', 'Mata Pelajaran berhasil diperbarui');
    }

    // Menghapus mata pelajaran
    public function destroy($id)
    {
        $mataPelajaran = MataPelajaran::findOrFail($id);
        $mataPelajaran->delete();

        return redirect()->route('mataPelajaran.index')->with('success', 'Mata Pelajaran berhasil dihapus');
    }
}
