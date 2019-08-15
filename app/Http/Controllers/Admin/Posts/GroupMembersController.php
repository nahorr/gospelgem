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
        $users = User::get();

    	return view('admin.posts.groups.members', compact('group', 'users'));
    }
    public function addGroupMembers(Request $request)
    {
    	$this->validate($request, [
            'group_id' => 'required|unique_with:group_user,user_id',
	        'user_id' => 'required',
             
        ]);
	   	$group = Group::find($request->group_id);
		$group->users()->attach($request->user_id);
	   	
        flash('Member added successfully!')->success();
   		return back();
    }

    public function deleteGroupMember(Group $group, User $user)
    {
        $group = Group::find($group->id);
        $group->users()->wherePivot('user_id','=',$user->id)->detach();
        
        flash('Member deleted successfully!')->success();

        return back();
    }
}