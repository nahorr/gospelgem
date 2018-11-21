<?php

namespace App\Http\Controllers\Admin\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CourseCategory;
use App\Course;

class CategoryController extends Controller
{
    public function courseCategories(){

    	$coursecategories = CourseCategory::get();
    	$courses = Course::get();

    	return view('admin.courses.categories', compact('coursecategories', 'courses'));
    }

    public function storeAddCourseCategory(Request $request){

    	$this->validate($request, [
	        'course_category_name' => 'required',
	        'course_category_description' => 'required',        
        ]);

	   	$coursecategory = new CourseCategory();

	   	$coursecategory->course_category_name = $request->course_category_name;
        $coursecategory->course_category_description = $request->course_category_description;
	   	
	   	$coursecategory->save();

        flash('Course Category Added successfully!')->success();

   		return back();
   }

   public function storeEditCourseCategory(Request $request, CourseCategory $coursecategory){

	   	$editcoursecategory = CourseCategory::where('id', $coursecategory->id)->first();

	   	$editcoursecategory->course_category_name = $request->course_category_name;
        $editcoursecategory->course_category_description = $request->course_category_description;
	   	
	   	$editcoursecategory->save();

        flash('Course Category updated successfully!')->success();

   		return back();
   }

   

   public function deleteCourseCategory(CourseCategory $coursecategory)

    {
    	CourseCategory::where('id', $coursecategory->id)->delete();

        flash('Course Category deleted!')->warning();

    	return back();
    }
}
