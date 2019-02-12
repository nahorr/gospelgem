<?php

namespace App\Http\Controllers\Admin\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Exports\CourseRegistrationsExport;
use App\CourseRegistration;
use Maatwebsite\Excel\Facades\Excel;

class CourseRegistrationsController extends Controller
{
    public function showAllCourses()
    {

    	$courses_paginate = Course::orderBy('created_at', 'desc')->paginate(20);

    	$courses_registrations = CourseRegistration::orderBy('created_at', 'desc')->get();

    	return view('admin.courses.showallcourses', compact('courses_paginate', 'courses_registrations'));
    }

    public function showCourseRegistrations(Course $course)
    {

    	$course_registrations = CourseRegistration::where('course_id', $course->id)->orderBy('created_at', 'desc')->get();

    	$courses_registrations = CourseRegistration::orderBy('created_at', 'desc')->get();

    	return view('admin.courses.showcourseregistrations', compact('course_registrations', 'course', 'courses_registrations'));
    }

    public function deleteCourseRegistration(CourseRegistration $courseregistration)

    {
        CourseRegistration::where('id', $courseregistration->id)->delete();

        flash('Registration Deleted !')->warning();

        return back();
    }

     public function downloadCourseRegistrationsExcel(Course $course)
    {
        return (new CourseRegistrationsExport($course->id))->download("$course->course_name.xlsx");

    }
}
