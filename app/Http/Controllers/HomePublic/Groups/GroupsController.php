<?php

namespace App\Http\Controllers\HomePublic\Groups;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;
use App\Post;
use App\Category;
use App\User;

class GroupsController extends Controller
{
    public function show()
    {
    	$groups = Group::get();

    	return view('public-views.groups.show', compact('groups'));
    }

    public function joinRequest(Request $request, User $user, Group $group)
    {
        $group = Group::find($group->id);
        
        //Join group request by users
        $group->users()->attach($user->id);
        
        flash('You request was sent successfully!')->success();

        return back();
    }

    public function showGroupPosts(Group $group)
    {
    
    	$categories = Category::get();

    	$posts_all = Post::get();

    	$posts = Post::where('group_id', $group->id)->where('approved', 1)->orderBy('created_at', 'desc')->paginate(20);

    	return view('public-views.groups.showgroupposts', compact('group', 'categories', 'posts_all', 'posts'));
    }
}
