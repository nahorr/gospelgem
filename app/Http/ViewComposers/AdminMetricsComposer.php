<?php

namespace App\Http\ViewComposers;
use Illuminate\Http\Request;

use Illuminate\View\View;
use App\Repositories\UserRepository;

use App\CommentReply;
use App\UserDetail;
use Carbon\Carbon;
use App\ContactUs;
use App\Category;
use App\Comment;
use App\User;
use App\Post;
use Auth;
	
Class AdminMetricsComposer {	


    public function compose(View $view)
        {
            
        	//initialize number for irregular table numbering
            $number_init = 1;

            //get current date
            $today = Carbon::today();

            $users = User::orderBy('created_at', 'desc')->get();
            $categories = Category::orderBy('created_at', 'desc')->get();
            $posts = Post::orderBy('created_at', 'desc')->get();
            $comments = Comment::orderBy('created_at', 'desc')->get();
            $replies = CommentReply::orderBy('created_at', 'desc')->get();

            $contactFormSubmissions = ContactUs::orderBy('created_at', 'desc')->get();
            
            //put variables in views
            $view
            ->with('number_init', $number_init )
            ->with('today', $today )
            ->with('users', $users)
            ->with('categories', $categories)
            ->with('posts', $posts)
            ->with('comments', $comments)
            ->with('replies', $replies)
            ->with('contactFormSubmissions', $contactFormSubmissions);

            

        }

}
