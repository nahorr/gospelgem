<?php

namespace App\Http\Controllers\GForum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GForumController extends Controller
{
    public function viewPosts()
    {
    	return view('private-views.gforum.viewposts');
    }

    public function addPost()
    {
    	return view('private-views.gforum.addpost');
    }

    public function storeAddPost(request $request) {

    	$this->validate(request(), [

            'post_title' => 'required',
            'post_body' => 'required',
            'post_images' => 'mimes:jpg,jpeg,bmp,png|max:10000',
            
        ]);


	    $input=$request->all();
	    $images=array();
	    if($files=$request->file('post_images')){
	        foreach($files as $file){
	            $name=$file->getClientOriginalName();
	            $file->move('image',$name);
	            $images[]=$name;
	        }
	    }
	    /*Insert your data*/

	    Post::insert([

            'post_title'=>$request->tip_title,
            'post_body'=>$tip_body,
            'post_images'=>implode("|",$images),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);


	   	flash('Post Added Successfully')->success();

        return redirect()->route('viewPosts');
	}
}
