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
    return view('about');
});

Route::get('/news',  'NewsController@index');

Route::prefix('/admin')->group(function () {
    Route::get('/news', function (Request $request) {
        $news = News::paginate(5);
        foreach ($news as $item) {
        }
        return view('admin', ['news' => $news]);
    });
    Route::get('news/create', 'AdminController@index');
    Route::post('news/create', 'AdminController@create');
    //Route::get('users', 'AdminController@index');
});

Route::get('news-post/{id}', 'NewsController@getOneNews');
Route::post('news-post/{id}', 'CommentController@sendComment')->name('comment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
