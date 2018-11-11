<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\News;
use App\Category;

class CommentController extends Controller
{
    public function sendComment(Request $request)
    {
        $comment = new Comment;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment_theme = $request->theme;
        $comment->comment_text = $request->message;
        $comment->news_id = $request->id;
        $comment->save();
        return redirect('news-post/'.$request->id);
    }
}
