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

Route::get('/pertemuan1', function () {
    return view('hello');
});

Route::get('/pertemuan1.1', function () {
    return view('berita');
});

Route::get('/tugaspizza', function () {
    return view('5026221136_tugaspizza');
});

Route::get('/tugaslinktree', function () {
    return view('tugaslinktree');
});

Route::get('/tugasslidebootstrap', function () {
    return view('collapse');
});

Route::get('/tugasslidebootstrap_2', function () {
    return view('collapse2');
});

Route::get('/tugasets', function () {
    return view('index');
});

Route::get('/javascript1', function () {
    return view('js1');
});

Route::get('/javascript2', function () {
    return view('js2');
});

Route::get('/validasi1', function () {
    return view('validasi1');
});
