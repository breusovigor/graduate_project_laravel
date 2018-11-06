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
    return view('main');
});

Route::get('/contact',  'ContactController@index');
Route::post('/contact',  'ContactController@send')->name('contact');

Route::get('/about', function () {
    return view('about');
});

Route::get('/news',  'NewsController@index');

Route::get('/admin', function () {
    return view('admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
