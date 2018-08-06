<?php

namespace App\Http\Controllers\GForum;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\Http\Controllers\Controller;
use App\PostsImage;
use App\Post;

class GForumController extends Controller
{
    public function viewPosts()
    {
    	$posts = Post::orderBy('created_at', 'desc')->get();

    	$posts_images = PostsImage::get();

    	return view('private-views.gforum.viewposts', compact('posts', 'posts_images'));
    }

    public function addPost()
    {
    	return view('private-views.gforum.addpost');
    }

    public function storeAddPost(UploadRequest $request) {


        $post = Post::create($request->all());

        foreach ($request->photos as $photo) {

            $filename = $photo->store('photos');

            PostsImage::create([
                'post_id' => $post->id,
                'filename' => $filename
            ]);
        }

        return redirect()->route('viewPosts');
	}
}
