<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
    	$users = User::orderBy('created_at', 'desc')->get();

    	return view('admin.home', compact('users'));
    }
}
