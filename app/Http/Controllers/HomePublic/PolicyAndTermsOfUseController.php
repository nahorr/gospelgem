<?php

namespace App\Http\Controllers\HomePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\CaptchaTrait;
use App\ContactUs;
use Notification;
use App\Notifications\ContactFormSubmitted;
use App\User;
use App\ManagePicture;

class PolicyAndTermsOfUseController extends Controller
{
    use CaptchaTrait;

    public function gosgemPolicy()
    {
    	return view('public-views.gosgem_policy');
    }

    public function termsOfUse()
    {
    	return view('public-views.termsofuse');
    }
}
