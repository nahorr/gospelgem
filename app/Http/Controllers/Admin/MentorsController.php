<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mentor;
use File;

class MentorsController extends Controller
{
    public function allMentors()
    {
    	$mentors = Mentor::get();

    	return view('admin.mentors.all-mentors', compact('mentors'));
    }

     public function addMentor(Request $request){

     	$this->validate(request(), [
             'full_name' => 'required',
         ]);

         if($request->hasFile('picture')){
             $mentor_picture = $request->file('picture');
             $filename = $request->full_name . '.' . $mentor_picture->getClientOriginalExtension();
             $destinationPath = public_path().'/unify/assets/img/mentors/';
             $mentor_picture->move($destinationPath,$filename);
             
         }

         Mentor::insert([
             'full_name' => $request->full_name,
             'email' => $request->email,
             'about' => $request->about,
             'picture' => $filename,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
         ]);
        
         flash('Mentor Added!')->success();
         return back();
    }

    public function editMentor(Request $request, Mentor $mentor)
    {
       $this->validate(request(), [
             'full_name' => 'required',
         ]);

        
        $edit_mentor = Mentor::where('id', $mentor->id)->first();

        $edit_mentor->full_name = $request->full_name;
        $edit_mentor->email = $request->email;
        $edit_mentor->about = $request->about;

        if($request->hasFile('picture')){
            $mentor_picture = $request->file('picture');
            $filename = $request->full_name . '.' . $mentor_picture->getClientOriginalExtension();
            $destinationPath = public_path().'/unify/assets/img/mentors/' ;

            // Delete current image before uploading new image
            $file = public_path('/unify/assets/img/mentor/'.$filename);
            if (File::exists($file)) {
                    unlink($file);
                }

            $mentor_picture->move($destinationPath,$filename);
            $edit_mentor->picture = $filename;
            
        }

        $edit_mentor->save();

        return back();

     }

    public function deleteMentor(Mentor $mentor)
    {
    	Mentor::where('id', $mentor->id)->delete();
    	flash('Mentor deleted!')->warning();
        return back();
    }
}
