<?php

namespace App\Http\Controllers\Admin\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CourseCategory;
use App\Course;

class CourseController extends Controller
{
    public function showCourseCategory(CourseCategory $coursecategory){

    	$categorycourses = Course::where('course_category_id', $coursecategory->id)->get();

    	return view('admin.courses.showcategorycourses', compact('coursecategory', 'categorycourses'));
    }

    public function storeAddCourse(Request $request , CourseCategory $coursecategory){

    	$this->validate(request(), [

            'course_category_id' => 'required',
            'course_code' => 'required|unique:courses',
            'course_name' => 'required',
            'course_picture' => 'required',
            'course_description' => 'required',
            'course_moodle_link' => 'required',
            'course_mentor' => 'required',
            'course_start_date' => 'required',
            'course_end_date' => 'required',
        ]);

        Course::insert([
            'course_category_id' => $request->course_category_id,
            'course_code' => $request->course_code,
            'course_name' => $request->course_name,
            'course_picture' => $request->course_picture,
            'course_description' => $request->course_description,
            'course_moodle_link' => $request->course_moodle_link,
            'course_mentor' => $request->course_mentor,
            'course_start_date' => $request->course_start_date,
            'course_end_date' => $request->course_end_date,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
       
        
        return back();
   }
}
