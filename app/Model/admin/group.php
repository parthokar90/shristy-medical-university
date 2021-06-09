<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
	public function courses()
	{
		return $this->hasMany('App\Model\admin\course');
	}
}
