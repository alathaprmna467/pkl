<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\karyawancontroller;
use App\Http\Controllers\pelanggancontroller;
use App\Models\pelanggan;

Route::get('/', function () {
    return view('karyawan.pelanggan', [
        'pelanggan' => pelanggan::all(),
    ]);
});

Route::resource('karyawan', karyawancontroller::class);
Route::resource('pelanggan', pelanggancontroller::class);
