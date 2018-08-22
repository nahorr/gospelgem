<?php

namespace App\Http\ViewComposers;
use Illuminate\Http\Request;

use Illuminate\View\View;
use App\Repositories\UserRepository;


use Carbon\Carbon;
use App\UserDetail;
use App\Comment;
use App\Category;
use App\User;
use App\Post;
use App\CommentReply;
use Auth;
	
Class UserMetricsComposer {	


    public function compose(View $view)
        {
            
        	//initialize number for irregular table numbering
            $number_init = 1;

            //get current date
            $today = Carbon::today();

            $user_details = UserDetail::where('user_id', Auth::user()->id)->first();

            $categories = Category::get();

            $comments = Comment::orderBy('created_at', 'desc')->get();

            $user_posts = Post::where('user_id', Auth::user()->id)->orderBy('updated_at', 'desc')->get();
            $user_comments = Comment::where('user_id', Auth::user()->id)->get();
            $user_replies = CommentReply::where('user_id', Auth::user()->id)->get();
            
            //put variables in views
            $view
            ->with('number_init', $number_init )
            ->with('today', $today )
            ->with('user_details', $user_details)
            ->with('categories', $categories)
            ->with('comments', $comments)
            ->with('user_posts', $user_posts)
            ->with('user_comments', $user_comments)
            ->with('user_replies', $user_replies);

            

        }

}
