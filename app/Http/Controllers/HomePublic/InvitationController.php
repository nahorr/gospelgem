<?php

namespace App\Http\Controllers\HomePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Traits\CaptchaTrait;
use App\Invitation;
use Notification;
use App\Notifications\InvitationFormSubmitted;
use App\User;
use App\Mentor;

class InvitationController extends Controller
{
	use CaptchaTrait;

    public function Invite()
    {
        $mentors = Mentor::get();

  		return view('public-views.invite_gosgem', compact('mentors'));
    }

    public function postInvite(Request $request)
    {
        $request['captcha'] = $this->captchaCheck();

        $this->validate($request, [
            'mentor' => 'required',
	        'organization_name' => 'required',
	        'country' => 'required',
	        'event' => 'required',
	        'description' => 'required',
	        'event_date' => 'required|date|after:today',
	        'venue' => 'required',
	        'contact_person' => 'required',
	        'contact_phone' => 'required',
	        'contact_email' => 'required|email',
	        'g-recaptcha-response' => 'required',
	        'captcha' => 'required|min:1',
        ],
        [
	         'g-recaptcha-response.required' => 'Captcha is required',
	         'captcha.min' => 'Wrong captcha, please try again.'
        ]);

        $invite_gosgem = Invitation::insert([
        'mentor'=>$request->mentor,
        'organization_name'=>$request->organization_name,
        'country'=>$request->country,
        'event'=>$request->event,
        'description'=>$request->description,
        'event_date'=>$request->event_date,
        'venue'=>$request->venue,
        'contact_person'=>$request->contact_person,
        'contact_phone'=>$request->contact_phone,
        'contact_email'=>$request->contact_email,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $user = User::where('email', '=', 'gosgem@icloud.com')->first();
 
        $user->notify(new InvitationFormSubmitted("A new Invitation form has been submitted."));

       flash('Your message was sent successfully. We will be contacting you soon!')->success();
      
       return back();  
    }
}
