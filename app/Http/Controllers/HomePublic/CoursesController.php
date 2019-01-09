<?php

namespace App\Http\Controllers\HomePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\CourseRegistration;

class CoursesController extends Controller
{
    public function showCourses()
    {
    	$courses = Course::get();


    	return view('public-views.courses.showcourses', compact('courses'));
    }

    public function showCourseDetails(Course $course)
    {

    	return view('public-views.courses.showcoursedetails', compact('course'));
    }

    public function register(Course $course)
    {
    	
    	return view('public-views.courses.register', compact('course'));
    }

    public function storeRegistration(Request $request , Course $course){

    	$this->validate(request(), [

            'course_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'agree' => 'required',
        ]);

        CourseRegistration::insert([
            'course_id' => $request->course_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'agree' => $request->agree,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
       
        flash('Registration Successful!')->success();

        return redirect()->route('registrations');
   }
}
