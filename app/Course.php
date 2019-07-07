<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'description', 'announcement', 'type_id', 'tags', 'price', 'preview', 'picture', 'level', 'duration', 'is_active'];

    public function type() {
        return $this->belongsTo('App\CoursesType');
    }
    public function types() {
        return $this->belongsToMany('App\CoursesType', 'courses_types_rel', 'course_id', 'type_id');
    }
    public function scopeIsActive(){
        return $this->where('is_active', '=', 1);
    }
}

