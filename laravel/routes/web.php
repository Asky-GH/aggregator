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
Route::get('/links/create', 'LinkController@create')->middleware('auth');
Route::get('/links/{link}', 'LinkController@show');
Route::patch('/links/{link}', 'LinkController@update');

Route::get('/pending', 'CheckController@index')->middleware('auth', 'admin');
Route::get('/pending/{link}', 'CheckController@edit')->middleware('auth', 'admin');

Route::post('/links/{link}/comments', 'CommentController@store');


Route::get('/links/tags/{tag}', 'TagController@show');


Route::get('/email/edit', 'EmailController@index')->middleware('auth');
Route::post('/email/edit', 'EmailController@store');

Route::get('/password/edit', 'PasswordController@index')->middleware('auth');
Route::post('/password/edit', 'PasswordController@store');