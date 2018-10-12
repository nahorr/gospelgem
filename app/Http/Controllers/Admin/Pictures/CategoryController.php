<?php

namespace App\Http\Controllers\Admin\Pictures;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PictureCategory;
use App\ManagePicture;
use Image;
use File;

class CategoryController extends Controller
{
    public function categories()
    {
    	
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

    public function categoryPictures(PictureCategory $picture_category)
    {
    	$site_pictures = ManagePicture::where('id', $picture_category->id)->get();

    	return view('admin/pictures/showpictures', compact('picture_category', 'site_pictures'));
    }

    public function storeNewPicture(Request $request, PictureCategory $picture_category)
    {
        $this->validate($request, [
            'picture_category_id' => 'required',
            'picture_name' => 'required',
            'picture_description' => 'required',
            'picture' => 'required|mimes:jpeg,jpg,png|max:10000',
        ]);

        if($r->hasFile('picture')){
            $site_picture = $r->file('picture');
            $filename = time() . '.' . $site_picture->getClientOriginalExtension();
            $destinationPath = public_path().'/uploads/sitepictures/' ;

            $site_picture->move($destinationPath,$filename);
            
        }

        ManagePicture::insert([
            'picture_category_id'=>$request->picture_category_id,
            'picture_name'=>$request->picture_name,
            'picture_description'=>$request->picture_description,
            'picture'=>$filename,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),    
        ]);


        return back();

     }

        
}
