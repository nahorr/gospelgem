<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class UserComposerServiceProvider extends ServiceProvider
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

            'layouts.private.includes.metrics',
            'home',
            'private-views.users.profile',
            'private-views.gforum.viewposts',
            'private-views.gforum.comments.viewcomments',
            'private-views.courses.registrations',
            'private-views.courses.details',
            'private-views.groups.mygroups',
            'private-views.groups.mygroupmembers',
            
            

            ], 
            
            'App\Http\ViewComposers\UserMetricsComposer'

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
