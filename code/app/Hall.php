<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = ["hall_name", "hall_address", "hall_type", "hall_price", "special_price", "persons_number", "is_available", "hall_desc", "hall_image", "company_id"];


    public function company()
    {

        return $this->belongsTo('App\Company', 'company_id');
    }
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
