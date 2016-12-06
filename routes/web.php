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
Route::get('/client','ClientController@index');
Route::post('/client','ClientController@storage');
Route::get('/client/{id}','ClientController@show');
Route::delete('/client/{id}','ClientController@destroy');
Route::post('/client/{id}','ClientController@update');