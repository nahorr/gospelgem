<?php

namespace App\Http\Controllers\GForum;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
use Image;

class GForumController extends Controller
{
    public function viewPosts()
    {
    	$posts = Post::orderBy('created_at', 'desc')->get();

        $categories = Category::get();

    	return view('private-views.gforum.viewposts', compact('posts', 'categories'));
    }

    public function addPost()
    {
    	$categories = Category::get();

        return view('private-views.gforum.addpost', compact('categories'));
    }

    public function storeAddPost(Request $request) 
    {
        $this->validate(request(), [

            'category_id' => 'required',
            'post_title' => 'required',
            'post_body' => 'required',
        ]);

        Post::insert([
                    'user_id'=>$request->user_id,
                    'category_id'=>$request->category_id,
                    'post_title'=>$request->post_title,
                    'post_body'=>$request->post_body,
                    'show_profile_picture' => $request->show_profile_picture,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
       
        
        return redirect()->route('gforum');
	}

    public function editPost(Post $post)
    {
        return view('private-views.gforum.editpost', compact('post'));
    }

    public function storeEditPost(UploadRequest $request, Post $post)
    {
        $this->validate(request(), [

            'post_title' => 'required',
            'post_body' => 'required',
        ]);
              
        //$post_body=$request->input('post_body');
        //$dom = new \DomDocument();
        //$dom->loadHtml($post_body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        //$post_body = $dom->saveHTML();


        $post_edit = Post::where('id', '=', $post->id)->first();
        
        $post_edit->post_title= $request->post_title;
        $post_edit->post_body= $request->post_body;
        $post_edit->show_profile_picture= $request->show_profile_picture;
        $post_edit->updated_at= date('Y-m-d H:i:s');
        $post_edit->save();

        
        flash('Post Updated Successfully')->success();

        return redirect()->route('viewpostpublic', [$post->id]);

    }

    public function deletePost(Post $post)
    {
        Post::where('id', $post->id)->delete();

        flash('Post has been deleted')->error();

        return redirect()->route('gforum');
    }
}
