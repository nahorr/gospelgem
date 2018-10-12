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
    	$site_pictures = ManagePicture::where('picture_category_id', $picture_category->id)->get();
        
    	return view('admin/pictures/showpictures', compact('picture_category', 'site_pictures'));
    }

    public function storeNewPicture(Request $request, PictureCategory $picture_category)
    {
       
       if ($picture_category->pic_category_name == 'Slider') {

            $this->validate($request, [
                'picture_category_id' => 'required',
                'picture_name' => 'required',
                'picture_title_left' => 'required',
                'picture_title_right' => 'required',
                'picture_description_left' => 'required',
                'picture_description_right' => 'required',
                'picture' => 'required|mimes:jpeg,jpg,png|max:10000',
            ]);

        } else {
           $this->validate($request, [
                'picture_category_id' => 'required',
                'picture_name' => 'required',
                'picture_title' => 'required',
                'picture_description' => 'required',
                'picture_link' => 'required',
                'picture' => 'required|mimes:jpeg,jpg,png|max:10000',
            ]);
        }
         
        

        if($request->hasFile('picture')){
            $site_picture = $request->file('picture');
            //$filename = time() . '.' . $site_picture->getClientOriginalExtension();
            $filename = $request->picture_name . '.' . $site_picture->getClientOriginalExtension();
            $destinationPath = public_path().'/unify/assets/img/pictures/' ;

            $site_picture->move($destinationPath,$filename);
            
        }

        ManagePicture::insert([
            'picture_category_id'=>$request->picture_category_id,
            'picture_name'=>$request->picture_name, 
            'picture_title'=>$request->picture_title,
            'picture_description'=>$request->picture_description,
            'picture_title_left'=>$request->picture_title_left,
            'picture_title_right'=>$request->picture_title_right,
            'picture_description_left'=>$request->picture_description_left,
            'picture_description_right'=>$request->picture_description_left,
            'picture_link'=>$request->picture_link,
            'picture'=>$filename,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),    
        ]);


        return back();

     }

     public function storeEditPicture(Request $request, ManagePicture $picture)
    {
        
        if ($picture->picture_category->pic_category_name == 'Slider') {

            $this->validate($request, [
                'picture_category_id' => 'required',
                'picture_name' => 'required',
                'picture_title_left' => 'required',
                'picture_title_right' => 'required',
                'picture_description_left' => 'required',
                'picture_description_right' => 'required',
                'picture' => 'required|mimes:jpeg,jpg,png|max:10000',
            ]);

        } else {
           $this->validate($request, [
                'picture_category_id' => 'required',
                'picture_name' => 'required',
                'picture_title' => 'required',
                'picture_description' => 'required',
                'picture_link' => 'required',
                'picture' => 'required|mimes:jpeg,jpg,png|max:10000',
            ]);
        }
         

        if($request->hasFile('picture')){
            $site_picture = $request->file('picture');
            $filename = $request->picture_name . '.' . $site_picture->getClientOriginalExtension();
            $destinationPath = public_path().'/unify/assets/img/pictures/' ;

            // Delete current image before uploading new image
            $file = public_path('/unify/assets/img/pictures/'.$filename);
            if (File::exists($file)) {
                    unlink($file);
                }

            

            $site_picture->move($destinationPath,$filename);
            
        }

        
        $edit_picture = ManagePicture::where('id', $picture->id)->first();

        $edit_picture->picture_category_id = $request->picture_category_id;
        $edit_picture->picture_name = $request->picture_name;
        $edit_picture->picture_title = $request->picture_title;
        $edit_picture->picture_description = $request->picture_description;
        $edit_picture->picture_title_left = $request->picture_title_left;
        $edit_picture->picture_title_right = $request->picture_title_right;
        $edit_picture->picture_description_left = $request->picture_description_left;
        $edit_picture->picture_description_right = $request->picture_description_right;
        $edit_picture->picture_link = $request->picture_link;
        $edit_picture->picture = $filename;

        $edit_picture->save();


        return back();

     }

    public function deletePicture(ManagePicture $picture)

    {
        ManagePicture::where('id', $picture->id)->delete();

        flash('Picture deleted!')->warning();

        return back();
    }

        
}
