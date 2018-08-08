<?php

namespace App\Http\Controllers\GForum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Post;
use Auth;
use App\User;

class CommentController extends Controller
{
    public function viewComments()
    {
    	
    	return view('private-views.gforum.comments.viewcomments');
    }

    public function leaveComment(Post $post, User $user)
    {

        return view('private-views.gforum.comments.leavecomment', compact('post', 'user'));
    }

    public function storeLeaveComment(Request $request, Post $post) 
    {
        $this->validate(request(), [

            'post_comment' => 'required',
        ]);


        $post_comment=$request->input('post_comment');
        $dom = new \DomDocument();
        $dom->loadHtml($post_comment, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $post_comment = $dom->saveHTML();

        Comment::insert([
                    'user_id'=>Auth::user()->id,
                    'post_id'=>$post->id,
                    'post_comment'=>$post_comment,
                    'show_profile_picture' => $request->show_profile_picture,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
       
        

        return redirect()->route('viewcomments');
	}

    public function editPost(Post $post)
    {
        return view('private-views.gforum.editpost', compact('post'));
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

    public function deletePost($post)
    {
        Post::destroy($post);

        flash('Post has been deleted')->error();

        return back();
    }
}
