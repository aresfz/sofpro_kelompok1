<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index(){
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    // Menyimpan data siswa baru
    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required|string',
            'C1' => 'required|integer',
            'C2' => 'required|integer',
            'C3' => 'required|integer',
            'C4' => 'required|integer',
            'C5' => 'required|integer',
            'C6' => 'required|integer',
            'C7' => 'required|integer',
        ]);

        Siswa::create($request->all());
        return redirect()->route('siswa.index');
    }

    // Form untuk mengedit data siswa
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    // Memperbarui data siswa
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama' => 'required|string',
            'C1' => 'required|integer',
            'C2' => 'required|integer',
            'C3' => 'required|integer',
            'C4' => 'required|integer',
            'C5' => 'required|integer',
            'C6' => 'required|integer',
            'C7' => 'required|integer',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());

        return redirect()->route('siswa.index');
    }

    // Menghapus data siswa
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
