<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\UserDetail;

class HomeController extends Controller
{
    public function index()
    {

    	return view('admin.home');
    }
}
