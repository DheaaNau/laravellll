<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;

Route::get('/hapus_pengaduan/{id}', [PengaduanController::class,'hapus']);

Route::get ('/detail_pengaduan/{id}', [PengaduanController::class,'detail']);

Route::get ('/update_pengaduan/{id}', [PengaduanController::class,'update']);
Route::post('/update_pengaduan/{id}', [PengaduanController::class,'proses_update']);

Route::post('register_petugas', [PetugasController::class,'table']);
Route::post('register_petugas', [PetugasController::class,'proses_registrasi_petugas']);
Route::get('register', [RegisterController::class,'index']);
Route::post('register', [RegisterController::class,'proses_registrasi']);

Route::get('/table', [PengaduanController::class,'index']);
Route::get('/table_masyarakat', [MasyarakatController::class,'tablemas']);
Route::post('/table_masyarakat', [MasyarakatController::class,'proses_tambah_pengaduan']);

Route::get('isi_laporan', [PengaduanController::class,'tampil_laporan']);
Route::post('isi_laporan', [PengaduanController::class,'proses_tambah_pengaduan']);

Route::get('home', [PengaduanController::class,'home']);

Route::get('/about', function () {
    return view('about');
});

Route::post('/registrasi', [RegisterController::class,'proses_registrasi']);
Route::get('/registrasi', [RegisterController::class,'buat_akun']);

Route::post('/login', [LoginController::class,'login']);
Route::get('/login', [LoginController::class,'index'])->name("login");
Route::get('login', function () {
    return view('login');
});