<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $primaryKey = 'system_name';
    public $incrementing = false;
    public $timestamps = false;
}
