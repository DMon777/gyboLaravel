<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = "articles";

    public function author()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Categories');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tags',
            'articles_tags',
            'article_id',
            'tag_id');
    }

}
