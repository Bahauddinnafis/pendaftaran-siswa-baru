<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\user\CalonSiswaController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\Admin\RuangController;
use App\Http\Controllers\user\OrangTuaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [AdminController::class, 'index']);

Route::get('/login', [AdminController::class, 'login']); // Login Admin

// Route Login & Register Admin
Route::get('/login-form-admin', [AuthController::class, 'login_form'])->name('login-form-admin');
Route::get('/register-form-admin', [AuthController::class, 'register_form'])->name('register-form-admin');
Route::post('register-admin', [AuthController::class, 'register'])->name('register-admin');
Route::post('login-admin', [AuthController::class, 'login'])->name('login-admin');

// Route Form Orang Tua Wali Calon Siswa
Route::get('/orangtua', [OrangTuaController::class, 'index']);
Route::get('/orangtua-form', [OrangTuaController::class, 'form_create']);
Route::post('/orangtua-form', [OrangTuaController::class, 'store']);
// Route::put('/orangtua-form/{id}', [OrangTuaController::class, 'update']);
// Route::delete('/orangtua-form/{id}', [OrangTuaController::class, 'destroy']);

// Masukkan route yang digunakan untuk admin
Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/profile', [AdminController::class, 'profil']);
    Route::post('logout-admin', [AuthController::class, 'logout']);

    Route::get('/jadwal', [JadwalController::class, 'index'])->name('index-jadwal');
    Route::get('/form-jadwal-create', [JadwalController::class, 'form_jadwal_create'])->name('form-jadwal-create');
    Route::post('/create-form-jadwal', [JadwalController::class, 'store'])->name('create-jadwal');


    Route::get('/ruang', [RuangController::class, 'index'])->name('index-ruang');
    Route::get('/form-ruang-create', [RuangController::class, 'form_ruang_create'])->name('form-ruang-create');
    Route::post('/create-form-ruang', [RuangController::class, 'store'])->name('create-ruang');

    Route::get('/jurusan', [JurusanController::class, 'index'])->name('index-jurusan');
    Route::get('/form-jurusan-create', [JurusanController::class, 'form_jurusan_create'])->name('form-jurusan-create');
    Route::post('/create-form-jurusan', [JurusanController::class, 'store'])->name('create-jurusan');

});

// Masukkan route yang digunakan untuk user
Route::middleware(['user'])->group(function () {
    Route::get('/calon-siswa', [CalonSiswaController::class, 'index'])->name('index.DataDiri'); // Get Calon Siswa
    Route::get('/form-create', [CalonSiswaController::class, 'form_create'])->name('form.DataDiri'); // Form Calon Siswa
    Route::post('/data-diri-create', [CalonSiswaController::class, 'store'])->name('create.DataDiri'); // Create Calon Siswa

    Route::get('/orangtua', [OrangTuaController::class, 'index']);
    Route::get('/orangtua-form', [OrangTuaController::class, 'form_create']);
    Route::post('/orangtua-form', [OrangTuaController::class, 'store']);
});
