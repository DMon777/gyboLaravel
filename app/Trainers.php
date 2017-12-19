<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Trainers extends Authenticatable
{
    protected $table = 'trainers';

    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

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

    public function roles()
    {
        return $this->belongsToMany('App\Roles','role_user','user_id','role_id');
    }
}
