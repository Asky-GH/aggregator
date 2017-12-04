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

Route::get('/', function(){
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/links', 'LinkController@index');

Route::post('/links', 'LinkController@store');

Route::get('/links/create', 'LinkController@create');

Route::get('/links/{link}', 'LinkController@show');


Route::post('/links/{link}/comments', 'CommentController@store');