<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\UserDetail;
use App\Category;
use App\Comment;
use App\Post;

class CommentController extends Controller
{
    public function comments()
    {

        return view('admin.comments');
    }

    public function approveComment(Request $request, Comment $comment)
    {
        $approve_comment = Comment::where('id', $comment->id)->first();

        $approve_comment->approved = $request->approved;

        $approve_comment->save();

        return back();
    }

    public function rejectComment(Request $request, Comment $comment)
    {
        $reject_comment = Comment::where('id', $comment->id)->first();

        $reject_comment->approved = $request->approved;

        $reject_comment->save();

        return back();
    }

    public function deleteComment(Comment $comment)

    {
        Comment::where('id', $comment->id)->delete();

        return back();
    }
}
