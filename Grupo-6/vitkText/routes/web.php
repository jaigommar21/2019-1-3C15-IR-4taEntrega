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

Route::get('add','MetasController@create');
Route::post('add','MetasController@store');
Route::get('meta','MetasController@index');
Route::get('edit/{id}','MetasController@edit');
Route::post('edit/{id}','MetasController@update');
Route::delete('{id}','MetasController@destroy');