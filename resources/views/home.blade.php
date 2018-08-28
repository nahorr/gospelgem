@extends('layouts.private.app')

@section('content')

@include('layouts.private.includes.header')


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

        @include('layouts.private.includes.sidebar')

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">

                @include('layouts.private.includes.metrics')

                @include('flash::message')
                <div class="row">
                  <div class="col-xl-4">
                    <!-- User Card -->
                    <div class="card g-brd-gray-light-v7 text-center g-pt-40 g-pt-60--md g-mb-30">
                      <header class="g-mb-30">
                        <img class="img-fluid rounded-circle g-width-125 g-height-125 g-mb-14" src="{{asset('uploads/avatars/'.Auth::user()->avatar)}}" alt="User Picture">
                        <h3 class="g-font-weight-300 g-font-size-22 g-color-black g-mb-2">{{ Auth::user()->name }}</h3>
                        <em class="g-font-style-normal g-font-weight-300 g-color-gray-dark-v6">
                          @if(Auth::user()->is_admin == 1)
                            Admin User
                          @else
                            Regular User
                          @endif
                        </em>
                      </header>

                      <section class="row no-gutters g-brd-top g-brd-gray-light-v4">
                        <div class="col-6 g-py-10 g-py-25--md">
                          <strong class="d-block g-font-weight-500 g-font-size-18 g-color-black">{{$user_posts->count()}}</strong>
                          <span class="g-font-weight-300 g-color-gray-dark-v6">Posts</span>
                        </div>

                        <div class="col-6 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-25--md">
                          <strong class="d-block g-font-weight-500 g-font-size-18 g-color-black">{{$user_comments->count() + $user_replies->count()}}</strong>
                          <span class="g-font-weight-300 g-color-gray-dark-v6">Comments and Replies</span>
                        </div>
                      </section>
                    </div>
                    <!-- End User Card -->
                  </div>
                  <!-- End User Card -->

                  <!-- About Card -->
                  <div class="col-xl-8">
                    <!-- About Card -->
                    <div class="card g-brd-gray-light-v7 g-pa-15 g-pa-25-30--md g-mb-30">
                      <section class="g-mb-20">
                        <h3 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mb-20">About me</h3>
                        
                        <div class="g-font-weight-300 g-color-gray-dark-v6 g-mb-20">
                          @if(@$user_details->about_me == null)
                          <span class="g-font-size-20 g-color-black">Hi {{Auth::user()->name}}!</span>
                          <br>
                          
                            Please write something awesome about yourself.
                            <a href="{{url('users/profile')}}" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15">Update Your Profile</a>
                          @else
                          <hr>
                            <p class="g-font-weight-300 g-color-gray-dark-v6 mb-0">{{ @$user_details->about_me}}</p>
                            <hr>
                            <a href="{{url('users/profile')}}" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15">Edit Your Profile</a>
                          @endif

                        </div>

                        
                      </section>

                    </div>
                    <!-- End About Card -->

                  </div>
                  <!-- End About Card -->

                </div>
                <div class="row">
                    <!-- Income Card -->
                    <div class="col-xl-12">
                      <!-- Income Cards -->
                      <div class="card g-brd-gray-light-v7 g-mb-30">
                        <header class="media g-pa-15 g-pa-25-30-0--md g-mb-20">
                          <div class="media-body align-self-center">
                            <h3 class="text-uppercase g-font-size-default g-color-black g-mb-8">Your Posts</h3>

                            <div id="rangePickerWrapper3" class="u-datepicker-left u-datepicker--v3 g-pr-10">
                              <input id="rangeDatepicker3" class="g-font-size-12 g-font-size-default--md" type="text" data-rp-wrapper="#rangePickerWrapper3" data-rp-type="range" data-rp-date-format="d M Y" data-rp-default-date='["01 Jan 2016", "31 Dec 2017"]'>
                              <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v3"></i>
                            </div>
                          </div>

                          <div class="d-flex align-self-end align-items-center">
                            <span class="g-line-height-1 g-font-weight-300 g-font-size-28 g-color-lightblue-v4">{{$user_posts->count()}} posts so far</span>
                            
                          </div>
                        </header>

                        <div class="js-custom-scroll g-height-500 g-pa-15 g-pa-0-30-25--md">
                          <table class="table table-responsive-sm w-100">
                            <thead>
                              <tr>
                                <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none g-pl-20">#</th>
                                <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Title</th>
                                <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Status</th>
                                <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Date</th>
                                <th class="text-right g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Views</th>
                                <th class="text-right g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none"></th>

                              </tr>
                            </thead>
                            <tbody>
                              @foreach($user_posts as $key => $post)
                              <tr>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">{{$key+1}}</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                  <a href="{{url('/gforum/viewpost/'.$post->id)}}"><span style="color: darkgreen;">{{$post->post_title}}</span></a>
                                </td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                  @if($post->approved == 1)
                                    <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">Approved</span>
                                  @else
                                    <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightred-v2 g-bg-lightred-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">Pending...</span>
                                  @endif
                                </td>
                                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">{{$post->created_at->toFormattedDateString()}}</td>
                                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                  {{$post->post_views}}
                                </td>
                                <td class="text-left g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                
                                  <a href="{{url('/gforum/viewpost/'. $post->id)}}" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15">View/Edit Post</a>

                                  <a href="{{url('/gforum/deletepost/'. $post->id)}}" class="btn btn-md u-btn-deeporange g-mr-10 g-mb-15" onclick="return confirm('Are you sure you want to Delete this record?')">Delete</a>
                                </td>
                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                        </div>

                        <div class="js-area-chart u-area-chart--v1 g-pos-rel g-line-height-0" data-height="100px" data-high="2420" data-low="0" data-offset-x="0" data-offset-y="0" data-postfix=" m" data-is-show-area="true" data-is-show-line="false" data-is-show-point="true"
                        data-is-full-width="true" data-is-stack-bars="true" data-is-show-axis-x="false" data-is-show-axis-y="false" data-is-show-tooltips="true" data-tooltip-description-position="left" data-tooltip-custom-class="u-tooltip--v2 g-font-weight-300 g-font-size-default g-color-gray-dark-v6"
                        data-align-text-axis-x="center" data-fill-opacity=".3" data-fill-colors='["#1cc9e4"]' data-stroke-width="2px" data-stroke-color="#1cc9e4" data-stroke-dash-array="0" data-text-size-x="14px" data-text-color-x="#000000" data-text-offset-top-x="0"
                        data-text-size-y="14px" data-text-color-y="#53585e" data-points-colors='["#1cc9e4"]' data-series='[
                    [
                      {"meta": "$", "value": 400},
                      {"meta": "$", "value": 2400},
                      {"meta": "$", "value": 700},
                      {"meta": "$", "value": 2750},
                      {"meta": "$", "value": 600},
                      {"meta": "$", "value": 1840},
                      {"meta": "$", "value": 320},
                      {"meta": "$", "value": 2720},
                      {"meta": "$", "value": 800}
                    ]
                  ]' data-labels='["2013", "2014", "2015", "2016", "2017"]'></div>
                      </div>
                      <!-- End Income Cards -->
                    </div>
                    <!-- End Income Card -->
                </div>
            </div>



            @include('layouts.private.includes.footer')
            
        </div>


    </div>


</main>

@endsection