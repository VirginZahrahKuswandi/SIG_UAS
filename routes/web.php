<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\KecamatanController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/peta/kabkota', [KabkotaController::class, 'index']);
Route::get('/peta/kecamatan', [KecamatanController::class, 'index']);
Route::get('/data/kabkota', [KabkotaController::class, 'data']);
Route::get('/data/kecamatan', [KecamatanController::class, 'data']);
Route::get('/tematik/puskesmas', [KabkotaController::class, 'tematik']);
