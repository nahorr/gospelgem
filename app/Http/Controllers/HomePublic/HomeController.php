<?php

namespace App\Http\Controllers\HomePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Traits\CaptchaTrait;
use App\ContactUs;
use Notification;
use App\Notifications\ContactFormSubmitted;
use App\User;

class HomeController extends Controller
{
    use CaptchaTrait;

    public function index()
    {
    	return view('public-views.welcome');
    }
    public function about()
    {
    	return view('public-views.about');
    }
    public function competition()
    {
    	return view('public-views.competition');
    }
    public function mentorship()
    {
    	return view('public-views.mentorship');
    }
    public function contact()
    {
    	return view('public-views.contact');
    }

    public function postContact(Request $request)
    {
        $request['captcha'] = $this->captchaCheck();

        $this->validate($request, [
        'full_name' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'message_subject' => 'required',
        'message' => 'required',
        'g-recaptcha-response' => 'required',
        'captcha' => 'required|min:1',
        ],
        [
         'g-recaptcha-response.required' => 'Captcha is required',
         'captcha.min' => 'Wrong captcha, please try again.'
        ]);

        $contact_us = ContactUs::insert([
        'full_name'=>$request->full_name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'message_subject'=>$request->message_subject,
        'message'=>$request->message,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $user = User::where('is_admin', '=', 1)->first();
 
        $user->notify(new ContactFormSubmitted("A new contact form has been submitted."));

       flash('Your message was sent successfully. We will be contacting you soon!')->success();
      
       return back();  
    }

    public function comingSoon()
    {
        return view('public-views.coming-soon');
    }
}
