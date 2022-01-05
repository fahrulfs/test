<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PulsaController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// MENAMPILKAN DATA DATABASE

// DATA MAHASISWA
Route::get('/mahasiswa', [MahasiswaController::class, 'index_mahasiswa']);
Route::get('mahasiswa/tambah_mahasiswa', [MahasiswaController::class, 'tambah_mahasiswa']);
Route::post('/mahasiswa/proses_tambah_mahasiswa', [MahasiswaController::class, 'proses_tambah_mahasiswa']);
Route::get('mahasiswa/{id}/edit', [MahasiswaController::class, "edit"]);

// UPDATE DATA
Route::get('mahasiswa/ubah_data/{id}',[MahasiswaController::class,'ubah_data']);
Route::post('mahasiswa/proses_ubah_data',[MahasiswaController::class,'proses_ubah_data']);


// =========================================================================================


// ========================== DATA USER =====================================================

// 1. READ DATA
Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/detail/{id}', [UsersController::class, 'detail_users']);

// 2. CREATE DATA
Route::get('/users/tambah_data', [UsersController::class, 'tambah_data']);
Route::post('/users/proses_tambah_data', [UsersController::class, 'proses_tambah_data']);

// 3. UPDATE DATA
Route::get('users/ubah_data/{id}',[UsersController::class,'ubah_data']);
Route::post('users/proses_ubah_data',[UsersController::class,'proses_ubah_data']);


// ========================== DATA USER ======================================================



// PENGISISAN PULSA
Route::get('/pulsa',[PulsaController::class,'index_pulsa']);
Route::get('/pulsa/tambah_pulsa', [PulsaController::class, 'tambah_pulsa']);
Route::post('/pulsa/proses_tambah_pulsa', [PulsaController::class, 'proses_tambah_pulsa']);

Route::get('/nilai',[NilaiController::class,'index_nilai']);
