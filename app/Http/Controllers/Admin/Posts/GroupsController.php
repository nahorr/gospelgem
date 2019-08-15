<?php
namespace App\Http\Controllers\Admin\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;
class GroupsController extends Controller
{
    public function showPostsGroups()
    {
    	$groups = Group::get();
    	return view('admin.posts.groups.show', compact('groups'));
    }
    public function createGroup(Request $request){
    	$this->validate($request, [
	        'name' => 'required',
	        'description' => 'required',        
        ]);
	   	$newGroup = new Group();
	   	$newGroup->name = $request->name;
        $newGroup->description = $request->description;
	   	
	   	$newGroup->save();
        flash('New Group created successfully!')->success();
   		return back();
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
}