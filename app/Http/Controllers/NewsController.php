<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
use App\Comment;


class NewsController extends Controller
{
    public function index(Request $request)
    {

        $news = News::all();
        $categories = Category::all();


        return view('news', ['news' => $news, 'categories' => $categories]);
    }

    public function getOneNews($id)
    {
        $news = News::find($id);
        $categories = Category::all();
        $comment = Comment::where('news_id', '=', $id)->get();
        return view('news-post', ['news' => $news, 'categories' => $categories, 'comment' => $comment]);
    }
}
