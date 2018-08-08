<?php

namespace App\Http\Controllers\HomePublic\GForum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Category;
use App\Post;
use App\User;

class GForumController extends Controller
{
    public function index()
    {

    	$posts = Post::orderBy('created_at', 'desc')->get();

    	$users = User::get();

    	return view('public-views.gforum.gforum', compact('posts', 'users'));
    }

    public function viewPost(Post $post)
    {

    	$posts = Post::orderBy('created_at', 'desc')->get();


    	$users = User::get();

        $comments = Comment::where('post_id', $post->id)->get();

        $categories = Category::get();


    	return view('public-views.gforum.viewpost', compact('post', 'posts', 'users', 'comments', 'categories'));
    }

    public function countPostViews(Request $request, Post $post)
    {

         
         $post = Post::where('id', '=', $post->id)->first();
         
         $post->post_views = $request->post_views;
            
         $post->save();

         return redirect()->route('viewpostpublic', [$post->id]);


        
    }
}
