<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app/role;

class Employee extends Model
{
    //
	public function roles()
	{
	   //public $table = "employess";
	    return $this->belongsToMany('App\Role');
	}
}
