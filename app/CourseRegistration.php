<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseRegistration extends Model
{
	protected $dates = ['start_date', 'end_date'];
	
    public function course()
    {
    	return $this->belongsTo('App\Course');
    }
}
