<?php

use App\Http\Controllers\Mahasiswacontroller;
use Illuminate\Support\Facades\Route;

Route::get('mahasiswa', [Mahasiswacontroller::class, 'index']);
