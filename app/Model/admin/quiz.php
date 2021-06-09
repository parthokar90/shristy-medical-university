<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    public function module(){
        return $this->belongsTo('App\Model\admin\module');
     }  
     public function examsess(){
        return $this->belongsTo('App\Model\admin\exam_session','examsess_id');
     } 
     public function quizOption(){
        return $this->hasmany('App\Model\admin\quiz_option');
     }
}
