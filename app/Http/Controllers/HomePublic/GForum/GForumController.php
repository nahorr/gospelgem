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
}
