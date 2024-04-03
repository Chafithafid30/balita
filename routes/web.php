<?php

use Illuminate\Support\Facades\Route;

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

//Routing Page Index
Route::get('/', function () {
    return view('index');
});

//Routing Page Store Data
Route::post('/form-input', [App\Http\Controllers\FormController::class, 'store']);

// Routing Page Menu
Route::get('/menu', function () {
    return view('menu');
});

//Routing Page Ayah
Route::get('/Ayah/ayah', [App\Http\Controllers\AyahController::class, 'index']);
Route::get('/Ayah/ayah/page-update/{id}', [App\Http\Controllers\AyahController::class, 'updateAyah']);
Route::post('/Ayah/ayah/store', [App\Http\Controllers\AyahController::class, 'store']);
Route::put('/Ayah/ayah/update/{id}', [App\Http\Controllers\AyahController::class, 'update']);
Route::delete('/Ayah/ayah/destroy/{id}', [App\Http\Controllers\AyahController::class, 'destroy']);

// Routing Page Ibu
Route::get('/Ibu/ibu', [App\Http\Controllers\IbuController::class, 'index']);
Route::get('/Ibu/ibu/page-update/{id}', [App\Http\Controllers\IbuController::class, 'updateIbu']);
Route::put('/Ibu/ibu/update/{id}', [App\Http\Controllers\IbuController::class, 'update']);
Route::delete('/Ibu/ibu/destroy/{id}', [App\Http\Controllers\IbuController::class, 'destroy']);

// Routing Page Anak
Route::get('/Anak/anak', [App\Http\Controllers\AnakController::class, 'index']);
Route::get('/Anak/anak/page-update/{id}', [App\Http\Controllers\AnakController::class, 'updateIbu']);
Route::put('/Anak/anak/update/{id}', [App\Http\Controllers\AnakController::class, 'update']);
Route::delete('/Anak/anak/destroy/{id}', [App\Http\Controllers\AnakController::class, 'destroy']);
