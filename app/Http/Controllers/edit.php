<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('\', function () {
    return view('welcome');
});






Route::get('/mahasiswa',[HomeController::class, 'index']);
Route::get('/mahasiswa/tambah',[HomeController::class, 'create']);
Route::post('/mahasiswa/simpan',[HomeController::class, 'store']);
Route::get('/mahasiswa/edit/{id}',[HomeController::class, 'edit']);
Route::post('/mahasiswa/update/',[HomeController::class, 'update']);
Route::get('/mahasiswa/hapus/{id}',[HomeController::class, 'destory ']);