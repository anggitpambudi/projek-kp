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
    return view('index');
});

Route::get('/chart', function () {
    return view('chart');
});

Route::get('/dashboard','TableController@index')->middleware('auth');
Route::get('/dashboard/{id}/edit','TableController@edit');
Route::put('/dashboard/{id}','TableController@update');
Route::delete('/dashboard/{id}','TableController@destroy');

Route::get('/create','TableController@create');
Route::post('/create','TableController@store');

Route::get('/table','TableController@table');
Route::get('/table/{id}/edit','TableController@edit');
Route::put('/table/{id}','TableController@update');
Route::delete('/table/{id}','TableController@destroy');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login');
Route::post('/logout','LoginController@logout');

Route::get('/register', 'LoginController@create');
Route::post('/register','LoginController@store');

Route::get('/profile/{id}','LoginController@edit');
Route::post('/profile/{id}','LoginController@update');