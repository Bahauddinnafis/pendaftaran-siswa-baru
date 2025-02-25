<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
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

// Route::get('/login', [AdminController::class, 'login']); // Login Admin

// Route Login & Register Admin
Route::get('/login-form-admin', [App\Http\Controllers\admin\AuthController::class, 'login_form'])->name('login-form-admin');
Route::get('/register-form-admin', [App\Http\Controllers\admin\AuthController::class, 'register_form'])->name('register-form-admin');
Route::post('register-admin', [App\Http\Controllers\admin\AuthController::class, 'register'])->name('register-admin');
Route::post('login-admin', [App\Http\Controllers\admin\AuthController::class, 'login'])->name('login-admin');

// Route Login & Register User
Route::get('/login-form-user', [App\Http\Controllers\user\AuthController::class, 'login_form'])->name('login-form-user');
Route::get('/register-form-user', [App\Http\Controllers\user\AuthController::class, 'register_form'])->name('register-form-user');
Route::post('register-user', [App\Http\Controllers\user\AuthController::class, 'register'])->name('register-user');
Route::post('login-user', [App\Http\Controllers\user\AuthController::class, 'login'])->name('login-user');
Route::get('/user/export-kartu', [App\Http\Controllers\user\DashboardController::class, 'export_kartu'])->name('export-kartu');
Route::post('/user/logout-user',  [App\Http\Controllers\user\AuthController::class, 'logout'])->name('logout');

// Landing Page
Route::get('/',  [App\Http\Controllers\LandingPageController::class, 'home'])->name('/');

// Masukkan route yang digunakan untuk admin
Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/dashboard-admin', [DashboardController::class, 'index']);
    Route::get('/profile', [AdminController::class, 'profil']);
    Route::post('/logout-admin', [AuthController::class, 'logout']);

    Route::get('/jadwal', [JadwalController::class, 'index'])->name('index-jadwal');
    Route::get('/form-jadwal-create', [JadwalController::class, 'form_jadwal_create'])->name('form-jadwal-create');
    Route::post('/create-form-jadwal', [JadwalController::class, 'store'])->name('create-jadwal');
    Route::get('/jadwal/{id}/edit', [JadwalController::class, 'edit'])->name('form-edit-jadwal');
    Route::put('/jadwal/{id}', [JadwalController::class, 'update'])->name('update-jadwal');
    Route::delete('/delete-jadwal/{id}', [JadwalController::class, 'destroy'])->name('delete-jadwal');

    Route::get('/ruang', [RuangController::class, 'index'])->name('index-ruang');
    Route::get('/form-ruang-create', [RuangController::class, 'form_ruang_create'])->name('form-ruang-create');
    Route::post('/create-form-ruang', [RuangController::class, 'store'])->name('create-ruang');
    Route::get('/ruang/{id}/edit', [RuangController::class, 'edit'])->name('form-edit-ruang');
    Route::put('/ruang/{id}', [RuangController::class, 'update'])->name('update-ruang');
    Route::delete('/delete-ruang/{id}', [RuangController::class, 'destroy'])->name('delete-ruang');


    Route::get('/jurusan', [JurusanController::class, 'index'])->name('index-jurusan');
    Route::get('/form-jurusan-create', [JurusanController::class, 'form_jurusan_create'])->name('form-jurusan-create');
    Route::post('/create-form-jurusan', [JurusanController::class, 'store'])->name('create-jurusan');
    Route::get('/jurusan/{id}/edit', [JurusanController::class, 'edit'])->name('form-edit-jurusan');
    Route::put('/jurusan/{id}', [JurusanController::class, 'update'])->name('update-jurusan');
    Route::delete('/delete-jurusan/{id}', [JurusanController::class, 'destroy'])->name('delete-jurusan');

    // Siswa get data Calon Siswa
    Route::get('/data-calon-siswa', [App\Http\Controllers\admin\DashboardController::class, 'data_calonSiswa'])->name('data-calon-siswa');

    // Chart Jenis Kelamin Siswa Siswi SMK Angop
    Route::get('/chartJK', [App\Http\Controllers\admin\DashboardController::class, 'jkChart'])->name('chartJK');
});

// Masukkan route yang digunakan untuk user
Route::prefix('user')->middleware(['user'])->group(function () {
    Route::get('/order',  [App\Http\Controllers\user\OrderController::class, 'index'])->name('order');
    Route::post('/checkout',  [App\Http\Controllers\user\OrderController::class, 'checkout'])->name('checkout');
    Route::post('/midtrans-callback',  [App\Http\Controllers\user\OrderController::class, 'callback'])->name('checkout');


    Route::get('/', [App\Http\Controllers\user\DashboardController::class, 'index'])->name('dashboard-siswa');
    Route::get('/calon-siswa', [App\Http\Controllers\user\CalonSiswaController::class, 'data_diri'])->name('index.DataDiri'); // Get Data Calon Siswa
    Route::get('/data-diri', [App\Http\Controllers\user\CalonSiswaController::class, 'index'])->name('data-diri'); // Cek apakah tersedia data diri calon siswa (diletakkan di navbar)
    Route::get('/form-create', [App\Http\Controllers\user\CalonSiswaController::class, 'form_create'])->name('form.DataDiri'); // Form Calon Siswa
    Route::post('/data-diri-create', [App\Http\Controllers\user\CalonSiswaController::class, 'store'])->name('create.DataDiri'); // Create Calon Siswa
    Route::get('/form-edit/{id}', [App\Http\Controllers\user\CalonSiswaController::class, 'edit'])->name('form-edit-data-diri'); // Form Edit Calon Siswa
    Route::put('/data-diri-edit/{id}', [App\Http\Controllers\user\CalonSiswaController::class, 'update'])->name('edit-data-diri'); // Edit Calon Siswa



    // Route Form Orang Tua Wali Calon Siswa
    Route::get('/cek-ortu', [App\Http\Controllers\user\OrangTuaController::class, 'index'])->name('cek-ortu');
    Route::get('/orangtua', [App\Http\Controllers\user\OrangTuaController::class, 'data_ortu'])->name('orangtua');
    Route::get('/orangtua-form', [App\Http\Controllers\user\OrangTuaController::class, 'form_create'])->name('orangtua-form');
    Route::post('/orangtua-create', [App\Http\Controllers\user\OrangTuaController::class, 'store'])->name('orangtua-create');
    Route::get('/orangtua-form-edit/{id}', [App\Http\Controllers\user\OrangTuaController::class, 'form_update'])->name('orangtua-form-edit');
    Route::put('/orangtua-update/{id}', [App\Http\Controllers\user\OrangTuaController::class, 'update'])->name('orangtua-update');

    Route::get('/page-simpan-data',  [App\Http\Controllers\user\SimpanDataController::class, 'index'])->name('page-simpan-data');
    Route::post('/simpan-data',  [App\Http\Controllers\user\SimpanDataController::class, 'simpan'])->name('simpan-data');
});
