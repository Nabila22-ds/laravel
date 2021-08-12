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
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/profil.blade.php', function () {
    return view('profil');
});


Route::get('/galeri.blade.php', function () {
    return view('galeri');
});

Route::get('/coba.blade.php', function () {
    return view('coba');
});
