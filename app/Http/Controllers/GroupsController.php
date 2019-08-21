<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Group;

class GroupsController extends Controller
{
    public function userGroups()
    {
    	$groups = Group::get();

    	return view('private-views.groups.mygroups', compact('groups'));
    }
}
