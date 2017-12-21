<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function article()
    {
        return $this->belongsTo('App\Articles','id','article_id');
    }
}
