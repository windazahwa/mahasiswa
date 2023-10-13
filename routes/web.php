<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mahasiswa', [mahasiswaController::class, 'index']);
Route::get('/mahasiswa',[HomeController::class, 'index']);
Route::get('/mahasiswa/tambah',[HomeController::class, 'create']);
Route::post('/mahasiswa/simpan',[HomeController::class, 'store']);
Route::get('/mahasiswa/edit/{id}',[HomeController::class, 'edit']);
Route::post('/mahasiswa/update/',[HomeController::class, 'update']);
Route::get('/mahasiswa/hapus/{id}',[HomeController::class, 'destory ']);