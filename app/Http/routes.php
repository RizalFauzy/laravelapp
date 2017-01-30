<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomepageController@index');
Route::get('about', 'AboutController@index');
Route::get('siswa', 'SiswaController@index'); //show all
Route::get('siswa/create', 'SiswaController@create'); //insert form
Route::post('siswa', 'SiswaController@store'); //insert
Route::get('siswa/{siswa}', 'SiswaController@show'); //read
Route::get('siswa/{siswa}/edit', 'SiswaController@edit'); //update form
Route::patch('siswa/{siswa}', 'SiswaController@update'); //update
Route::delete('siswa/{siswa}', 'SiswaController@destroy'); //delete

?>