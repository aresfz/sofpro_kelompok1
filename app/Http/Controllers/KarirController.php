<?php

// app/Http/Controllers/KarirController.php

namespace App\Http\Controllers;

use App\Models\Karir;
use Illuminate\Http\Request;

class KarirController extends Controller
{
    // Menampilkan data karir
    public function index()
    {
        $karir = Karir::paginate(10);
        return view('karir.index', compact('karir'));
    }

    // Menampilkan form untuk membuat karir baru
    public function create()
    {
        return view('karir.create');
    }

    // Menyimpan data karir baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_karir' => 'required|string|max:255',
            'nama_karir' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        Karir::create($request->all());
        return redirect()->route('karir.index');
    }

    // Menampilkan form untuk mengedit data karir
    public function edit($id)
    {
        $karir = Karir::findOrFail($id);
        return view('karir.edit', compact('karir'));
    }

    // Memperbarui data karir
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_karir' => 'required|string|max:255',
            'nama_karir' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $karir = Karir::findOrFail($id);
        $karir->update($request->all());

        return redirect()->route('karir.index');
    }

    // Menghapus data karir
    public function destroy($id)
    {
        $karir = Karir::findOrFail($id);
        $karir->delete();
        return redirect()->route('karir.index');
    }

    public function show($id)
    {
        $karir = Karir::findOrFail($id); // Ambil data berdasarkan ID
        return view('karir.show', compact('karir')); // Tampilkan view detail
    }

}
