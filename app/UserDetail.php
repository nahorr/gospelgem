<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{

	protected $dates = ['dob'];
	
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
