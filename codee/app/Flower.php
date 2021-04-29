<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $fillable = ["flower_name", "flower_color", "flower_type", "flower_price", "special_price", "is_available", "flower_image", "flower_desc", "flower_shop_id"];

    public function flowerShop()
    {

        return $this->belongsTo('App\FlowerShop');
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
