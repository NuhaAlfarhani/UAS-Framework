<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;

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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'loginPost'])->name('login');
});

Route::group(['middleware'=>'auth'], function(){
    //Route untuk Home
    Route::get('/home', function () {
        return view('view_home');
    });

    //Route untuk Data Buku
    Route::get('/buku', 'BukuController@bukutampil');
    Route::post('/buku/tambah', 'BukuController@bukutambah');
    Route::get('/buku/hapus/{id_buku}', 'BukuController@bukuhapus');
    Route::put('/buku/edit/{id_buku}', 'BukuController@bukuedit');

    //Route untuk Data Buku
    Route::get('/home', function () {
        return view('view_home');
    });

    //Route untuk Data Anggota
    Route::get('/anggota', 'AnggotaController@anggotatampil');
    Route::post('/anggota/tambah', 'AnggotaController@anggotatambah');
    Route::get('/anggota/hapus/{id_anggota}', 'AnggotaController@anggotahapus');
    Route::put('/anggota/edit/{id_anggota}', 'AnggotaController@anggotaedit');

    //Route untuk Data Petugas
    Route::get('/petugas', 'PetugasController@petugastampil');
    Route::post('/petugas/tambah', 'PetugasController@petugastambah');
    Route::get('/petugas/hapus/{id_petugas}', 'PetugasController@petugashapus');
    Route::put('/petugas/edit/{id_petugas}', 'PetugasController@petugasedit');

    //Route untuk Data Peminjaman
    Route::get('/pinjam', 'PinjamController@pinjamtampil');
    Route::post('/pinjam/tambah', 'PinjamController@pinjamtambah');
    Route::get('/pinjam/hapus/{id_pinjam}', 'PinjamController@pinjamhapus');
    Route::put('/pinjam/edit/{id_pinjam}', 'PinjamController@pinjamedit');

    Route::delete('/logout', [LoginController::class, 'logout'])->name('logout');
});