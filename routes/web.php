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
    return view('forntend.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/post','PostController@store');
Route::get('/allpost','PostController@index');
Route::get('/edit/{id}','PostController@edit');
Route::get('firebase','FirebaseController@index');