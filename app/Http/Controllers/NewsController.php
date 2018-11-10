<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;


class NewsController extends Controller
{
    public function index(Request $request)
    {

        $news = News::all();
        $categories = Category::all();


        return view('news', ['news' => $news, 'categories' => $categories]);
    }
}
