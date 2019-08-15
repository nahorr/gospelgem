<?php

namespace App\Http\Controllers\HomePublic\Groups;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupsController extends Controller
{
    public function show()
    {
    	return view('public-views.groups.show');
    }
}
