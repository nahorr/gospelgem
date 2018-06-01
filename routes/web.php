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


//Private Area
Route::get('/home', 'HomeController@index')->name('home');

//Admin Area
Route::group(['middleware' => 'admin'], function () { 

  Route::get('/admin/home', 'Admin\HomeController@index');
    
});
