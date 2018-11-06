<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class MainController extends Controller
{
    public function index(Request $request)
    {

        $news = News::all();
        dd($news);
        return view('main');
    }
}
