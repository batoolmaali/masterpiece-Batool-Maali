<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlowerShop extends Model
{
    protected $fillable=["shop_name","shop_email","shop_phone","shop_address"];



    public function flowers(){

    return $this->hasMany('App\Flower');

    }
}
