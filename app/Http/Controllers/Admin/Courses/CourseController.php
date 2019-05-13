<?php

namespace App\Http\Controllers\Admin\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CourseCategory;
use App\Course;
use File;
use Image;

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
            //'price' => 'required',
            'course_picture' => 'required|mimes:jpeg,jpg,png|max:10000',
            'course_description' => 'required',
            //'course_moodle_link' => 'required',
            'course_mentor' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        if($request->hasFile('course_picture')){
            $course_picture = $request->file('course_picture');
            $filename = time() . '.' . $course_picture->getClientOriginalExtension();
            Image::make($course_picture)->fit(352,209)->save( public_path('/unify/assets/img/coursepictures/' . $filename ) );
        }


        Course::insert([
            'course_category_id' => $request->course_category_id,
            'course_code' => $request->course_code,
            'course_name' => $request->course_name,
            'currency' => $request->currency,
            'price' => $request->price,
            'paystack_link' => $request->paystack_link,
            'course_picture' => $filename,
            'course_description' => $request->course_description,
            'course_venue' => $request->course_venue,
            'course_moodle_link' => $request->course_moodle_link,
            'enrolment_key' => $request->enrolment_key,
            'course_mentor' => $request->course_mentor,
            'start_date' => $request->start_date,
            'start_time' => $request->start_time,
            'end_date' => $request->end_date,
            'end_time' => $request->end_time,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
       
        flash('course Added!')->success();
        return back();
   }

   public function storeUpdateCourse(Request $request, Course $course)
    {
      	$this->validate(request(), [

            'course_category_id' => 'required',
            //'course_code' => 'required|unique:courses',
            'course_name' => 'required',
            //'price' => 'required',
            'course_description' => 'required',
            //'course_moodle_link' => 'required',
            'course_mentor' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        
        $edit_course = Course::where('id', $course->id)->first();

        $edit_course->course_category_id = $request->course_category_id;
        //$edit_course->course_code = $request->course_code;
        $edit_course->course_name = $request->course_name;
        $edit_course->currency = $request->currency;
        $edit_course->price = $request->price;
        $edit_course->paystack_link = $request->paystack_link;
        $edit_course->course_description = $request->course_description;
        $edit_course->course_venue = $request->course_venue;
        $edit_course->course_moodle_link = $request->course_moodle_link;
        $edit_course->enrolment_key = $request->enrolment_key;
        $edit_course->course_mentor = $request->course_mentor;
        $edit_course->start_date = $request->start_date;
        $edit_course->start_time = $request->start_time;
        $edit_course->end_date = $request->end_date;
        $edit_course->end_time = $request->end_time;
        
        if($request->hasFile('course_picture')){
            $course_picture = $request->file('course_picture');
            $filename = time() . '.' . $course_picture->getClientOriginalExtension();
            //$destinationPath = public_path().'/unify/assets/img/coursepictures/';

            // Delete current image before uploading new image
            $file = public_path('/unify/assets/img/coursepictures/'.$filename);
            if (File::exists($file)) {
                    unlink($file);
                }          

            Image::make($course_picture)->fit(352,209)->save( public_path('/unify/assets/img/coursepictures/' . $filename ) );
            $edit_course->course_picture = $filename;
            
        }     

        $edit_course->save();

        flash('course Updated!')->success();
        return back();

     }

     public function deleteCourse(Course $course)

    {
        Course::where('id', $course->id)->delete();

        flash('course deleted!')->warning();

        return back();
    }


}
