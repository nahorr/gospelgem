<?php

namespace App\Http\Controllers\HomePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	return view('public-views.welcome');
    }
    public function about()
    {
    	return view('public-views.about');
    }
    public function competition()
    {
    	return view('public-views.competition');
    }
    public function mentorship()
    {
    	return view('public-views.mentorship');
    }
    public function contact()
    {
    	return view('public-views.contact');
    }

    public function comingSoon()
    {
        return view('public-views.coming-soon');
    }
}
