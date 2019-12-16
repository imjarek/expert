<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Event;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'second_name', 'email', 'password', 'is_active', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $temp_pass;
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();

        static::created(function ($user) {

            Event::dispatch('user.created', $user);
        });
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function order()
    {
        return $this->hasOne(Order::class);
    }

    public function getCourses()
    {
        return $this->order->courses;
    }

    public function getFullNameAttribute(){
        return "{$this->last_name} {$this->first_name} {$this->second_name}";
    }

    public function courses ()
    {
        return $this->belongsToMany('App\Course', 'course_user', 'user_id', 'course_id')
            ->withTimestamps();
    }
}
