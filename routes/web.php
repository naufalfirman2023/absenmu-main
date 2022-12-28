<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelasControlller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\GuruMiddleware;
use App\Http\Middleware\SiswaMiddleware;
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





// Route::resource('user', [UserController::class]);


Route::post('/login-post', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/login', function () {
    return view('login');
});

Route::middleware([AuthMiddleware::class])->group(function () {
    Route::middleware([AdminMiddleware::class])->group(function () {
        // crud siswa
        Route::get('/siswa', [SiswaController::class, 'index']);
        Route::post('/siswa/simpan', [SiswaController::class, 'simpan']);
        Route::post('/siswa/update/{id}', [SiswaController::class, 'update']);
        Route::post('/siswa/hapus/{id}', [SiswaController::class, 'hapus']);

        // crud guru
        Route::get('/guru', [GuruController::class, 'index']);
        Route::post('/guru/simpan', [GuruController::class, 'simpan']);
        Route::post('/guru/update/{id}', [GuruController::class, 'update']);
        Route::post('/guru/hapus/{id}', [GuruController::class, 'hapus']);


        // crud mapel
        Route::get('/mapel', [MapelController::class, 'index']);
        Route::post('/mapel/simpan', [MapelController::class, 'simpan']);
        Route::post('/mapel/update/{id}', [MapelController::class, 'update']);
        Route::get('/mapel/hapus/{id}', [MapelController::class, 'hapus']);

        // crud kelas
        Route::get('/kelas', [KelasControlller::class, 'index']);
        Route::post('/kelas/simpan', [KelasControlller::class, 'simpan']);
        Route::post('/kelas/update/{id}', [KelasControlller::class, 'update']);
        Route::post('/kelas/hapus/{id}', [KelasControlller::class, 'hapus']);
        
        // crud jadwal
        Route::get('/jadwal', [JadwalController::class, 'index']);
        Route::post('/jadwal/simpan', [JadwalController::class, 'simpan']);
        Route::post('/jadwal/update/{id}', [JadwalController::class, 'update']);
        Route::post('/jadwal/hapus/{id}', [JadwalController::class, 'hapus']);

        // crud user
        Route::get('/user', [UserController::class, 'index']);
        Route::post('/user/simpan', [UserController::class, 'simpan']);
        Route::post('/user/update/{id}', [UserController::class, 'update']);
        Route::post('/user/hapus/{id}', [UserController::class, 'hapus']);
        Route::get('/api/show-user/{role}', [UserController::class, 'show_user']);
    });
    Route::middleware([GuruMiddleware::class])->group(function () {
        Route::get('/generate/presensi', [PresensiController::class, 'index']);
        Route::post('/simpan-code-presensi', [PresensiController::class, 'simpan']);
        Route::get('/absen-siswa', [PresensiController::class, 'showAbsen']);
        Route::post('/getPresensi', [PresensiController::class, 'filterAbsensi']);
        Route::get('/cetak-presensi/{minggu_ke}/{jadwal_id}', [PresensiController::class, 'cetakPresensi']);

    });
    Route::middleware([SiswaMiddleware::class])->group(function () {
        Route::get('/siswa/presensi', [PresensiController::class, 'presensiSiswa']);
        Route::post('/cekPresensi', [PresensiController::class, 'cekPresensi']);
    });
    
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});
Route::get('/api/fiter-absen/{jadwal_id}/{minggu_ke}', [PresensiController::class, 'filter_absen']);
