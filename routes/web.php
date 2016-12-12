<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'BlogController@index');
Auth::routes();
Route::get('blog/manage', 'BlogController@manage');
Route::get('blog/category/{id}', 'BlogController@category');
Route::get('blog/user/{id}', 'BlogController@user');
Route::resource('blog', 'BlogController');

