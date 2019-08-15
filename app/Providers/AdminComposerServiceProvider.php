<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AdminComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
         // Using class based composers...
        View::composer(
            [

            'admin.include.metrics',
            'admin.home',
            'admin.users.all-users',
            'admin.mentors.all-mentors',
            'admin.categories',
            'admin.posts',
            'admin.comments',
            'admin.replies',
            'admin.contactform.submissions',
            'admin.invitationform.submissions',
            'admin.business.units',
            'admin.pictures.categories',
            'admin.pictures.showpictures',
            'admin.pictures_page.pictures',
            'admin.videos.manage-videos',
            'admin.courses.categories',
            'admin.courses.showcategorycourses',
            'admin.courses.showallcourses',
            'admin.courses.showcourseregistrations',
            'admin.posts.groups.show',
            'admin.posts.groups.members',

            ], 
            
            'App\Http\ViewComposers\AdminMetricsComposer'

        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
