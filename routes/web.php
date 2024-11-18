<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('profile', function () {
    $nama = 'firman';
    return view('profile', compact('nama'));
});

Route::get('array', function () {
    $nilai_awal = 1;
    while ($nilai_awal <= 40) {
        echo     'Halaman Array'  . $nilai_awal . '<br>';
        $nilai_awal++;
    }
});
Route::get('arrayfor', function () {
    for ($i = 10; $i < 20; $i++) {
        echo 'Halo cantik' . $i + 1 . 'x<br>';
    }
});
