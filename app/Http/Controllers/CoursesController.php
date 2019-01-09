<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\UserDetail;
use Auth;
use App\CourseRegistration;

class CoursesController extends Controller
{
    public function registrations()
    {
  
        return view('private-views.courses.registrations');
    }

    public function storeCourseRegistration(Request $request, Course $course)
    {
  		$parts = explode(' ', Auth::user()->name);
		$name_first = array_shift($parts);
		$name_last = array_pop($parts);
	

        $courseRegistration = new CourseRegistration();

        $courseRegistration->course_id = $course->id;
        $courseRegistration->first_name = $name_first;
        $courseRegistration->last_name = $name_last;
        $courseRegistration->email = Auth::user()->email;
        $courseRegistration->phone = 4034052587;
        $courseRegistration->email = Auth::user()->email;
        $courseRegistration->trans_ref = $request->trans_ref;
        $courseRegistration->agree = true;

        $courseRegistration->save();

        return response()->json();
    }

}
