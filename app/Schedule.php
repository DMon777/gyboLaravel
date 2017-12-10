<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = "schedule";

    public function classes()
    {
        return $this->belongsTo('App\Classes','class_id','id');
    }

}
