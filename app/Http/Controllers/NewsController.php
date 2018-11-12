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
        $randomNews = News::all()->random(2);
        $lastNews = News::latest()->limit(1)->get();
        return view('news',
            [
                'news' => $news,
                'categories' => $categories,
                'randomNews' => $randomNews,
                'lastNews' => $lastNews,
            ]);
    }

    public function getOneNews($id)
    {
        $news = News::find($id);
        $categories = Category::all();
        $randomNews = News::all()->random(2);
        $comment = Comment::where('news_id', '=', $id)->get();
        $lastNews = News::latest()->limit(1)->get();
        return view('news-post',
            [
                'news' => $news,
                'categories' => $categories,
                'comment' => $comment,
                'randomNews' => $randomNews,
                'lastNews' => $lastNews,
            ]);
    }
}
