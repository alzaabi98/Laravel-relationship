<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'vimeo_id';

    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }
}
