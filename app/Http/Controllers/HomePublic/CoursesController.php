<?php

namespace App\Http\Controllers\HomePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

class CoursesController extends Controller
{
    public function showCourses()
    {
    	$courses = Course::get();


    	return view('public-views.courses.showcourses', compact('courses'));
    }

    public function showPaymentForm(Course $course)
    {

    	return view('public-views.courses.showpaymentform', compact('course'));
    }
}
