<?php

namespace App\Http\Controllers\HomePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\CourseRegistration;
use Notification;
use App\Traits\CaptchaTrait;
use App\Notifications\CourseRegistrationFormSubmitted;
use App\User;



class CoursesController extends Controller
{
    use CaptchaTrait;

    public function showCourses()
    {
    	$courses = Course::orderBy('start_date', 'asc')->get();

        $course_registrations = CourseRegistration::get();
        
    	return view('public-views.courses.showcourses', compact('courses', 'course_registrations'));
    }

    public function showCourseDetails(Course $course)
    {
        $student_course_registration = CourseRegistration::where('course_id', $course->id)->where('email', \Auth::user()->email)->first();

    	return view('public-views.courses.showcoursedetails', compact('course', 'student_course_registration'));
    }

    public function register(Course $course)
    {
    	
    	return view('public-views.courses.register', compact('course'));

    }

    public function storeRegistration(Request $request , Course $course){

        $user_geolaction_info = geoip()->getLocation();

        $request['captcha'] = $this->captchaCheck();

    	$this->validate(request(), [

            'course_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique_with:course_registrations, course_id',
            'agree' => 'required',
            'g-recaptcha-response' => 'required',
            'captcha' => 'required|min:1',
            ],
            [
             'g-recaptcha-response.required' => 'Captcha is required',
             'captcha.min' => 'Wrong captcha, please try again.',
             'email.unique_with' => 'Our records show you have already registered for this course. Please do contact us if you have any questions.'
            ]);

        CourseRegistration::insert([
            'course_id' => $request->course_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'agree' => $request->agree,
            'city' => $user_geolaction_info->city,
            'country' => $user_geolaction_info->country,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $course_info = Course::where('id', $request->course_id)->first();

        $student = CourseRegistration::where('email', $request->email)->first();
        

        $student->notify(new CourseRegistrationFormSubmitted($course_info));

        flash('Registration Successful!')->success();

        return redirect()->route('registrations');
   }
}
