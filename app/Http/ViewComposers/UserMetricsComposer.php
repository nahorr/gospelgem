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
            
            //put variables in views
            $view
            ->with('number_init', $number_init )
            ->with('today', $today )
            ->with('user_details', $user_details)
            ->with('categories', $categories)
            ->with('comments', $comments);

            

        }

}
