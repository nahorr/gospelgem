<?php

namespace App\Http\Controllers\Admin\Pictures;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PictureCategory;

class CategoryController extends Controller
{
    public function categories()
    {
    	$pic_categories = PictureCategory::get();

    	return view('admin/pictures/categories', compact('pic_categories'));
    }

     public function storeNewPicCategory(Request $request){

	   	$pic_category = new PictureCategory();

	   	$pic_category->pic_category_name = $request->pic_category_name;
        $pic_category->pic_category_description = $request->pic_category_description;
	   	
	   	$pic_category->save();

        flash('Picture Category Added successfully!')->success();

   		return back();
   }

   public function storeEditPicCategory(Request $request, PictureCategory $category){

	   	$pic_category = PictureCategory::where('id', $category->id)->first();

	   	$pic_category->pic_category_name = $request->pic_category_name;
        $pic_category->pic_category_description = $request->pic_category_description;
	   	
	   	$pic_category->save();

        flash('Picture Category Edited successfully!')->success();

   		return back();
   }

   public function deletePicCategory(PictureCategory $category)

    {
    	PictureCategory::where('id', $category->id)->delete();

        flash('Picture Category deleted!')->warning();

    	return back();
    }
   
}
