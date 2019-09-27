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

  //contact form
  Route::get('/contact', 'HomePublic\HomeController@contact')->name('contact');
  Route::post('/postcontact', 'HomePublic\HomeController@postContact')->name('postcontact');
  
  //invite gosgem
  Route::get('/invite_gosgem', 'HomePublic\InvitationController@invite');
  Route::post('/post_invite_gosgem', 'HomePublic\InvitationController@postInvite');

  //Pictures
  Route::get('/pictures', 'HomePublic\PicturesController@showPictures');
  
  //comming soon pages
  Route::get('/coming-soon', 'HomePublic\HomeController@comingSoon')->name('comingsoon');

  //Courses
  Route::get('/courses', 'HomePublic\CoursesController@showCourses')->name('courses');
  Route::get('/showcoursedetails/{course}', 'HomePublic\CoursesController@showCourseDetails');
  Route::get('/courses/register/{course}', 'HomePublic\CoursesController@register');
  Route::post('/courses/register/{course}', 'HomePublic\CoursesController@storeRegistration');

  //GForum
  Route::get('gforum', 'HomePublic\GForum\GForumController@index')->name('gforum');
  Route::get('gforum/category/{category}', 'HomePublic\GForum\GForumController@category')->name('category');
  Route::get('gforum/user/{user}', 'HomePublic\GForum\GForumController@userPosts')->name('userPosts');

  //Search Gosyan Forum Posts
  //Route::any('/search_forum_posts', 'HomePublic\GForum\GForumController@searchForumPosts')->name('searchforumposts');

  //GForum groups
  Route::get('groups/show', 'HomePublic\Groups\GroupsController@show')->middleware('auth');
  Route::get('groups/showmygroups/{user}', 'HomePublic\Groups\GroupsController@showMyGroups')->middleware('auth');
  Route::post('groups/joinrequest/{user}/{group}', 'HomePublic\Groups\GroupsController@joinRequest')->middleware('auth');
  Route::get('groups/showgroupposts/{group}', 'HomePublic\Groups\GroupsController@showGroupPosts')->middleware('auth','group.member');
  
  //gforum posts  
  Route::post('gforum/countpostviews/{post}', 'HomePublic\GForum\GForumController@countPostViews');
  Route::get('gforum/viewpost/{post}', 'HomePublic\GForum\GForumController@viewPost')->name('viewpostpublic');
  Route::post('gforum/countpostlikes/{post}', 'HomePublic\GForum\GForumController@countPostLikes');

  //Route::post('gforum/countpostdislikes/{post}', 'HomePublic\GForum\GForumController@countPostDislikes');
  Route::post('gforum/countcommentlikes/{comment}', 'HomePublic\GForum\GForumController@countCommentLikes');
  Route::post('gforum/countcommentreplylikes/{reply}', 'HomePublic\GForum\GForumController@countCommentReplyLikes');

  //Social login
  Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook|linkedin|google|github|bitbucket');
  Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');

  //Policy and terms of use
  Route::get('/gosgem_policy', 'HomePublic\PolicyAndTermsOfUseController@gosgemPolicy');
  Route::get('/termsofuse', 'HomePublic\PolicyAndTermsOfUseController@termsOfUse');

//User Private Area
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

    //course registration
    Route::get('/courses/registrations', 'CoursesController@registrations')->name('registrations');
    Route::get('/showcoursedetails/{course}', 'HomePublic\CoursesController@showCourseDetails');
    Route::post('/courses/registrations/{course}', 'CoursesController@storeCourseRegistration')->name('withpaystack');
    Route::post('/courses/registrations/unenroll/{registration}', 'CoursesController@unEnroll');

    //User groups
    Route::get('/groups/mygroups', 'Groups\GroupsController@userGroups')->name('mygroups');
    Route::post('/groups/create', 'Groups\GroupsController@createGroup');
    Route::post('/groups/edit/{group}', 'Groups\GroupsController@editGroup');
    Route::get('/groups/delete/{group}', 'Groups\GroupsController@deleteGroup');
    Route::get('/groups/mygroupmembers/{group}', 'Groups\GroupsController@myGroupMembers');
    Route::post('/groups/mygroupmembers/joingrouprequest/{user}/{group}', 'Groups\GroupsController@joinGroupRequest');
    Route::post('/groups/mygroupmembers/approve/{user}/{group}', 'Groups\GroupsController@approveGroupMember');
    Route::post('/groups/mygroupmembers/suspend/{user}/{group}', 'Groups\GroupsController@suspendGroupMember');
});

