<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\CalonSiswaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/jadwal/{id?}', [App\Http\Controllers\admin\JadwalController::class, 'index']);
Route::put('/jadwal-update/{id}', [App\Http\Controllers\admin\JadwalController::class, 'update']);
Route::Post('/jadwal-create', [App\Http\Controllers\Admin\JadwalController::class, 'store']);
Route::delete('/jadwal-delete/{id}', [App\Http\Controllers\admin\JadwalController::class, 'destroy']);

Route::get('/ruang/{id?}', [App\Http\Controllers\admin\RuangController::class, 'index']);
Route::put('/ruang-update/{id}', [App\Http\Controllers\admin\RuangController::class, 'update']);
Route::Post('/ruang-create', [App\Http\Controllers\Admin\RuangController::class, 'store']);
Route::delete('/ruang-delete/{id}', [App\Http\Controllers\admin\RuangController::class, 'destroy']);

Route::get('/jurusan/{id?}', [App\Http\Controllers\admin\JurusanController::class, 'index']);
Route::put('/jurusan-update/{id}', [App\Http\Controllers\admin\JurusanController::class, 'update']);
Route::Post('/jurusan-create', [App\Http\Controllers\Admin\JurusanController::class, 'store']);
Route::delete('/jurusan-delete/{id}', [App\Http\Controllers\admin\JurusanController::class, 'destroy']);