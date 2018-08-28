<?php

namespace App\Http\Controllers\GForum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Post;
use Auth;
use App\User;
use App\CommentReply;

class CommentReplyController extends Controller
{
    public function replyComment(Comment $comment)
    {

        return view('private-views.gforum.comments.replycomment', compact('comment'));
    }

    public function storeReplyComment(Request $request, Comment $comment) 
    {
        $this->validate(request(), [

            'comment_reply' => 'required',
        ]);


        //$reply_comment=$request->input('comment_reply');
        //$dom = new \DomDocument();
        //$dom->loadHtml($reply_comment, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        //$reply_comment = $dom->saveHTML();

        CommentReply::insert([
                    'user_id'=>Auth::user()->id,
                    'comment_id'=>$comment->id,
                    'comment_reply'=>$request->comment_reply,
                    'show_profile_picture' => $request->show_profile_picture,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
       
        

        return redirect()->route('viewpostpublic', [$comment->post_id]);
	}

     public function editReplyComment(CommentReply $reply)
    {
        return view('private-views.gforum.comments.editreplycomment', compact('reply'));
    }

    public function storeEditReplyComment(Request $request, CommentReply $reply)
    {
        
        $this->validate(request(), [

            'comment_reply' => 'required',
        ]);   
        //$comment_reply=$request->input('comment_reply');
        //$dom = new \DomDocument();
        //$dom->loadHtml($comment_reply, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        //$comment_reply = $dom->saveHTML();

        
        $reply_edit = CommentReply::where('id', '=', $reply->id)->first();
    
        $reply_edit->comment_reply= $request->comment_reply;
        $reply_edit->updated_at= date('Y-m-d H:i:s');
        $reply_edit->save();

        
        flash('Reply Updated Successfully')->success();

        return redirect()->route('viewpostpublic', [$reply->comment->post_id]);

    }

    public function deleteReplyComment(CommentReply $reply)
    {
        CommentReply::where('id', $reply->id)->delete();

        flash('Reply has been deleted')->error();

        return back();
    }
}
