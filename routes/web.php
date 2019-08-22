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


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'AventuraController@index');
Route::get('/lista_aventura', 'AventuraController@lista_aventura');
Route::get('/leia_mais', 'AventuraController@leia_mais');
