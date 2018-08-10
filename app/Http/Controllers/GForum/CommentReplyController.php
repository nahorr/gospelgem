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


        $reply_comment=$request->input('comment_reply');
        $dom = new \DomDocument();
        $dom->loadHtml($reply_comment, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $reply_comment = $dom->saveHTML();

        CommentReply::insert([
                    'user_id'=>Auth::user()->id,
                    'comment_id'=>$comment->id,
                    'comment_reply'=>$reply_comment,
                    'show_profile_picture' => $request->show_profile_picture,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
       
        

        return redirect()->route('viewpostpublic', [$comment->post_id]);
	}
}
