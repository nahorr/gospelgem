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

    public function myGroupMembers(Group $group)
    {
    	
    	return view('private-views.groups.mygroupmembers', compact('group'));
    }


    public function approveGroupMember(Request $request, User $user, Group $group)
    {
        $group = Group::find($group->id);

        //$group->users()->attach($user->id, ['approved' => true]);
        $group->users()->updateExistingPivot(['approved' => true]);

        flash('User added to your group successfully')->success();

        return back();
    }

}
