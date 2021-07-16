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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ini route mahasiswa
Route::get('mahasiswa','MahasiswaController@index')->name('mahasiswa');
Route::get('tambah-data','MahasiswaController@tambah');
Route::post('mahasiswa','MahasiswaController@create');
Route::get('edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::post('update-mahasiswa/{id}', 'MahasiswaController@update')->name('mahasiswa.update');
Route::get('hapus-mahasiswa/{id}', 'MahasiswaController@destroy')->name('mahasiswa.hapus');


//isi route makul
Route::get('makul', 'MakulController@index')->name('makul');
Route::get('tambah-makul', 'MakulController@tambah');
Route::post('makul','MakulController@create');
Route::get('edit-makul/{id}', 'MakulController@edit')->name('makul.edit');
Route::post('update-makul/{id}', 'MakulController@update')->name('makul.update');
Route::get('hapus-makul/{id}', 'MakulController@destroy')->name('makul.hapus');

//isi route nilai
Route::get('nilai', 'NilaiController@index')->name('nilai');
Route::get('tambah-nilai', 'NilaiController@tambah');
Route::post('nilai', 'NilaiController@create');
Route::get('edit-nilai/{id}', 'NilaiController@edit')->name('nilai.edit');
Route::post('update-nilai/{id}', 'NilaiController@update')->name('nilai.update');
Route::get('hapus-nilai/{id}', 'NilaiController@destroy')->name('nilai.hapus');





