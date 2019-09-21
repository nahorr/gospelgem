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

    public function joinGroupRequest(Request $request, User $user, Group $group)
    {
        $this->validate($request, [
            'group_id' => 'required|unique_with:group_user,user_id',
            'user_id' => 'required',
             
        ]);

        $group = Group::find($request->group_id);
        
        //Join group request by users
        $group->users()->attach($request->user_id);
        
        flash('You request was sent successfully!')->success();

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
