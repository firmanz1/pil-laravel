<?php

use App\Http\Controllers\Mahasiswacontroller;
use App\Http\Controllers\mahasiswaController as ControllersMahasiswaController;
use Illuminate\Support\Facades\Route;


route::resource('mahasiswa', ControllersMahasiswaController::class);
