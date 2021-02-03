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
Route::get('/obras', 'libraryController@index')->name('index');
Route::get('/obras/{id}', 'libraryController@show')->name('show');
Route::post('/obras/{id}', 'libraryController@update')->name('update');
Route::post('/obras', 'libraryController@store')->name('store');
Route::delete('/obras/{id}', 'libraryController@destroy')->name('delete');
