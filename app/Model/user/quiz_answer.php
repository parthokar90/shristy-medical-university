<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class quiz_answer extends Model
{
    protected $table='quiz_answer';

    public function description(){
        return $this->belongsTo('App\Model\admin\quiz_option','option_id', 'id');
    }
}
