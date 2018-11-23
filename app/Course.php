<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $dates = ['start_date', 'end_date'];

    public function course_category()
    {
    	return $this->belongsTo('App\CourseCategory');
    }
}
