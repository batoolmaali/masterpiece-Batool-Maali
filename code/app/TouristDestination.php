<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TouristDestination extends Model
{
    protected $fillable = ["city_name", "price", "is_available", "max_pacenger_count", "current_pacenger_count", "number_of_days", "city_image", "tourism_office_id", "special_price", "city_desc"];

    public function Office()
    {

        return $this->belongsTo('App\TourismOffices', 'tourism_office_id');
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
