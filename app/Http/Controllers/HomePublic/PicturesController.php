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

    	return view('public-views.pictures_page.showpictures', compact('pictures'));
    }
}
