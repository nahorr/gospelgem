<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Auth;
use Image;
use File;


class ProfileController extends Controller
{
    public function profile(){

    	$user = Auth::user();

    	return view('private-views.users.profile', compact('user'));
    }

    public function updateAvatar(Request $request){

        	// Handle the user upload of avatar
        	if($request->hasFile('avatar')){
        		$avatar = $request->file('avatar');
        		$filename = time() . '.' . $avatar->getClientOriginalExtension();
        		// Delete current image before uploading new image
        		if (Auth::user()->avatar !== 'default.jpg') {
        		     $file = public_path('/uploads/avatars/' . Auth::user()->avatar);

        		    if (File::exists($file)) {
        		        unlink($file);
        		    }

        		}

        		Image::make($avatar)->resize(200, 200)->save( public_path('/uploads/avatars/' . $filename ) );

        		$user = Auth::user();
        		$user->avatar = $filename;
        		$user->save();
        	}

        	return back();

     }
   
}
