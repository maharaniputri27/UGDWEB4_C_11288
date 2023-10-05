<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profil1', function () {
    return view('profil1',[
        "nama" => "Mas Jaehyun",
         "alamat" => "Korea",
         "email" => "email@jamal.com",
         "telepon" => "123456789",
         "hobi" => "melihat maharani putri"
    ]);
});

Route::get('/profil2', function () {
    return view('profil2',[
        "nama" => "Maharani",
        "alamat" => "Jl. Jalan Jalan ke pasar minggu cakep",
        "email" => "email@maharani.com",
        "telepon" => "123456789",
        "hobi" => "sudah pasti bukan coding kak"
    ]);
});

Route::get('/form', function () {
    return view('form',[
        "nama" => "Maharani Putri",
        "npm" => "210711288",
        "email" => "maharani@gmail",
        "fakultas" => "FTI PRIDE",
        "programStudi" => "Informatika"
    ]);
});


