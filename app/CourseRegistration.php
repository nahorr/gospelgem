<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CourseRegistration extends Model
{
	use Notifiable;
	
	protected $dates = ['start_date', 'end_date'];
	
    public function course()
    {
    	return $this->belongsTo('App\Course');
    }
}
