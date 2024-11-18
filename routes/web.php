<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    $nim =  [121, 122, 123, 124, 125];
    $nama = ['roshelvet', 'hocimin', 'hitler', 'putin', 'cimory'];
    $jumlah = count($nim);
    return view('mahasiswa', compact('nim', 'jumlah', 'nama'));
});

Route::get('profile', function () {
    $nama = 'firman';
    return view('profile', compact('nama'));
});
