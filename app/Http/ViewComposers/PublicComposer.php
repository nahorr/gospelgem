<?php

namespace App\Http\ViewComposers;
use Illuminate\Http\Request;

use Illuminate\View\View;
use App\Repositories\UserRepository;


use Carbon\Carbon;
use App\PictureCategory;
use App\ManagePicture;
use Image;
use File;
use App\User;
	
Class PublicComposer {	


    public function compose(View $view)
        {
            
        	//initialize number for irregular table numbering
            $number_init = 1686;

            //get current date
            $today = Carbon::today();

            $site_pictures = ManagePicture::get();
            $users = User::get();

            
            //put variables in views
            $view
            ->with('number_init', $number_init )
            ->with('today', $today)
            ->with('site_pictures', $site_pictures)
            ->with('users', $users);

            

        }

}
