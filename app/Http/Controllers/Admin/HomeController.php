<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\UserDetail;
use App\Category;
use App\Comment;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {

    	return view('admin.home');
    }

    public function categories()
    {

    	return view('admin.categories');
    }

    public function storeAddCategory(Request $request){

	   	$category = new Category();

	   	$category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
	   	
	   	$category->save();

        flash('Category Added successfully!')->success();

   		return back();
   }

   public function storeEditCategory(Request $request, Category $category){

	   	$category = Category::where('id', $category->id)->first();

	   	$category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
	   	
	   	$category->save();

        flash('Category Edited successfully!')->success();

   		return back();
   }

   

   public function deleteCategory(Category $category)

    {
    	Category::where('id', $category->id)->delete();

        flash('Category deleted!')->warning();

    	return back();
    }

    public function posts()
    {

        return view('admin.posts');
    }

    public function approvePost(Request $request, Post $post)
    {
        $approve_post = Post::where('id', $post->id)->first();

        $approve_post->approved = $request->approved;

        $approve_post->save();

        return back();
    }

    public function rejectPost(Request $request, Post $post)
    {
        $reject_post = Post::where('id', $post->id)->first();

        $reject_post->approved = $request->approved;

        $reject_post->save();

        return back();
    }

    public function deletePost(Post $post)

    {
        Post::where('id', $post->id)->delete();

        return back();
    }

     

    public function deleteUser(User $user)

    {
    	User::where('id', $user->id)->delete();

    	return back();
    }

    public function makeAdmin(Request $request, User $user)
    {
    	$make_admin = User::where('id', $user->id)->first();

    	$make_admin->is_admin = $request->is_admin;

    	$make_admin->save();

    	return back();
    }

    public function makeUser(Request $request, User $user)
    {
    	$make_user = User::where('id', $user->id)->first();

    	$make_user->is_admin = $request->is_admin;

    	$make_user->save();

    	return back();
    }
}
