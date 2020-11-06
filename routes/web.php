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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data', 'DataController@index');
Route::get('/data/pdf', 'DataController@pdf');
Route::get('/data/master', 'DataController@master');
Route::post('/data/create', 'DataController@create');
Route::get('/data/{id}/edit', 'DataController@edit');
Route::get('/data/{id}/delete', 'DataController@delete');
Route::post('/data/{id}/update', 'DataController@update');
// Route::resource('/data', 'DataController@index');