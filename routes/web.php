<?php
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KarakteristikController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\ManajemenUserController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SiswaNilaiController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Route untuk login
Route::get('login', [AuthController::class, 'loginPage'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/web', function () {
    return view('web');
})->name('web');

Route::get('/ui', function () {
    return view('ui');
})->name('ui');

Route::get('/database', function () {
    return view('database');
})->name('database');
// Semua route yang membutuhkan login
Route::middleware(['auth'])->group(function () {
    
    // Route dashboard umum
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/manajemenuser', [ManajemenUserController::class, 'index'])->name('manajemenUser');

    // Route yang dapat diakses oleh semua pengguna (admin dan user)
    Route::resource('/dashboard/siswa', SiswaController::class);
    Route::get('/dashboard/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi.index'); // user hanya bisa melihat ini
    Route::get('/dashboard/rekomendasi/hitung/{siswa_id}', [RekomendasiController::class, 'hitungRekomendasi'])->name('rekomendasi.hitung'); // dan ini
    Route::get('/dashboard/nilai', [SiswaNilaiController::class, 'create'])->name('siswa_nilai.create'); // user hanya bisa melihat ini
        Route::post('/dashboard/nilai', [SiswaNilaiController::class, 'store'])->name('siswa_nilai.store');

    
    

    // Route yang hanya bisa diakses oleh admin
        Route::resource('/dashboard/mataPelajaran', MataPelajaranController::class);
        Route::resource('/dashboard/karir', KarirController::class);
        Route::resource('/dashboard/karakteristik', KarakteristikController::class);
    
    
});
