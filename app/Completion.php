<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Completion extends Model
{
    public function users()
    {

        return $this->belongsToMany('App\User', 'completion_user', 'lesson_id', 'user_id');
    }
}
