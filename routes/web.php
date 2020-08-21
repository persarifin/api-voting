<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the R[outeServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('siswa','siswacontroller');
Route::resource('jurusan','jurusancontroller');
Route::resource('ketua','ketuacontroller');
Route::resource('calon','calonController');
Route::get('calon/{id}','calonController@show')->name('view');
Route::resource('up','upcontroller');

//admin
Route::get('del', 'voteController@get')->name('gas');
Route::resource('vote', 'voteController');
Route::resource('admin','adminController');



Auth::routes();


Route::get('/', 'HomeController@index');

