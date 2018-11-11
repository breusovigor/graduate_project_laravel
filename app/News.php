<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'category_id',
        'news_title',
        'news_short_content',
        'news_author',
        'news_preview',
        'news_code',
        'news_content',
        'news_day',
        'news_preview',
        'news_views'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment', 'id', 'news_id');
    }

    public function getLastNews() {

    }
}
