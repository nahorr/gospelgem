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
});


//Route::get('home', 'HomeController@index')->name('home');
//Route::get('private-views.user.profile', 'User\ProfileController@profile');

//Admin Area
Route::group(['middleware' => 'admin'], function () { 

  Route::get('admin/home', 'Admin\HomeController@index');
  Route::get('admin/contactform/submissions', 'Admin\ContactController@contactFormSubmissions')->name('submissions');
  Route::get('admin/business/units', 'Admin\BusinessController@businessUnits')->name('businessUnits');
    
});
