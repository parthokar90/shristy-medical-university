<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class user_score extends Model
{
    public function quiz(){
        return $this->belongsTo('App\Model\admin\quiz');
     }
     public function user(){
        return $this->belongsTo('App\Model\admin\user');
     }
     
}
