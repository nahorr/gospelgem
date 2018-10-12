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
	
Class PublicComposer {	


    public function compose(View $view)
        {
            
        	//initialize number for irregular table numbering
            $number_init = 1;

            //get current date
            $today = Carbon::today();

            $slider1= ManagePicture::where('picture_name', 'slider_1')->first();
            //dd($slider1);

            
            //put variables in views
            $view
            ->with('number_init', $number_init )
            ->with('today', $today)
            ->with('slider1', $slider1);

            

        }

}
