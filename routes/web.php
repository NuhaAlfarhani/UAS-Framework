<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PinjamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route untuk Login
Route::get('/', function () {return view('welcome');});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login');

Route::group(['middleware'=>'auth'], function(){
    //Route untuk Home
    Route::get('/home', function () {
        return view('home');
    });

    // Route untuk Data Buku
    Route::get('/buku/tampil', [BukuController::class, 'bukutampil'])->name('buku');
    Route::post('/buku/tambah', [BukuController::class, 'bukutambah']);
    Route::get('/buku/hapus/{id_buku}', [BukuController::class, 'bukuhapus']);
    Route::put('/buku/edit/{id_buku}', [BukuController::class, 'bukuedit']);
    Route::get('/download-buku-pdf', [BukuController::class, 'downloadpdf'])->name('halaman.view_buku-pdf');

    // Route untuk Data Anggota
    Route::get('/anggota/tampil', [AnggotaController::class, 'anggotatampil'])->name('anggota');
    Route::post('/anggota/tambah', [AnggotaController::class, 'anggotatambah']);
    Route::get('/anggota/hapus/{id_anggota}', [AnggotaController::class, 'anggotahapus']);
    Route::put('/anggota/edit/{id_anggota}', [AnggotaController::class, 'anggotaedit']);

    // Route untuk Data Petugas
    
    Route::get('/petugas/tampil', [PetugasController::class, 'petugastampil'])->name('petugas');
    Route::post('/petugas/tambah', [PetugasController::class, 'petugastambah']);
    Route::get('/petugas/hapus/{id_petugas}', [PetugasController::class, 'petugashapus']);
    Route::put('/petugas/edit/{id_petugas}', [PetugasController::class, 'petugasedit']);

    // Route untuk Data Pinjam
    Route::get('/pinjam/tampil', [PinjamController::class, 'pinjamtampil'])->name('pinjam');
    Route::post('/pinjam/tambah', [PinjamController::class, 'pinjamtambah']);
    Route::get('/pinjam/hapus/{id_pinjam}', [PinjamController::class, 'pinjamhapus']);
    Route::put('/pinjam/edit/{id_pinjam}', [PinjamController::class, 'pinjamedit']);

    Route::delete('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});