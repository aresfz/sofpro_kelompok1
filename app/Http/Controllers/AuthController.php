<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function loginPage()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');  // Jika pengguna sudah login, redirect ke home
        }
    
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {  // Pastikan pengguna berhasil login terlebih dahulu
            // Setelah login berhasil, periksa apakah pengguna memiliki role 'admin'
            if (Auth::user() && Auth::user()->role === 'admin') {
                return redirect()->route('dashboard');  // Redirect ke halaman admin jika role adalah admin
            }
    
            return redirect()->route('dashboard');  // Redirect ke halaman utama jika bukan admin
        }
    
        return back()->withErrors(['message' => 'Invalid credentials'])->withInput();
    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login'); 
    }
}
