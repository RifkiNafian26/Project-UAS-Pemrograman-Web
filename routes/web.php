<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/daftar-mitra', function () {
    return view('daftar_mitra');
});
