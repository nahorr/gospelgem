<?php

namespace App\Http\ViewComposers;
use Illuminate\Http\Request;

use Illuminate\View\View;
use App\Repositories\UserRepository;

use App\UserDetail;
use Carbon\Carbon;
use App\ContactUs;
use App\User;
use Auth;
	
Class AdminMetricsComposer {	


    public function compose(View $view)
        {
            
        	//initialize number for irregular table numbering
            $number_init = 1;

            //get current date
            $today = Carbon::today();

            $users = User::orderBy('created_at', 'desc')->get();

            $contactFormSubmissions = ContactUs::orderBy('created_at', 'desc')->get();
            
            //put variables in views
            $view
            ->with('number_init', $number_init )
            ->with('today', $today )
            ->with('users', $users)
            ->with('contactFormSubmissions', $contactFormSubmissions);

            

        }

}