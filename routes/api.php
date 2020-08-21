<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('siswa','Api\siswaApiController@index');

//calon
Route::get('getcalon','Api\CalonController@get');
Route::get('calon','Api\CalonController@index');


Route::post('vote','Api\voteController@store');

Route::get('vote','Api\voteController@index');
Route::post('getvote','Api\voteController@get');
Route::post('detail','Api\CalonController@getvote');
Route::post('jurusanpresent','Api\voteController@getpresent');
