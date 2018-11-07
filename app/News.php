<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'news_category_id',
        'news_title',
        'news_short_content',
        'news_author',
        'news_preview',
        'news_code',
        'news_content',
        'news_day'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function getLastNews() {

    }
}
