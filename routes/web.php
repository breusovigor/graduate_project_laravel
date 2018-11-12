<?php

use Illuminate\Http\Request;
use App\News;

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

Route::get('/', 'MainController@index');

Route::get('/contact',  'ContactController@index');
Route::post('/contact',  'ContactController@send')->name('contact');

Route::get('/about', function () {
    $randomNews = News::all()->random(2);
    return view('about', ['randomNews' => $randomNews]);
});

Route::get('/news',  'NewsController@index');

Route::prefix('/admin')->group(function () {
    Route::resource('/news', 'AdminController');

});

Route::get('news-post/{id}', 'NewsController@getOneNews');
Route::post('news-post/{id}', 'CommentController@sendComment')->name('comment');

Route::get('/projects', 'ProjectController@index')->name('project');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
