<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suit_shop extends Model
{
    protected $fillable = ["shop_name", "shop_email", "shop_phone", "shop_address"];

    public function suits()
    {
        return $this->hasMany('App\Suit', 'Suit_shop_id');
    }
}
