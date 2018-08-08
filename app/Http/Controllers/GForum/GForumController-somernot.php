<?php

namespace App\Http\Controllers\GForum;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\Http\Controllers\Controller;
use App\PostsImage;
use App\Post;
use Image;

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

        
        $detail=$request->summernoteInput;
 
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
 
        $images = $dom->getelementsbytagname('img');
 
        foreach($images as $k => $img){
            $data = $img->getattribute('src');
 
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
 
            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'/'. $image_name;
 
            file_put_contents($path, $data);
 
            $img->removeattribute('src');
            $img->setattribute('src', $image_name);
        }
 
        $detail = $dom->savehtml();
        $summernote = new Summernote;
        $summernote->content = $detail;
        $summernote->save();
        return view('summernote_display',compact('summernote'));



        $post_body=$request->input('post_body');
        $dom = new \DomDocument();
        $dom->loadHtml($post_body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $post_body = $dom->saveHTML();

        $post = Post::create($request->all());

        if($request->photos != null){   

            foreach ($request->photos as $photo) {

                //$filename = $photo->store('photos');

                               
                $filename = time() . '.' . $photo->getClientOriginalExtension();
                Image::make($photo)->crop(740, 380)->save( public_path('/posts/images/' . $filename ) );

                //$destinationPath = public_path().'/posts/images/' ;
                //$photo->move($destinationPath,$filename);

                PostsImage::create([
                    'post_id' => $post->id,
                    'filename' => $filename
                ]);
            }
        }else{

            PostsImage::create([
                    'post_id' => $post->id,
                    'filename' => 'default_post_image.jpg'
                ]);

        } 

        


        return redirect()->route('viewPosts');
	}
}
