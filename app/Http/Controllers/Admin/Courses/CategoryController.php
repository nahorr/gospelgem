<?php

namespace App\Http\Controllers\Admin\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CourseCategory;

class CategoryController extends Controller
{
    public function courseCategories(){

    	$coursecategories = CourseCategory::get();

    	return view('admin.courses.categories', compact('coursecategories'));
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

	   	$coursecategory = CourseCategory::where('id', $coursecategory->id)->first();

	   	$coursecategory->course_category_name = $request->course_category_name;
        $coursecategory->course_category_description = $request->course_category_description;
	   	
	   	$category->save();

        flash('Course Category Edited successfully!')->success();

   		return back();
   }

   

   public function deleteCourseCategory(CourseCategory $coursecategory)

    {
    	CourseCategory::where('id', $coursecategory->id)->delete();

        flash('Course Category deleted!')->warning();

    	return back();
    }
}
