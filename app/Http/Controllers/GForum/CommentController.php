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

        return view('private-views.gforum.comments.leaveCommentModal', compact('post', 'user'));
    }

    public function storeLeaveComment(Request $request, Post $post) 
    {
        $this->validate(request(), [

            'post_comment' => 'required',
        ]);


        //$post_comment=$request->input('post_comment');
        //$dom = new \DomDocument();
        //$dom->loadHtml($post_comment, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        //$post_comment = $dom->saveHTML();

        Comment::insert([
                    'user_id'=>Auth::user()->id,
                    'post_id'=>$post->id,
                    'post_comment'=>$request->post_comment,
                    'show_profile_picture' => $request->show_profile_picture,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
       
        

        return redirect()->route('viewpostpublic', [$post->id]);
	}

    public function editComment(Comment $comment)
    {
        return view('private-views.gforum.comments.editcomment', compact('comment'));
    }

    public function storeEditComment(Request $request, Comment $comment)
    {
        
        $this->validate(request(), [

            'post_comment' => 'required',
        ]);    
        //$post_comment=$request->input('post_comment');
        //$dom = new \DomDocument();
        //$dom->loadHtml($post_comment, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        //$post_comment = $dom->saveHTML();

        
        $comment_edit = Comment::where('id', '=', $comment->id)->first();
    
        $comment_edit->post_comment= $request->post_comment;
        $comment_edit->updated_at= date('Y-m-d H:i:s');
        $comment_edit->save();

        
        flash('Comment Updated Successfully')->success();

        return redirect()->route('viewpostpublic', [$comment->post_id]);

    }

    public function deleteComment(Comment $comment)
    {
        Comment::where('id', $comment->id)->delete();

        flash('Comment has been deleted')->error();

        return back();
    }
}
