<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\user\CalonSiswaController;

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
Route::get('/calon-siswa', [CalonSiswaController::class, 'index'])->name('index.DataDiri');
Route::get('/form-create', [CalonSiswaController::class, 'form_create'])->name('form.DataDiri');
Route::post('/data-diri-create', [CalonSiswaController::class, 'store'])->name('create.DataDiri');