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
use App\Http\Controllers\PerpustakaanController;

route::get('/perpustakaan/anggota', [PerpustakaanController::class, 'anggota'])->name('get_anggota');

route::get('/perpustakaan/buku', [PerpustakaanController::class, 'buku'])->name('get_buku');

route::get('/perpustakaan/petugas', [PerpustakaanController::class, 'petugas'])->name('get_petugas');