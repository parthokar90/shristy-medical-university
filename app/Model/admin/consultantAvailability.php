<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class consultantAvailability extends Model
{
   protected $table='consultant_availabilitys';

   public function consultant(){
      return $this->belongsTo('App\Model\admin\consultant');
   }
   public function service(){
      return $this->belongsTo('App\Model\admin\service');
   }
}
