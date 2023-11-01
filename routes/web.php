<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RakController;

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

Route::controller(AuthController::class)->group(function() {
    Route::get('/register', 'register')->name('auth.register');
    Route::post('/store', 'store')->name('auth.store');
    Route::get('/login', 'login')->name('auth.login');
    Route::post('/auth', 'authentication')->name('auth.authentication');
    Route::get('/dashboard', 'dashboard')->name('auth.dashboard');
    Route::post('/logout', 'logout')->name('auth.logout');
});

route::get('/perpustakaan/anggota', [AnggotaController::class, 'anggota'])->name('get_anggota');

route::get('/perpustakaan/buku', [BukuController::class, 'buku'])->name('get_buku');

route::get('/perpustakaan/petugas', [PetugasController::class, 'petugas'])->name('get_petugas');

route::get('/', function () {
    return view('auth.dashboard');
}); 

Route::resource('/anggota', AnggotaController::class)->middleware('auth');

Route::resource('/buku', BukuController::class)->middleware('auth');

Route::resource('/petugas', PetugasController::class)->middleware('auth');

Route::resource('/rak', RakController::class)->middleware('auth');