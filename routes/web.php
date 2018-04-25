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

//Private Area
Route::get('/home', 'HomeController@index')->name('home');

//Admin Area
Route::group(['middleware' => 'admin'], function () { 

  Route::get('/admin/home', 'Admin\HomeController@index');
    
});
