<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $primaryKey = 'vimeo_id';

    public function course()
    {

        return $this->belongsTo('App\Course', 'course_id');
    }

    public function users()
    {

        return $this->belongsToMany('App\User', 'lesson_user', 'lesson_id', 'user_id');
    }
}
