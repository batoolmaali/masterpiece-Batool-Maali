<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable=["company_name","company_email","company_phone","company_address"];
    public function hall(){

        return $this->hasMany('App\Hall','company_id');

    }
}
