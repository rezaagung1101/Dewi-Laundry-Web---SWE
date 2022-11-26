<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home',[
        "title"=>"Home"
    ]);
});

Route::get('/cekEstimasi', function () {
    return view('cekEstimasi',[
        "title"=>"Cek Estimasi"
    ]);
});
Route::get('/register', function () {
    return view('layouts/pengunjung/register',[
        "title"=>"Register"
    ]);
});
Route::get('/login', function () {
    return view('layouts/Pengunjung/login',[
        "title"=>"Masuk"
    ]);
});
Route::get('/profil', function () {
    return view('layouts/pelanggan/profil',[
        "title"=>"Profil"
    ]);
});
Route::get('/updateProfil', function () {
    return view('layouts/pelanggan/updateProfil',[
        "title"=>"Update Profil"
    ]);
});
Route::get('/riwayat', function () {
    return view('layouts/Pelanggan/riwayat',[
        "title"=>"Riwayat"
    ]); 
});

Route::get('/transaksiAktif', function () {
    return view('layouts/Pelanggan/transaksiAktif',[
        "title"=>"Transaksi"
    ]); 
});

Route::get('/detail', function () {
    return view('layouts/Pelanggan/detail',[
        "title"=>"Detail"
    ]); 
});