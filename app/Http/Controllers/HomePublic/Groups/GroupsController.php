<?php

namespace App\Http\Controllers\HomePublic\Groups;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;

class GroupsController extends Controller
{
    public function show()
    {
    	$groups = Group::get();

    	return view('public-views.groups.show', compact('groups'));
    }

    public function showGroupPosts(Group $group)
    {

    	return view('public-views.groups.showgroupposts', compact('group'));
    }
}
