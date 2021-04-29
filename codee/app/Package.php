<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function hall()
    {
        return $this->belongsTo('App\Hall');
    }
    public function flower()
    {
        return $this->belongsTo('App\Flower');
    }
    public function dress()
    {
        return $this->belongsTo('App\Dress');
    }
    public function suit()
    {
        return $this->belongsTo('App\Suit');
    }
    public function touristDestination()
    {
        return $this->belongsTo('App\TouristDestination');
    }
    public function Photographer()
    {
        return $this->belongsTo('App\Photographer');
    }
    public function  packageOrds()
    {
        return $this->hasMany('App\PackageOrder');
    }
    
}
