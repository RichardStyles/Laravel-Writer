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
    return redirect('/words');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/words', 'PostsController@index');
Route::post('/words', 'PostsController@store');
Route::get('/words/create', 'PostsController@create');
Route::get('/words/{post}', 'PostsController@show');
