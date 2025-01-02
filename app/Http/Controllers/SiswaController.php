<?php
namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            // Jika ada pencarian, lakukan pencarian dengan nama atau id
            $siswa = Siswa::where('Nama', 'like', "%$search%")
                            ->orWhere('id', 'like', "%$search%")
                            ->with('mataPelajaran') // Eager load mataPelajaran dengan nilai
                            ->paginate(10); // Gunakan pagination di sini
        } else {
            // Jika tidak ada pencarian, ambil semua data siswa dengan pagination
            $siswa = Siswa::with('mataPelajaran')->paginate(10); // Eager load mataPelajaran dengan nilai
        }

        // Mengembalikan data ke view siswa.index
        return view('siswa.index', compact('siswa'));
    }
}
