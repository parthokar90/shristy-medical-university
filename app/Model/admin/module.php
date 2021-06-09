<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    public function course(){
       return $this->belongsTo('App\Model\admin\course');
    }
    public function group(){
       return $this->belongsTo('App\Model\admin\group');
    } 
    public function quiz(){
       return $this->hasMany('App\Model\admin\quiz');
    }
}
