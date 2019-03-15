<?php

namespace App\Http\Controllers\Admin\Pictures;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Picture;
use File;

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
                $name=preg_replace('/\s+/', '', $request->title). '-' .$image->getClientOriginalName();
                $image->move(public_path().'/uploads/pagepictures/', $name);  
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
}