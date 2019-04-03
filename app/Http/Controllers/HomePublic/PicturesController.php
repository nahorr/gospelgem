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
}
