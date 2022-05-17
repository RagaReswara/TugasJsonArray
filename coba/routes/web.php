<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/kelas', [App\Http\Controllers\KelasController::class, 'index']);
Route::get('/kelas/{id}', [App\Http\Controllers\KelasController::class,'getJrs']);
Route::get('/latihansatu', [App\Http\Controllers\LatihanJsonController::class,'getData1']);
Route::get('/latihandua', [App\Http\Controllers\LatihanJsonController::class,'getData2']);
Route::get('/latihantiga', [App\Http\Controllers\LatihanJsonController::class,'getData3']);
Route::get('/latihanempat', [App\Http\Controllers\LatihanJsonController::class,'getData4']);
Route::get('/latihanlima', [App\Http\Controllers\LatihanJsonController::class,'getData5']);