//Admin Private Area
Route::group(['middleware' => 'admin'], function () { 
  
  //dashboard home
  Route::get('admin/home', 'Admin\HomeController@index'); 
  
  //users
  Route::get('admin/users/all-users', 'Admin\UsersController@allUsers');
  Route::get('admin/home/delete/{user}', 'Admin\HomeController@deleteUser')->name('deleteuser');
  Route::post('admin/home/makeAdmin/{user}', 'Admin\HomeController@makeAdmin');
  Route::post('admin/home/makeUser/{user}', 'Admin\HomeController@makeUser');
  Route::post('admin/home/verify/{user}', 'Admin\HomeController@verify');
  Route::post('admin/home/unverify/{user}', 'Admin\HomeController@unverify');
  
  //Groups
  Route::get('admin/posts/groups/show', 'Admin\Posts\GroupsController@showPostsGroups')->name('showpostsgroups');
  Route::post('admin/posts/groups/create', 'Admin\Posts\GroupsController@createGroup');
  Route::post('admin/posts/groups/edit/{group}', 'Admin\Posts\GroupsController@editGroup');
  Route::get('admin/posts/groups/delete/{group}', 'Admin\Posts\GroupsController@deleteGroup');
  
  //Group members
  Route::get('admin/posts/groups/members/{group}', 'Admin\Posts\GroupMembersController@groupMembers');
  Route::post('admin/posts/groups/addmembers/{group}', 'Admin\Posts\GroupMembersController@addGroupMembers');
  Route::get('admin/posts/groups/deletemember/{group}/{user}', 'Admin\Posts\GroupMembersController@deleteGroupMember');
  
  //Mentors
  Route::get('admin/mentors/all-mentors', 'Admin\MentorsController@allMentors');
  Route::post('admin/mentors/addmentor', 'Admin\MentorsController@addMentor');
  Route::post('admin/mentors/editmentor/{mentor}', 'Admin\MentorsController@editMentor');
  Route::get('admin/mentors/deletementor/{mentor}', 'Admin\MentorsController@deleteMentor');
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
  Route::get('admin/invitationform/submissions', 'Admin\InvitationController@invitationFormSubmissions');
  Route::get('admin/invitationform/deletesubmissions/{invitation}', 'Admin\InvitationController@deleteSubmissions');
  Route::get('admin/business/units', 'Admin\BusinessController@businessUnits')->name('businessUnits');
  
  //Manage Pictures
    //Categories
    Route::get('admin/pictures/categories', 'Admin\Pictures\CategoryController@categories');
    Route::post('admin/storeNewPicCategory', 'Admin\Pictures\CategoryController@storeNewPicCategory')->name('addnewpiccategory');
    Route::post('admin/storeEditPicCategory/{category}', 'Admin\Pictures\CategoryController@storeEditPicCategory');
    Route::get('admin/deletePicCategory/{category}', 'Admin\Pictures\CategoryController@deletePicCategory');
    
    //Pictures
    Route::get('admin/pictures/{picture_category}', 'Admin\Pictures\CategoryController@categoryPictures')->name('categorypictures');
    Route::post('admin/storenewpicture/{picture_category}', 'Admin\Pictures\CategoryController@storeNewPicture')->name('storenewpicture');
    Route::post('admin/storeEditPicture/{picture}', 'Admin\Pictures\CategoryController@storeEditPicture');
    Route::get('admin/deletepicture/{picture}', 'Admin\Pictures\CategoryController@deletePicture');
    
    //Public Pictures Page
    Route::get('admin/pictures_page/pictures', 'Admin\Pictures\PicturesPageController@picturesPage');
    Route::post('admin/pictures_page/addpictures', 'Admin\Pictures\PicturesPageController@addPictures');
    Route::post('admin/pictures_page/editpictures/{picture}', 'Admin\Pictures\PicturesPageController@editPictures');
    Route::get('admin/delete/{picture}', 'Admin\Pictures\PicturesPageController@deletePictures');
    Route::post('admin/deletepic/{picture}', 'Admin\Pictures\PicturesPageController@deletePic');
    
    //Manage Videos
    Route::get('admin/videos/manage-videos', 'Admin\Videos\VideosController@manageVideos');
    Route::post('admin/videos/addvideo', 'Admin\Videos\VideosController@addVideo');
    Route::post('admin/videos/editvideo/{video}', 'Admin\Videos\VideosController@editVideo');
    
    //Manage Courses and Course categories
    //Categories
    Route::get('admin/courses/categories', 'Admin\Courses\CategoryController@courseCategories');
    Route::post('admin/courses/storeAddCourseCategory', 'Admin\Courses\CategoryController@storeAddCourseCategory');
    Route::post('admin/courses/storeEditCourseCategory/{coursecategory}', 'Admin\Courses\CategoryController@storeEditCourseCategory');
    Route::get('admin/courses/deleteCourseCategory/{coursecategory}', 'Admin\Courses\CategoryController@deleteCourseCategory');
    
    //courses
    Route::get('admin/courses/showcategorycourses/{coursecategory}', 'Admin\Courses\CourseController@showCourseCategory');
    Route::post('admin/courses/storeAddCourse', 'Admin\Courses\CourseController@storeAddCourse');
    Route::post('admin/courses/storeUpdateCourse/{course}', 'Admin\Courses\CourseController@storeUpdateCourse');
    Route::get('admin/courses/deleteCourse/{course}', 'Admin\Courses\CourseController@deleteCourse');
    
    //Course registrations
    Route::get('admin/courses/showallcourses', 'Admin\Courses\CourseRegistrationsController@showAllCourses');
    Route::get('admin/courses/showcourseregistrations/{course}', 'Admin\Courses\CourseRegistrationsController@showCourseRegistrations');
    Route::get('admin/courses/deleteCourseRegistration/{courseregistration}', 'Admin\Courses\CourseRegistrationsController@deleteCourseRegistration');
    
    //Download registration Table for each Course
    Route::get('/admin/courses/showallcourses/downloadCourseRegistrations/{course}', 'Admin\Courses\CourseRegistrationsController@downloadCourseRegistrationsExcel');
});