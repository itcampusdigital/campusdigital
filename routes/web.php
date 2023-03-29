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

// Letakkan fungsi ini pada route paling atas
\Ajifatur\FaturCMS\FaturCMS::routes();

// Home
Route::get('/', 'HomeController@index')->name('site.home');

// Program
Route::get('/program/kategori/{category}', 'ProgramController@index')->name('site.program.index');
Route::get('/program/{permalink}', 'ProgramController@detail')->name('site.program.detail');
Route::post('/program/{permalink}/register', 'ProgramController@register')->name('site.program.register');

// Artikel
Route::get('/artikel', 'ArtikelController@index')->name('site.artikel.index');
Route::get('/artikel/{permalink}', 'ArtikelController@detail')->name('site.artikel.detail');
Route::get('/artikel/kategori/{permalink}', 'ArtikelController@byCategory')->name('site.artikel.by-category');
Route::get('/artikel/author/{username}', 'ArtikelController@byAuthor')->name('site.artikel.by-author');
Route::get('/artikel/contributor/{username}', 'ArtikelController@byContributor')->name('site.artikel.by-contributor');

// Pencarian
Route::get('/search', 'ArtikelController@search')->name('site.artikel.search');

// Cabang
Route::get('/cabang', 'CabangController@index')->name('site.cabang.index');

// Galery
Route::get('/galery', 'CabangController@galery')->name('site.galery.index');
Route::get('/galery/create', 'CabangController@create')->name('site.galery.create');
Route::post('/galery/store', 'CabangController@store')->name('galery.store');

// Halaman
Route::get('/{permalink}', 'HalamanController@detail')->name('site.halaman.detail');
