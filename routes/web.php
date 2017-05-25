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
    //return view('welcome');
    //return view('greeting', ['name' => 'James']);
    return view('greeting')->with('name', array('Victoria'));
});

/*Route::get('user/{id}', 'UserController@show');

Route::resource('photos', 'PhotoController');

Route::resource('photo', 'PhotoController', ['only' => [
    'index', 'show'
]]);*/

Route::get('blade', function () {
    return view('layouts.child');
});