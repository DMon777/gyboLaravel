<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainers extends Model
{
    protected $table = 'trainers';

    public function classes()
    {
        return $this->belongsToMany(
            'App\Classes',
            'trainers_classes',
            'trainer_id',
            'class_id'
        );
    }

    public function articles()
    {
        return $this->hasMany('App\Articles','author_id','id');
    }
}
