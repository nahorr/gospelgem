<?php

namespace App\Http\Controllers\HomePublic\GForum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GForumController extends Controller
{
    public function index()
    {
    	return view('public-views.gforum.gforum');
    }
}
