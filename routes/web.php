<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PendaftarMitraController as AdminPendaftarMitraController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PendaftarMitraController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/daftar-mitra', function () {
    return view('daftar_mitra');
})->name('daftar-mitra');

Route::post('/daftar-mitra', [PendaftarMitraController::class, 'store'])
    ->name('daftar-mitra.store');

Route::get('/admin', [LoginController::class, 'create'])->name('login');
Route::post('/admin', [LoginController::class, 'store']);
Route::post('/admin/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/pendaftar-mitra', [AdminPendaftarMitraController::class, 'index'])
            ->name('pendaftar-mitra.index');
        Route::get('/pendaftar-mitra/{pendaftarMitra}', [AdminPendaftarMitraController::class, 'show'])
            ->name('pendaftar-mitra.show');
        Route::patch('/pendaftar-mitra/{pendaftarMitra}/status', [AdminPendaftarMitraController::class, 'ubahStatus'])
            ->name('pendaftar-mitra.ubah-status');
        Route::delete('/pendaftar-mitra/{pendaftarMitra}', [AdminPendaftarMitraController::class, 'destroy'])
            ->name('pendaftar-mitra.destroy');
    });
