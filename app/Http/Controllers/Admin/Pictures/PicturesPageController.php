<?php

namespace App\Http\Controllers\Admin\Pictures;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Picture;
use File;
use Image;

class PicturesPageController extends Controller
{
    public function picturesPage()
    {
    	$pictures = Picture::get();
    	return view('admin/pictures_page/pictures', compact('pictures'));
    }

    public function addPictures(Request $request)
    {

        $this->validate($request, [

                'title' => 'required',
                'description' => 'required',
                'filename' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'

        ]);

        
        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=time().'_'.$image->getClientOriginalName();
                Image::make($image)->fit(800)->save( public_path('/uploads/pagepictures/' . $name ) );  
                $data[] = $name;  
            }
         }
         
         $picture= new Picture();
         $picture->title=$request->title;
         $picture->description=$request->description;
         $picture->filename=json_encode($data);
         
        $picture->save();

        flash('Picture(s) Added successfully!')->success();

        return back();
    }

    public function editPictures(Request $request, Picture $picture)
    {
        $this->validate($request, [

                'title' => 'required',
                'description' => 'required',
                //'filename' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'

        ]); 
        
        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=time().'_'.$image->getClientOriginalName();
                Image::make($image)->fit(800)->save( public_path('/uploads/pagepictures/' . $name ) );
                $data[] = $name;  
            }
         }

         $edit_picture=Picture::where('id', $picture->id)->first();
         $edit_picture->title=$request->title;
         $edit_picture->description=$request->description;
         if ($request->file('filename')) {
             $edit_picture->filename=json_encode(array_merge($data, json_decode($edit_picture->filename)));
         } 

        $edit_picture->save();

        flash('Picture Edited successfully!')->success();

        return back();
    }

    public function deletePictures(Picture $picture)
    {
        $pic = Picture::where('id', $picture->id)->first();
        // Remove current image from server
        for ($i = 0; $i < count(json_decode($pic->filename)); $i++){

            $file = public_path('/uploads/pagepictures/'.json_decode($pic->filename)[$i]);

            if (File::exists($file)) {
                unlink($file);
            }
        }
        

        Picture::where('id', $picture->id)->delete();
        flash('Picture(s) Deleted')->warning();

        return back();
    }

    public function deletePic(Request $request, Picture $picture)
    {
        $this->validate($request, [

            'filename' => 'required',
               
        ]);  

        $delete_picture=Picture::where('id', $picture->id)->first();

        // Remove current image from server
        for ($i = 0; $i < count(json_decode($delete_picture->filename)); $i++){

            $file = public_path('/uploads/pagepictures/'.json_decode($delete_picture->filename)[$i]);

            if ($request->filename ==  json_decode($delete_picture->filename)[$i] && File::exists($file)) {
                $data = json_decode($delete_picture->filename);
                unset($data[$i]);
                unlink($file);
            }
        }
       
        $delete_picture->filename=json_encode(array_values($data));
        $delete_picture->save();

        flash('Picture Deleted successfully!')->success();

        return back();
    }
}
