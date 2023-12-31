<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
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
    return view('tugaslandingpage');
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

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show', 'App\Http\Controllers\DosenController@showBlog');

Route::get('/employee/{nama}', 'App\Http\Controllers\DosenController@shownama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

//route CRUD
Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//route CRUD soal EAS tahun lalu
Route::get('/nilaikuliah', 'App\Http\Controllers\NilaiController@index2');
Route::get('/nilaikuliah/tambah2','App\Http\Controllers\NilaiController@tambah2');
Route::post('/nilaikuliah/store2','App\Http\Controllers\NilaiController@store2');

//route agen
Route::get('/data-agen', 'App\Http\Controllers\AgenController@index');

Route::get('/data-agen/tambah','App\Http\Controllers\AgenController@tambah');
Route::post('/data-agen/store','App\Http\Controllers\AgenController@store');

Route::get('/data-agen/edit/{id}','App\Http\Controllers\AgenController@edit');
Route::post('/data-agen/update','App\Http\Controllers\AgenController@update');

Route::get('/data-agen/hapus/{id}','App\Http\Controllers\AgenController@hapus');

Route::get('/data-agen/cari','App\Http\Controllers\AgenController@cari');

Route::get('/data-agen/view/{id}','App\Http\Controllers\AgenController@view');


Route::get('/datakategori', 'App\Http\Controllers\EASController@index');
Route::post('/kategori','App\Http\Controllers\EASController@view');

