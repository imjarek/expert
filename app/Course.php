<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'description', 'announcement', 'type_id', 'tags', 'price'];

    public function type() {
        return $this->belongsTo('App\CoursesType');
    }
}

