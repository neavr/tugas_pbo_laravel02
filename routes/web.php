<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('Dashboard');
});

Route::get('/menu1', function () {
    return view('Menu1');
});

Route::get('buku', [BukuController::class, 'index']);
Route::get('anggota', [AnggotaController::class, 'index']);
Route::get('petugas', [PetugasController::class, 'index']);
