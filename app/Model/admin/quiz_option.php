<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class quiz_option extends Model
{
    public function quiz(){
        return $this->belongsTo('App\Model\admin\quiz');
     }
}
