<?php

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
Route::get('/refreshcaptcha', 'HelperController@refreshCaptcha');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/artikel', 'ArtikelController@index')->name('artikel.index');
Route::get('/artikel/create', 'ArtikelController@create')->name('artikel.create');
Route::get('/artikel/{artikel}', 'ArtikelController@show')->name('artikel.show');
Route::get('/artikel/{id}/edit', 'ArtikelController@edit')->name('artikel.show');
Route::post('/artikel', 'ArtikelController@store')->name('artikel.store');

Route::get('/berita', 'BeritaController@index')->name('berita.index');
Route::get('/berita/create', 'BeritaController@create')->name('berita.create');
Route::get('/berita/{berita}', 'BeritaController@show')->name('berita.show');
Route::post('/berita', 'BeritaController@store')->name('berita.store');

Route::get('/galeri', 'GaleriController@index')->name('galeri.index');
Route::get('/galeri/create', 'GaleriController@create')->name('galeri.create');
Route::get('/galeri/{galeri}', 'GaleriController@show')->name('galeri.show');
Route::post('/galeri', 'GaleriController@store')->name('galeri.store');

Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman.index');
Route::get('/pengumuman/create', 'PengumumanController@create')->name('pengumuman.create');
Route::get('/pengumuman/{pengumuman}', 'PengumumanController@show')->name('pengumuman.show');
Route::post('/pengumuman', 'PengumumanController@store')->name('pengumuman.store');

// Bagian Kategori
Route::get('/kategori_artikel', 'Kategori_ArtikelController@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create', 'Kategori_ArtikelController@create')->name('kategori_artikel.create');
Route::get('/kategori_artikel/{kategori_artikel}', 'Kategori_ArtikelController@show')->name('kategori_artikel.show');
Route::post('/kategori_artikel', 'Kategori_ArtikelController@store')->name('kategori_artikel.store');

Route::get('/kategori_berita', 'Kategori_BeritaController@index')->name('kategori_berita.index');
Route::get('/kategori_berita/create', 'Kategori_BeritaController@create')->name('kategori_berita.create');
Route::get('/kategori_berita/{kategori_berita}', 'Kategori_BeritaController@show')->name('kategori_berita.show');
Route::post('/kategori_berita', 'Kategori_BeritaController@store')->name('kategori_berita.store');


Route::get('/kategori_galeri', 'Kategori_GaleriController@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/create', 'Kategori_GaleriController@create')->name('kategori_galeri.create');
Route::get('/kategori_galeri/{kategori_galeri}', 'Kategori_GaleriController@show')->name('kategori_galeri.show');
Route::post('/kategori_galeri', 'Kategori_GaleriController@store')->name('kategori_galeri.store');

Route::get('/kategori_pengumuman', 'Kategori_PengumumanController@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/create', 'Kategori_PengumumanController@create')->name('kategori_pengumuman.create');
Route::get('/kategori_pengumuman/{kategori_pengumuman}', 'Kategori_PengumumanController@show')->name('kategori_pengumuman.show');
Route::post('/kategori_pengumuman', 'Kategori_PengumumanController@store')->name('kategori_pengumuman.store');


