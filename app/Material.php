<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public $timestamps = false;
    protected $appends = ['available'];
    protected $fillable = ['title', 'description', 'type_id', 'is_active', 'link'];

    public function scopeIsActive()
    {
        return $this->where('is_active', 1);
    }

    public function type()
    {
        return $this->belongsTo('App\MaterialType', 'type_id', 'id');
    }
}
