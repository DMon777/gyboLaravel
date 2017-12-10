<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';


    public function trainers()
    {
        return $this->belongsToMany('App\Trainers',
            'trainers_classes','class_id','trainer_id'
        );
    }

    public function schedules()
    {
        return $this->hasMany('App\Schedule','class_id','id');

    }


}
