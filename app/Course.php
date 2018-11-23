<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	//protected $fillable = ['course_picture'];

    public function course_category()
    {
    	return $this->belongsTo('App\CourseCategory');
    }
}
