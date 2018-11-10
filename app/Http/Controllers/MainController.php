<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $news = News::all();
        foreach ($news as $item) {
            $category = $item->category;
        }
        //$category = Category::all();
        //dd($category);
//        $news = News::find(1);


        return view('main', ['news' => $news, 'category' => $category]);
    }
}
