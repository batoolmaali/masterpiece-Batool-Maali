<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourismOffices extends Model
{
    protected $fillable=["office_name","office_email","office_phone","office_address"]; 

   
    public function  Tourist(){

    return $this->hasMany('App\TouristDestination','tourism_office_id' );

    }
}