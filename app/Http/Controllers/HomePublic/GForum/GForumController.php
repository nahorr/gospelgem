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

    	$posts = Post::where('approved', 1)->orderBy('created_at', 'desc')->paginate(20);

    	$users = User::get();

        $comments = Comment::get();

        $categories = Category::get();
       

    	return view('public-views.gforum.gforum', compact('posts', 'users', 'comments', 'categories'));
    }

    public function category(Category $category)
    {
        $users = User::get();

        $comments = Comment::get();

        $categories = Category::get();

        $posts_category = Post::where('category_id', $category->id)->orderBy('created_at', 'desc')->paginate(20);

        return view('public-views.gforum.category', compact('posts', 'users', 'comments', 'categories','category', 'posts_category'));
    }

    public function userPosts(User $user)
    {
        $users = User::get();

        $comments = Comment::get();

        $categories = Category::get();

        $user_posts = Post::where('user_id', $user->id)->orderBy('created_at', 'desc')->paginate(20);

        return view('public-views.gforum.userposts', compact('user', 'posts', 'users', 'comments', 'categories','category', 'user_posts'));
    }

    public function viewPost(Post $post)
    {

    	$posts = Post::orderBy('created_at', 'desc')->get();


    	$users = User::get();

        $comments = Comment::where('post_id', $post->id)->where('approved', 1)->get();

        $categories = Category::get();

        $comment_replies = CommentReply::where('approved', 1)->get();


    	return view('public-views.gforum.viewpost', compact('post', 'posts', 'users', 'comments', 'categories', 'comment_replies'));
    }

    public function countPostViews(Request $request, Post $post)
    {

         
         $post = Post::where('id', '=', $post->id)->first();
         
         $post->post_views = $request->post_views;
            
         $post->save();

         return redirect()->route('viewpostpublic', [$post->id]);


        
    }

    public function countPostLikes(Request $request, Post $post)
    {
 
         $post = Post::where('id', '=', $post->id)->first();
         
         $post->post_likes = $request->post_likes;
            
         $post->save();

         return back();

        
    }

    public function countCommentLikes(Request $request, Comment $comment)
    {
 
         //$post = Post::where('id', '=', $post->id)->first();

         $comment = Comment::where('id', '=', $comment->id)->first();
         
         $comment->comment_likes = $request->comment_likes;
            
         $comment->save();

         return back();

        
    }

     public function countCommentReplyLikes(Request $request, CommentReply $reply)
    {
 
         $reply = CommentReply::where('id', '=', $reply->id)->first();

                 
         $reply->comment_reply_likes = $request->comment_reply_likes;
            
         $reply->save();

         return back();

        
    }
}
