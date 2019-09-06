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

Route::get('dosen','DosenController@index');
Route::get('dosen/create','DosenController@create');
Route::post('dosen','DosenController@Store');
Route::get('dosen/edit/{id}','DosenController@edit');
Route::put('dosen','DosenController@update');
Route::get('dosen/{id}','DosenController@show');
Route::delete('dosen','DosenController@destroy');

Route::get('mhs','MahasiswaController@index');
Route::get('mhs/create','MahasiswaController@create');
Route::post('mhs','MahasiswaController@Store');
Route::get('mhs/{id}/edit','MahasiswaController@edit');//edit
Route::put('mhs/{id}'.'MahasiswaController@update');//update
Route::delete('mhs/{id}','MahasiswaController@destroy');//delete

Route::get('makul','MatakuliahController@index');
Route::get('makul/create','MatakuliahController@create');
Route::post('makul','MatakuliahController@Store');
Route::get('makul/edit/{id}','MatakuliahController@edit');
Route::put('makul','MatakuliahController@update');
Route::get('makul/{id}','MatakuliahController@show');
Route::delete('makul','MatakuliahController@destroy');

Route::get('nilai','NilaiController@index');
Route::get('nilai/create','NilaiController@create');
Route::post('nilai','NilaiController@Store');
Route::get('nilai/edit/{id}','NilaiController@edit');
Route::put('nilai','NilaiController@update');
Route::get('nilai/{id}','NilaiController@show');
Route::delete('nilai','NilaiController@destroy');

Route::get('jurusan','JurusanController@index');
Route::get('jurusan/create','JurusanController@create');
Route::post('jurusan','JurusanController@Store');
Route::get('jurusan/edit/{id}','JurusanController@edit');
Route::put('jurusan','JurusanController@update');
Route::get('jurusan/{id}','JurusanController@show');
Route::delete('jurusan','JurusanController@destroy');
