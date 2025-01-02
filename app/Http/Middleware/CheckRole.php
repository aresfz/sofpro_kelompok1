<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Jika pengguna tidak login atau tidak memiliki role yang diminta
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role !== $role) {
            // Jika pengguna adalah user, hanya bisa akses beberapa resource
            if ($role === 'user') {
                // Hanya izinkan akses ke siswa, rekomendasi dan siswa_nilai
                $allowedRoutes = ['dashboard.siswa.index', 'rekomendasi.index', 'rekomendasi.hitung', 'siswa_nilai.create'];

                if (!in_array($request->route()->getName(), $allowedRoutes)) {
                    return redirect()->route('dashboard'); // Redirect ke dashboard jika akses tidak diizinkan
                }
            }
        }

        return $next($request);
    }
}
