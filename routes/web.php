<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;

Route::get('/', function () {
    return view('home');
});

Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/tambah', [GuruController::class, 'create']);
Route::post('/guru/store', [GuruController::class, 'store']);
Route::get('/guru/excel', [GuruController::class, 'exportExcel']);
Route::get('/guru/pdf', [GuruController::class, 'exportPDF']);
Route::get('/guru/edit/{id}', [GuruController::class, 'edit']);
Route::post('/guru/update/{id}', [GuruController::class, 'update']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'destroy']);