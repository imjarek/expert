<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    public function contents()
    {
        return $this->hasMany('App\Content', 'block_id', 'id');
    }
}
