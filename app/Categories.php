<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected $table = 'categories';

    public function articles()
    {
        return $this->hasMany('App\Articles','category_id','id');
    }

}
