<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{

    public function trainers()
    {
        return $this->belongsToMany('App\Trainers','role_user','role_id','user_id');
    }

}
