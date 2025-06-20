<?php

use App\Http\Controllers\Obat;
use App\Http\Controllers\ExportObat;
use App\Http\Controllers\ExportPasien;
use App\Http\Controllers\Pasien;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/obat', [Obat::class, 'index'])->name('obat.index');
Route::get('/obat/tambah', [Obat::class, 'create'])->name('obat.create');
Route::post('/obat', [Obat::class, 'store'])->name('obat.store');
Route::delete('/obat/{id}', [Obat::class, 'destroy'])->name('obat.destroy');
Route::get('/obat/{id}/edit', [Obat::class, 'edit'])->name('obat.edit');
Route::put('/obat/{id}', [Obat::class, 'update'])->name('obat.update');

Route::get('/pasien', [Pasien::class, 'index'])->name('pasien.index');
Route::get('/pasien', [Pasien::class, 'index'])->name('pasien.index');
Route::get('/pasien/tambah', [Pasien::class, 'create'])->name('pasien.create');
Route::post('/pasien', [Pasien::class, 'store'])->name('pasien.store');
Route::delete('/pasien/{id}', [Pasien::class, 'destroy'])->name('pasien.destroy');
Route::get('/pasien/{id}/edit', [Pasien::class, 'edit'])->name('pasien.edit');
Route::put('/pasien/{id}', [Pasien::class, 'update'])->name('pasien.update');

Route::get('/export-obat', [ExportObat::class, 'export'])->name('obat.export');
Route::get('/export-pasien', [ExportPasien::class, 'export'])->name('export.pasien');
