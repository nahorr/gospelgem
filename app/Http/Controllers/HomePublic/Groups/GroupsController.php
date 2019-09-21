<?php

namespace App\Http\Controllers\HomePublic\Groups;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;
use App\Post;
use App\Category;

class GroupsController extends Controller
{
    public function show()
    {
    	$groups = Group::get();

    	return view('public-views.groups.show', compact('groups'));
    }

    public function showGroupPosts(Group $group)
    {
    
    	$categories = Category::get();

    	$posts_all = Post::get();

    	$posts = Post::where('group_id', $group->id)->where('approved', 1)->orderBy('created_at', 'desc')->paginate(20);

    	return view('public-views.groups.showgroupposts', compact('group', 'categories', 'posts_all', 'posts'));
    }
}
