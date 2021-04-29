<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['post_image','post_desc','post_title','user_id'];



     public function comments(){
    return $this->hasMany('App\Comment');
    
}

public function user(){
    return $this->belongsTo('App\User' ,"user_id");
}
public function liks()
{
    return $this->hasMany('App\like');
}


}