<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public function group(){
        return $this->belongsTo('App\Model\admin\group');
     }
}
