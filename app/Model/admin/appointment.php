<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    public function patient(){
       return $this->belongsTo('App\Model\admin\patient');
    }

    public function service(){
        return $this->belongsTo('App\Model\admin\service');
     }

     public function consultant(){
        return $this->belongsTo('App\Model\admin\consultant');
     }
}
