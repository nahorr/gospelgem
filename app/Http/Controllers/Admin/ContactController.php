<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactUs;

class ContactController extends Controller
{
    public function contactFormSubmissions()
    {
    	$contactFormSubmissions = ContactUs::orderBy('created_at', 'desc')->get();

    	return view('admin.contactform.submissions', compact('contactFormSubmissions'));
    }
}
