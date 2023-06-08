<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\user\CalonSiswaController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
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

// Route Login & Register User
Route::get('/login-form-user', [App\Http\Controllers\user\AuthController::class, 'login_form'])->name('login-form-user');
Route::get('/register-form-user', [App\Http\Controllers\user\AuthController::class, 'register_form'])->name('register-form-user');
Route::post('register-user', [App\Http\Controllers\user\AuthController::class, 'register'])->name('register-user');
Route::post('login-user', [App\Http\Controllers\user\AuthController::class, 'login'])->name('login-user');

// Route Form Orang Tua Wali Calon Siswa
Route::get('/orangtua', [OrangTuaController::class, 'index'])->name('orangtua');
Route::get('/orangtua-form', [OrangTuaController::class, 'form_create'])->name('orangtua-form');
Route::post('/orangtua-create', [OrangTuaController::class, 'store'])->name('orangtua-create');
// Route::put('/orangtua-form/{id}', [OrangTuaController::class, 'update']);
// Route::delete('/orangtua-form/{id}', [OrangTuaController::class, 'destroy']);

// Masukkan route yang digunakan untuk admin
Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/profile', [AdminController::class, 'profil']);
    Route::post('logout-admin', [AuthController::class, 'logout']);
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
