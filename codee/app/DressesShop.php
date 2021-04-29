<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DressesShop extends Model
{
    protected $fillable = ["shop_name", "shop_email", "shop_phone", "shop_address"];

    public function dresses()
    {
        return $this->hasMany('App\Dress', 'dresses_shop_id');
    }
}
