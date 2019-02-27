<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Invitation;

class InvitationController extends Controller
{
    public function invitationFormSubmissions()
    {
    	
    	return view('admin.invitationform.submissions');
    }

    public function deleteSubmissions(Invitation $invitation)
    {
    	
    	Invitation::where('id', $invitation->id)->delete();

        flash('Invitation deleted!')->warning();

    	return back();
    }
}
