<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $guard = "web";
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany('App\Post', 'user_id');
    }
    
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }
    public function packageOrds()
    {
        return $this->hasMany('App\PackageOrder');
    }
    public function liks()
    {
        return $this->hasMany('App\like');
    }
}
