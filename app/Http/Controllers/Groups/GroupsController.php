<?php

namespace App\Http\Controllers\Groups;
use App\Http\Controllers\Controller;
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

    public function createGroup(Request $request){

        $this->validate($request, [
          'group_admin' => 'required',
          'name' => 'required|unique:groups',
          'description' => 'required',        
        ]);

        $newGroup = new Group();
        $newGroup->group_admin = $request->group_admin;
        $newGroup->name = $request->name;
        $newGroup->description = $request->description;
        
        $newGroup->save();

      $group = Group::find($newGroup->id);
      $group->users()->attach($request->group_admin, ['approved' => true]);
      
      flash('New Group created successfully!')->success();
      return redirect()->route('mygroups');;
   }

   public function editGroup(Request $request, Group $group){
        
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',        
        ]);
        $editGroup = Group::where('id', $group->id)->first();
        $editGroup->name = $request->name;
        $editGroup->description = $request->description;
        
        $editGroup->save();
        flash('Group edited successfully!')->success();
        return back();
   }
   
   public function deleteGroup(Group $group){
        
        Group::where('id', $group->id)->delete();
        flash('Group delete !')->success();
        return back();
   }

    public function myGroupMembers(Group $group)
    {
    	
    	return view('private-views.groups.mygroupmembers', compact('group'));
    }


    public function approveGroupMember(Request $request, User $user, Group $group)
    {
        $group = Group::find($group->id);

        //$group->users()->attach($user->id, ['approved' => true]);
        $group->users()->updateExistingPivot($user->id, ['approved' => true]);

        flash('User added to your group successfully')->success();

        return back();
    }

}
