<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    protected $fillable = ["dress_name", "dress_size", "dress_color", "dress_price", "special_price", "is_available", "dress_image", "dress_desc", "dresses_shop_id"];
    public function DressesShop()
    {
        return $this->belongsTo('App\DressesShop', 'dresses_shop_id');
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
