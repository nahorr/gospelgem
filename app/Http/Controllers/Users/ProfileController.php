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

    	$user = Auth::user();

        $user_details = UserDetail::where('user_id', $user->id)->first();

    	return view('private-views.users.profile', compact('user', 'user_details'));
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

             
             $this->validate(request(), [

                 'student_number' => 'required|unique:students',
                 'registration_code' => 'required|unique:students',
                 'first_name' => 'required',
                 'last_name' => 'required',
                 'gender' => 'required',
                 'dob' => 'required',
                 'email' => 'required',
                 ]);

             Person::insert([

                 'student_number'=>$r->student_number,
                 'registration_code'=>$r->registration_code,
                 'first_name'=>$r->first_name,
                 'last_name'=>$r->last_name,
                 'gender'=>$r->gender,
                 'dob'=>$r->dob,
                 'date_enrolled'=>$r->date_enrolled,
                 'date_graduated'=>$r->date_graduated,
                 'date_unenrolled'=>$r->date_unenrolled,
                 'nationality'=>$r->nationality,
                 'national_card_number'=>$r->national_card_number,
                 'passport_number'=>$r->passport_number,
                 'phone'=>$r->phone,
                 'email'=>$r->email,
                 'state'=>$r->state,
                 'current_address'=>$r->current_address,
                 'created_at' => date('Y-m-d H:i:s'),
                 'updated_at' => date('Y-m-d H:i:s'),
      
             ]);

            
             flash('Your profile was updated Successfully')->success();

             return back();
         }

   
}
