<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class PublicComposerServiceProvider extends ServiceProvider
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

            'layouts.public.includes.header',
            'public-views.welcome',
            'public-views.pictures_page.showpictures',
            'public-views.courses.showcourses',
            'public-views.courses.showcoursedetails',
            'public-views.courses.register',
            'public-views.invite_gosgem',
            'public-views.gosgem_policy',
            'public-views.termsofuse',
            'public-view.groups.showgroupposts',
            'public-views.groups.showmygroups',
            

            ], 
            
            'App\Http\ViewComposers\PublicComposer'

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
