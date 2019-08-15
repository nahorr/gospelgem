<?php
namespace App\Http\Controllers\Admin\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;
use App\User;
class GroupMembersController extends Controller
{
    public function groupMembers(Group $group)
    {
    	return view('admin.posts.groups.members', compact('group'));
    }
    public function addGroupMembers(Request $request, Group $group)
    {
    	$this->validate($request, [
	        'user_id' => 'required',    
        ]);
	   	$group = Group::find($group->id);
		$group->users()->attach($request->user_id);
	   	
        flash('Member added successfully!')->success();
   		return back();
    }
}