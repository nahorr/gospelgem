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

    public function deleteUser(User $user)

    {
    	User::where('id', $user->id)->delete();

    	return back();
    }
}
