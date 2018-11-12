<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
use App\Comment;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $news = News::all();
        foreach ($news as $item) {
            $category = $item->category;
        }
        $lastNews = News::latest()->limit(6)->get()->reverse();
        $randomNews = News::all()->random(2);
        $comment = Comment::all()->random(5);


        return view('main',
            [
                'news' => $news,
                'category' => $category,
                'lastNews' => $lastNews,
                'randomNews' => $randomNews,
                'comment' => $comment,
            ]);
    }
}
