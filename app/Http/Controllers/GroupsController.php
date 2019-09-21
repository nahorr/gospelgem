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

    public function joinGroupRequest(Request $request)
    {
        $this->validate($request, [
            'group_id' => 'required|unique_with:group_user,user_id',
            'user_id' => 'required',
             
        ]);
        $group = Group::find($request->group_id);
        //Add group member manually by admin. Note that user is approved if added manually by admin
        $group->users()->attach($request->user_id, ['approved' => true]);
        
        flash('Member added successfully!')->success();
        return back();
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
