<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AuthController;
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

Route::get('/', [AdminController::class, 'index']);
Route::get('/login', [AdminController::class, 'login']);
Route::get('/blog/kontak', 'BlogController@kontak');

// Route Login & Register Admin
Route::get('/login-form', [AuthController::class, 'login_form']);
Route::get('/register-form', [AuthController::class, 'register_form']);
Route::post('register-admin', [AuthController::class, 'register']);
Route::post('login-admin', [AuthController::class, 'login']);

// Route Form Orang Tua Wali Calon Siswa
Route::get('/orangtua', [OrangTuaController::class, 'index']);
Route::get('/orangtua-form', [OrangTuaController::class, 'form_create']);
Route::post('/orangtua-form', [OrangTuaController::class, 'store']);
// Route::put('/orangtua-form/{id}', [OrangTuaController::class, 'update']);
// Route::delete('/orangtua-form/{id}', [OrangTuaController::class, 'destroy']);
