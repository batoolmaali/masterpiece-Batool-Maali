<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    protected $fillable = ["photographer_name", "photographer_email", "photographer_phone", "photographer_address", "is_available", "photo_desc", "photographer_image"];

    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }
    public function packages()
    {
        return $this->hasMany('App\Package');
    }
    public function packageOrds()
    {
        return $this->hasMany('App\PackageOrder');
    }
}
