<?php

namespace App\Http\Controllers\HomePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvitationController extends Controller
{
    public function Invite()
    {
  		return view('public-views.invite_gosgem');
    }
}
