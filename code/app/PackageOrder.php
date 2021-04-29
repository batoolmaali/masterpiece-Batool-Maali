<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageOrder extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
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
    public function package()
    {
        return $this->belongsTo('App\Package');
    }
}
