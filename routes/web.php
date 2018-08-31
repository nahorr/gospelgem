<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

//Public Area
	Route::get('/', 'HomePublic\HomeController@index')->name('homepublic');
	Route::get('/about', 'HomePublic\HomeController@about')->name('about');
	Route::get('/competition', 'HomePublic\HomeController@competition')->name('competition');
	Route::get('/mentorship', 'HomePublic\HomeController@mentorship')->name('mentorship');
	Route::get('/contact', 'HomePublic\HomeController@contact')->name('contact');
	Route::post('/postcontact', 'HomePublic\HomeController@postContact')->name('postcontact');
	Route::get('/coming-soon', 'HomePublic\HomeController@comingSoon')->name('comingsoon');

	//GForum
	Route::get('gforum', 'HomePublic\GForum\GForumController@index')->name('gforum');
	Route::get('gforum/category/{category}', 'HomePublic\GForum\GForumController@category')->name('category');
	Route::get('gforum/user/{user}', 'HomePublic\GForum\GForumController@userPosts')->name('userPosts');

	Route::post('gforum/countpostviews/{post}', 'HomePublic\GForum\GForumController@countPostViews');
	Route::get('gforum/viewpost/{post}', 'HomePublic\GForum\GForumController@viewPost')->name('viewpostpublic');
	Route::post('gforum/countpostlikes/{post}', 'HomePublic\GForum\GForumController@countPostLikes');
	//Route::post('gforum/countpostdislikes/{post}', 'HomePublic\GForum\GForumController@countPostDislikes');
	Route::post('gforum/countcommentlikes/{comment}', 'HomePublic\GForum\GForumController@countCommentLikes');
	Route::post('gforum/countcommentreplylikes/{reply}', 'HomePublic\GForum\GForumController@countCommentReplyLikes');

//Social login
Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook|linkedin|google|github|bitbucket');
Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');


//Private Area
Route::group(['middleware' => 'auth'], function () {

	Route::get('home', 'HomeController@index')->name('home');

		//Users Controller
    	Route::get('users/profile', 'Users\ProfileController@profile');
    	Route::post('users/profile/updateavatar', 'Users\ProfileController@updateAvatar');
        Route::post('users/profile/updateprofile', 'Users\ProfileController@updateProfile');
    	
    	//GForum
    	Route::get('gforum/viewposts', 'GForum\GForumController@viewPosts')->name('viewPosts');

		Route::get('gforum/addpost', 'GForum\GForumController@addPost')->name('addPost');
		Route::post('gforum/storeaddpost', 'GForum\GForumController@storeAddPost');
		Route::get('gforum/editpost/{post}', 'GForum\GForumController@editPost')->name('editPost');
		Route::post('gforum/storeeditpost/{post}', 'GForum\GForumController@storeEditPost')->name('editPost');
		Route::get('gforum/deletepost/{post}', 'GForum\GForumController@deletePost');


		//GForum -Comments
		Route::get('gforum/comments/viewcomments', 'GForum\CommentController@viewComments')->name('viewcomments');
		Route::get('gforum/comments/leavecomment/{post}', 'GForum\CommentController@leaveComment');
		Route::get('gforum/comments/leaveCommentModal/{post}', 'GForum\CommentController@leaveComment');
		Route::post('gforum/comments/storeleavecomment/{post}', 'GForum\CommentController@storeLeaveComment');
		Route::get('gforum/comments/editcomment/{comment}', 'GForum\CommentController@editComment');
		Route::post('gforum/comments/storeeditcomment/{comment}', 'GForum\CommentController@storeEditComment');
		Route::get('gforum/comments/deletecomment/{comment}', 'GForum\CommentController@deleteComment');

		//GForum -Comment Replies
		Route::get('gforum/comments/replycomment/{comment}', 'GForum\CommentReplyController@replyComment');
		Route::post('gforum/comments/storereplycomment/{comment}', 'GForum\CommentReplyController@storeReplyComment');
		Route::get('gforum/comments/editreplycomment/{reply}', 'GForum\CommentReplyController@editReplyComment');
		Route::post('gforum/comments/storeeditreplycomment/{reply}', 'GForum\CommentReplyController@storeEditReplyComment');
		Route::get('gforum/comments/deletereplycomment/{reply}', 'GForum\CommentReplyController@deleteReplyComment');
});


//Route::get('home', 'HomeController@index')->name('home');
//Route::get('private-views.user.profile', 'User\ProfileController@profile');

//Admin Area
Route::group(['middleware' => 'admin'], function () { 

  Route::get('admin/home', 'Admin\HomeController@index');
  Route::get('admin/home/delete/{user}', 'Admin\HomeController@deleteUser')->name('deleteuser');
  Route::post('admin/home/makeAdmin/{user}', 'Admin\HomeController@makeAdmin');
  Route::post('admin/home/makeUser/{user}', 'Admin\HomeController@makeUser');

  Route::get('admin/categories', 'Admin\HomeController@categories');
  //Route::get('admin/addcategory', 'Admin\HomeController@addcategory');
  Route::post('admin/storeAddCategory', 'Admin\HomeController@storeAddCategory')->name('addcategory');

  //Route::get('admin/editCategory/{category}', 'Admin\HomeController@editCategory');
  Route::post('admin/storeEditCategory/{category}', 'Admin\HomeController@storeEditCategory');
  Route::get('admin/deleteCategory/{category}', 'Admin\HomeController@deleteCategory');

  Route::get('admin/posts', 'Admin\HomeController@posts')->name('post');
  Route::post('admin/approvePost/{post}', 'Admin\HomeController@approvePost');
  Route::post('admin/rejectPost/{post}', 'Admin\HomeController@rejectPost');
  Route::get('admin/deletePost/{post}', 'Admin\HomeController@deletePost');

  Route::get('admin/comments', 'Admin\CommentController@comments')->name('comments');
  Route::post('admin/approveComment/{comment}', 'Admin\CommentController@approveComment');
  Route::post('admin/rejectComment/{comment}', 'Admin\CommentController@rejectComment');
  Route::get('admin/deleteComment/{comment}', 'Admin\CommentController@deleteComment');

  Route::get('admin/replies', 'Admin\ReplyController@replies')->name('replies');
  Route::post('admin/approveReply/{reply}', 'Admin\ReplyController@approveReply');
  Route::post('admin/rejectReply/{reply}', 'Admin\ReplyController@rejectReply');
  Route::get('admin/deleteReply/{reply}', 'Admin\ReplyController@deleteReply');

  Route::get('admin/contactform/submissions', 'Admin\ContactController@contactFormSubmissions')->name('submissions');
  Route::get('admin/business/units', 'Admin\BusinessController@businessUnits')->name('businessUnits');
    
});
