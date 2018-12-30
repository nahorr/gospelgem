<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\UserDetail;
use Auth;

class CoursesController extends Controller
{
    public function registrations()
    {
  		
        return view('private-views.courses.registrations');
    }
}
