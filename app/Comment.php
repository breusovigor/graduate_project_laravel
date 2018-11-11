<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name', 'email', 'comment_theme', 'comment_text', 'news_id'
    ];

    public function news()
    {
        return $this->belongsTo('App\News', 'news_id', 'id');
    }
}
