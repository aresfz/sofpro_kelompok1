<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KarakteristikController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SiswaNilaiController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('login', [AuthController::class, 'loginPage'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('/dashboard/mataPelajaran', MataPelajaranController::class);
    Route::resource('/dashboard/siswa', SiswaController::class);
    Route::resource('/dashboard/karir', KarirController::class);
    Route::resource('/dashboard/karakteristik', KarakteristikController::class);
    Route::get('/dashboard/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi.index');
    Route::get('/dashboard/rekomendasi/hitung/{siswa_id}', [RekomendasiController::class, 'hitungRekomendasi'])->name('rekomendasi.hitung');
    Route::get('/dashboard/nilai', [SiswaNilaiController::class, 'create'])->name('siswa_nilai.create');
    Route::post('/dashboard/nilai', [SiswaNilaiController::class, 'store'])->name('siswa_nilai.store');
});