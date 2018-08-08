<?php

namespace App\Http\Controllers\HomePublic\GForum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostsImage;
use App\Post;
use App\User;

class GForumController extends Controller
{
    public function index()
    {

    	$posts = Post::orderBy('created_at', 'desc')->get();

    	$posts_images = PostsImage::get();

    	$users = User::get();

    	return view('public-views.gforum.gforum', compact('posts', 'posts_images', 'users'));
    }

    public function viewPost(Post $post, User $user)
    {

    	$posts = Post::orderBy('created_at', 'desc')->get();

    	$posts_images = PostsImage::get();

    	$users = User::get();

    	$post_image = PostsImage::where('post_id', $post->id)->first();

    	//dd($post_image);

    	$post_images = PostsImage::where('post_id', $post->id)->get();

    	return view('public-views.gforum.viewpost', compact('post', 'posts', 'posts_images', 'users', 'user', 'post_image', 'post_images'));
    }
}
