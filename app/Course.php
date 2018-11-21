<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function course_category()
    {
    	return $this->belongsTo('App\CourseCategory');
    }
}
