<?php

namespace App\Http\Controllers\Admin\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CourseCategory;
use App\Course;

class CourseController extends Controller
{
    public function showCourseCategory(CourseCategory $coursecategory){

    	$categorycourses = Course::where('category_id', $coursecategory->id)->get();

    	return view('admin.courses.showcategorycourses', compact('categorycourses'));
    }
}
