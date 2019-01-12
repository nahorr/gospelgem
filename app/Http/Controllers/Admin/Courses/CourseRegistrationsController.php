<?php

namespace App\Http\Controllers\Admin\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\CourseRegistration;

class CourseRegistrationsController extends Controller
{
    public function showAllCourses()
    {
    	$courses = Course::get();

    	$courses_paginate = Course::orderBy('created_at', 'desc')->paginate(2);

    	$course_registrations = CourseRegistration::get();

    	return view('admin.courses.showallcourses', compact('courses', 'courses_paginate', 'course_registrations'));
    }

    public function showCourseRegistrations(Course $course)
    {

    	$course_registrations = CourseRegistration::where('course_id', $course->id)->get();

    	return view('admin.courses.showcourseregistrations', compact('course_registrations'));
    }
}
