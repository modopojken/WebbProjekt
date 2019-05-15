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

Route::get('/words', 'WordsController@index');

Route::get('/words/all', 'WordsController@all');

Route::get('/words/allt', 'WordsController@allt');

Route::get('/words/create', 'WordsController@create');

Route::post('/words', 'WordsController@store');