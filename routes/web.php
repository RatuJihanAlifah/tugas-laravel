<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PetugasController;

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

route::get('/perpustakaan/anggota', [AnggotaController::class, 'anggota'])->name('get_anggota');

route::get('/perpustakaan/buku', [BukuController::class, 'buku'])->name('get_buku');

route::get('/perpustakaan/petugas', [PetugasController::class, 'petugas'])->name('get_petugas');

route::get('/', function () {
    return view('layout.master');
}); 

Route::resource('/anggota', AnggotaController::class);

Route::resource('/buku', BukuController::class);

Route::resource('/petugas', PetugasController::class);