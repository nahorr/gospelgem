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

    	$courses_paginate = Course::orderBy('created_at', 'desc')->paginate(20);

    	$courses_registrations = CourseRegistration::get();

    	return view('admin.courses.showallcourses', compact('courses_paginate', 'courses_registrations'));
    }

    public function showCourseRegistrations(Course $course)
    {

    	$course_registrations = CourseRegistration::where('course_id', $course->id)->get();

    	$courses_registrations = CourseRegistration::get();

    	return view('admin.courses.showcourseregistrations', compact('course_registrations', 'course', 'courses_registrations'));
    }
}
