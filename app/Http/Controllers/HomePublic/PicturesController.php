<?php

namespace App\Http\Controllers\HomePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Picture;

class PicturesController extends Controller
{
    public function showPictures()
    {
    	$pictures = Picture::get();

    	$simple_peg_pictures = Picture::Paginate(1);

    	return view('public-views.pictures_page.showpictures', compact('pictures', 'simple_peg_pictures'));
    }

    public function loadMorePictures(Request $request)
    {
    	$output = '';
        $id = $request->id;

        $simple_peg_pictures = Picture::where('id','>',$id)->orderBy('created_at','DESC')->limit(2)->get();

        if ( ! $events->isEmpty() )
        {
            foreach($simple_peg_pictures as $pic){
            	for ($i = 0; $i < count(json_decode($pic->filename)); $i++) { 
            		$output .= '
            		<div class="cbp-item g-width-280 g-width-170--md">
                 
	                  <a class="cbp-caption cbp-lightbox info-v3-2 d-block g-parent g-mb-20" 
	                  href="{{URL::asset('/uploads/pagepictures/'. json_decode($pic->filename)[$i] )}}"
	                     data-title="{{$pic->description}}">
	                  
	                    <div class="cbp-caption-defaultWrap g-overflow-hidden">
	                      <img class="g-transform-scale-1_2--parent-hover g-transition-0_2 g-transition--ease-in" src="{{URL::asset('/uploads/pagepictures/'. json_decode($pic->filename)[$i] )}}" alt="{{json_decode($pic->filename)[$i]}}">
	                    </div>

	                    <div class="cbp-caption-activeWrap g-theme-bg-blue-dark-v1-opacity-0_6">
	                      <div class="cbp-l-caption-alignCenter g-pa-15">
	                        <div class="cbp-l-caption-body g-brd-around g-brd-white-opacity-0_2">
	                          <strong class="text-uppercase g-absolute-centered g-letter-spacing-0_5 g-font-weight-700 g-font-size-11 g-color-white">View photos</strong>
	                        </div>
	                      </div>
	                    </div>
	                  </a>
	                  
	                  <h4 class="text-uppercase g-font-weight-700 g-font-size-11">{{$pic->title}}
	                    <span class="g-theme-color-gray-light-v2">({{count(json_decode($pic->filename))}} photos)</span></h4>
	                </div>
	                <hr>';
            	}
                
            }

            $output .= '<div id="remove-row">
                            <button id="btn-more" data-id="'.$pic->id.'" class="nounderline btn-block mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" > Load More Events</button>
                        </div>';

            echo $output;
        }
    }
}
