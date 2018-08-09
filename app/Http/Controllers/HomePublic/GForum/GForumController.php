<?php

namespace App\Http\Controllers\HomePublic\GForum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Category;
use App\Post;
use App\User;
use App\CommentReply;

class GForumController extends Controller
{
    public function index()
    {

    	$posts = Post::orderBy('created_at', 'desc')->paginate(3);

    	$users = User::get();

        $comments = Comment::get();

    	return view('public-views.gforum.gforum', compact('posts', 'users', 'comments'));
    }

    public function viewPost(Post $post)
    {

    	$posts = Post::orderBy('created_at', 'desc')->get();


    	$users = User::get();

        $comments = Comment::where('post_id', $post->id)->get();

        $categories = Category::get();

        $comment_replies = CommentReply::get();


    	return view('public-views.gforum.viewpost', compact('post', 'posts', 'users', 'comments', 'categories', 'comment_replies'));
    }

    public function countPostViews(Request $request, Post $post)
    {

         
         $post = Post::where('id', '=', $post->id)->first();
         
         $post->post_views = $request->post_views;
            
         $post->save();

         return redirect()->route('viewpostpublic', [$post->id]);


        
    }

    public function countCommentLikes(Request $request, Comment $comment)
    {
 
         //$post = Post::where('id', '=', $post->id)->first();

         $comment = Comment::where('id', '=', $comment->id)->first();
         
         $comment->comment_likes = $request->comment_likes;
            
         $comment->save();

         return back();

        
    }

     public function countCommentDislikes(Request $request, Comment $comment)
    {
 
         //$post = Post::where('id', '=', $post->id)->first();

         $commentDisLike = Comment::where('id', '=', $comment->id)->first();
         
         $commentDisLike->comment_dislikes = $request->comment_dislikes;
            
         $commentDisLike->save();

         return back();

        
    }
}
