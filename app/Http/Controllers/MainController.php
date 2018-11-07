<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $news = News::take(6)->get();
        $category = Category::all();
//        $news = News::find(1);
        //dd($news);

        return view('main', ['news' => $news]);
    }
}
