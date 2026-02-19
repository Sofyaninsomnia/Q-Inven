<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Petugas\Dashboard as PetugasDashboard;

Route::prefix('admin')->name('admin.')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('/', [Dashboard::class, 'index'])->name('index');
});

Route::get('/petugas', [PetugasDashboard::class, 'index'])->name('petugas');