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

Route::get('/', 'StudentController@index');
Route::get('help','StudentController@help');
Route::get('detail/{id}','StudentController@detail');
Route::get('about','StudentController@about');
Route::get('index','StudentController@index');
