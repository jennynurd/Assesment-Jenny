<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MataKuliahController;
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


Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/mahasiswa/create',[MahasiswaController::class,'create']);
Route::post('/mahasiswa/store',[MahasiswaController::class,'store']);
Route::get('/mahasiswa/{id}/edit',[MahasiswaController::class,'edit']);
Route::put('/mahasiswa/{id}',[MahasiswaController::class,'update']);


Route::get('/dosen',[DosenController::class,'index']);
Route::get('/dosen/create',[DosenController::class,'create']);
Route::post('/dosen/store1',[DosenController::class,'store']);

Route::get('/prodi',[ProdiController::class,'index']);
Route::get('/prodi/create',[ProdiController::class,'store']);

Route::get('/mata_kuliah',[MataKuliahController::class,'index']);
