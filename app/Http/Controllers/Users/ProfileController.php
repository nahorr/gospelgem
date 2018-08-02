<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Auth;
use Image;
use File;
use App\UserDetail;


class ProfileController extends Controller
{
    public function profile()
    {

    	
    	return view('private-views.users.profile');
    }

    public function updateAvatar(Request $request)
    {

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

     public function updateProfile(Request $r)
         {

            if (UserDetail::where('user_id', Auth::user()->id)->first() == null) {
                
                UserDetail::insert([

                 'user_id'=>Auth::user()->id,
                 'gender'=>$r->gender,
                 'dob'=>$r->dob,
                 'city'=>$r->city,
                 'country'=>$r->country,
                 'phone'=>$r->phone,
                 'about_me'=>$r->about_me,
                 'created_at' => date('Y-m-d H:i:s'),
                 'updated_at' => date('Y-m-d H:i:s'),
      
             ]);

            }else{

                $user_details = UserDetail::where('user_id', Auth::user()->id)->first();

                $user_details->gender = $r->gender;
                $user_details->dob = $r->dob;
                $user_details->city = $r->city;
                $user_details->country = $r->country;
                $user_details->phone = $r->phone;
                $user_details->about_me = $r->about_me;
                $user_details->updated_at = date('Y-m-d H:i:s');

                $user_details->save();
            }
             

            
             flash('Your profile was updated Successfully')->success();

             return back();
         }

   
}
