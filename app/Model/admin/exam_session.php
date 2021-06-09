<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class exam_session extends Model
{
    protected $table='exam_session';

     public function exam(){
        return $this->belongsTo('App\Model\admin\exam');
     } 

     public function course_sess(){
        return $this->belongsTo('App\Model\admin\course_session','session_id');
     }
}
