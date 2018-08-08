<?php

namespace App\Http\Controllers\GForum;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\Http\Controllers\Controller;
use App\PostsImage;
use App\Post;
use Image;

class GForumController extends Controller
{
    public function viewPosts()
    {
    	$posts = Post::orderBy('created_at', 'desc')->get();

    	$posts_images = PostsImage::get();

    	return view('private-views.gforum.viewposts', compact('posts', 'posts_images'));
    }

    public function addPost()
    {
    	return view('private-views.gforum.addpost');
    }

    public function storeAddPost(UploadRequest $request) 
    {

        $post_body=$request->input('post_body');
        $dom = new \DomDocument();
        $dom->loadHtml($post_body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $post_body = $dom->saveHTML();

        $post = Post::create([
                    'user_id'=>$request->user_id,
                    'post_title'=>$request->post_title,
                    'post_body'=>$post_body,
                    'show_profile_picture' => $request->show_profile_picture,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);

        //dd($post);

        if($request->photos != null){   

            foreach ($request->photos as $photo) {

                                       
                $filename = time() . '.' . $photo->getClientOriginalExtension();
                Image::make($photo)->crop(740, 380)->save( public_path('/posts/images/' . $filename ) );


                PostsImage::create([
                    'post_id' => $post->id,
                    'filename' => $filename
                ]);
            }
        }else{

            PostsImage::create([
                    'post_id' => $post->id,
                    'filename' => 'default_post_image.jpg'
                ]);

        } 

        
        

        return redirect()->route('viewPosts');
	}

    public function editPost(Post $post)
    {
        return view('private-views.gforum.editpost');
    }

    public function storeEditPost(UploadRequest $request, Post $post)
    {
        
              
        $post_body=$request->input('post_body');
        $dom = new \DomDocument();
        $dom->loadHtml($post_body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $post_body = $dom->saveHTML();

        if($request->photos != null){   

            foreach ($request->photos as $photo) {

                                       
                $filename = time() . '.' . $photo->getClientOriginalExtension();
                Image::make($photo)->crop(740, 380)->save( public_path('/posts/images/' . $filename ) );


                PostsImage::create([
                    'post_id' => $post->id,
                    'filename' => $filename
                ]);
            }
        }else{

            PostsImage::create([
                    'post_id' => $post->id,
                    'filename' => 'default_post_image.jpg'
                ]);

        } 

        $post_edit = Post::where('id', '=', $post->id)->first();
        
        $post_edit->post_title= $request->post_title;
        $post_edit->post_body= $post_body;
        $post_edit->show_profile_picture= $request->show_profile_picture;
        $post_edit->updated_at= date('Y-m-d H:i:s');
        $post_edit->save();

        
        flash('Post Updated Successfully')->success();

        return redirect()->route('viewPosts');

    }

    public function deletePost(Post $post)
    {
        Post::destroy($post);

        flash('Post has been deleted')->error();

        return back();
    }
}
