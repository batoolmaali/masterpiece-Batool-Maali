<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suit extends Model
{
    protected $fillable = ["suit_name", "suit_size", "suit_color", "suit_price", "special_price", "is_available", "suit_image", "suit_desc", "suit_shop_id"];
    public function suitShop()
    {
        return $this->belongsTo('App\Suit_shop', 'suit_shop_id');
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
