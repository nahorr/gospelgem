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

    public function makeAdmin(Request $request, User $user)
    {
    	$make_admin = User::where('id', $user->id)->first();

    	$make_admin->is_admin = $request->is_admin;

    	$make_admin->save();

    	return back();
    }

    public function makeUser(Request $request, User $user)
    {
    	$make_user = User::where('id', $user->id)->first();

    	$make_user->is_admin = $request->is_admin;

    	$make_user->save();

    	return back();
    }
}
