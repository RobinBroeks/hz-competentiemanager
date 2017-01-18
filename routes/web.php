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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/dashboard', 'HomeController@index');
Route::get('/demand', 'DemandController@index');

Route::resource('competency', 'CompetencyController');
Route::resource('project', 'ProjectController');
Route::resource('user', 'UserController');
