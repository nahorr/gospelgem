<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\UserDetail;
use App\Category;
use App\Comment;
use App\CommentReply;
use App\Post;

class ReplyController extends Controller
{
    public function replies()
    {

        return view('admin.replies');
    }

    public function approveReply(Request $request, CommentReply $reply)
    {
        $approve_reply = CommentReply::where('id', $reply->id)->first();

        $approve_reply->approved = $request->approved;

        $approve_reply->save();

        return back();
    }

    public function rejectReply(Request $request, CommentReply $reply)
    {
        $reject_reply = CommentReply::where('id', $reply->id)->first();

        $reject_reply->approved = $request->approved;

        $reject_reply->save();

        return back();
    }

    public function deleteReply(CommentReply $reply)

    {
        CommentReply::where('id', $reply->id)->delete();

        return back();
    }
}
