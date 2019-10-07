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

Route::get('/', function () {
    return view('welcome');
});





Route::get('/kategori_artikel', 'KategoriArtikelController@index')->name('Kategori_Artikel.index');
Route::get('/kategori_artikel/create', 'KategoriArtikelController@create')->name('kategori_Artikel.create');
Route::get('/kategori_artikel/{id}', 'KategoriArtikelController@show')->name('Kategori_Artikel.show');



Route::get('/kategori_berita', 'KategoriBeritaController@index')->name('KategoriBerita.index');
Route::get('/kategori_galeri', 'KategoriGaleriController@index')->name('KategoriGaleri.index');
Route::get('/kategori_pengumuman', 'KategoriPengumumanController@index')->name('KategoriPengumuman.index');

Route::get('/artikel', 'ArtikelController@index')->name('Artikel.index');

Route::get('/artikel/create','artikelcontroller@create')->name('Artikel.create');
Route::post('/artikel/create','artikelcontroller@store')->name('Artikel.store');
Route::get('/artikel/{artikel}','artikelcontroller@show')->name('Artikel.show');

Route::get('/berita', 'BeritaController@index')->name('Berita.index');

Route::get('/berita/create','Beritacontroller@create')->name('Berita.create');
Route::post('/berita/create','Beritacontroller@store')->name('Berita.store');
Route::get('/berita/{berita}','Beritacontroller@store')->name('Berita.show');

Route::get('/galeri', 'GaleriController@index')->name('Galeri.index');

Route::get('/galeri/create','GaleriController@create')->name('Galeri.create');
Route::post('/galeri/create','GaleriController@store')->name('Galeri.store');
Route::get('/galeri/{galeri}','GaleriController@show')->name('Galeri.show');

Route::get('/pengumuman', 'PengumumanController@index')->name('Pengumuman.index');

Route::get('/pengumuman/create','PengumumanController@create')->name('Pengumuman.create');
Route::post('/pengumuman/create','PengumumanController@store')->name('Pengumuman.store');
Route::get('/pengumuman/{pengumuman}','PengumumanController@show')->name('Pengumuman.show');





Route::get('login', 'HomeController@myCaptcha')->name('myCaptcha');
Route::post('login', 'HomeController@myCaptchaPost')->name('myCaptcha.post');
Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
