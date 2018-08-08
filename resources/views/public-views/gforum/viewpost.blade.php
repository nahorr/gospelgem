  @extends('layouts.public.app')

  @section('content')

  @include('layouts.public.includes.nav-header')

        <!-- Blog Minimal Blocks -->
        <div class="container g-pt-100 g-pb-20">
          <div class="row justify-content-between">

            <div class="col-lg-9 order-lg-2 g-mb-80">
              <div class="g-pl-20--lg">
                
                <!-- Blog Minimal Blocks -->
                <article class="g-mb-100">
                  <div class="g-mb-30">
  
                    <h2 class="h4 g-color-black g-font-weight-600 mb-3">
                      <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">{{$post->post_title}}</a>
                    </h2>
                    <ul class="list-inline g-brd-y g-brd-gray-light-v3 g-font-size-13 g-py-13 mb-0">
                      <li class="list-inline-item g-color-gray-dark-v4 mr-2">
                        <span class="d-inline-block g-color-gray-dark-v4">
                            <img class="g-g-width-20 g-height-20 rounded-circle mr-2" src="{{asset('uploads/avatars/'.$post->user->avatar)}}" alt="Image Description">
                            {{$post->user->name}}
                          </span>
                      </li>
                      <li class="list-inline-item g-color-gray-dark-v4">
                        <a class="d-inline-block g-color-gray-dark-v4 g-color-white--hover g-bg-gray-dark-v2--hover rounded g-transition-0_3 g-text-underline--none--hover g-px-15 g-py-5" href="#!">
                          <i class="align-middle g-font-size-default mr-1 icon-hotel-restaurant-056 u-line-icon-pro"></i>
                          {{$post->created_at->toFormattedDateString()}}
                        </a>
                      </li>
                      <li class="list-inline-item g-color-gray-dark-v4">
                         <a class="d-inline-block g-color-gray-dark-v4 g-color-white--hover g-bg-gray-dark-v2--hover rounded g-transition-0_3 g-text-underline--none--hover g-px-15 g-py-5" href="#!">
                          <i class="align-middle g-font-size-default mr-1 icon-education-043 u-line-icon-pro"></i> {{$post->post_views}} Views
                        </a>
                      </li>
                      <li class="list-inline-item g-color-gray-dark-v4">
                        <a class="d-inline-block g-color-gray-dark-v4 g-color-white--hover g-bg-gray-dark-v2--hover rounded g-transition-0_3 g-text-underline--none--hover g-px-15 g-py-5" href="#!">
                          <i class="align-middle g-font-size-default mr-1 icon-finance-206 u-line-icon-pro"></i>
                          10 Comments
                        </a>
                      </li>
                      <li class="list-inline-item g-color-gray-dark-v4">
                        <a class="d-inline-block g-color-gray-dark-v4 g-color-white--hover g-bg-gray-dark-v2--hover rounded g-transition-0_3 g-text-underline--none--hover g-px-15 g-py-5" href="#!">
                          <i class="align-middle g-font-size-default mr-1 icon-medical-022 u-line-icon-pro"></i>
                          57 Likes
                        </a>
                      </li>
                      <li class="list-inline-item g-color-gray-dark-v4">
                        <a class="d-inline-block g-color-gray-dark-v4 g-color-white--hover g-bg-gray-dark-v2--hover rounded g-transition-0_3 g-text-underline--none--hover g-px-15 g-py-5" href="{{url('gforum/comments/leavecomment/'.$post->id)}}">
                          <i class="align-middle g-font-size-default mr-1 icon-hotel-restaurant-002 u-line-icon-pro"></i>
                          Leave a Comment
                        </a>
                      </li>
                      
                    </ul>
                    
                    <p class="g-color-gray-dark-v4 g-line-height-1_8">{!! $post->post_body !!}</p>
                    
                  </div>

                  
                </article>
                <!-- End Blog Minimal Blocks -->

                Comments
                <hr>
                <!-- Comments Starts-->
                @foreach($comments as $comment)

                  @if($loop->iteration  % 2 != 0)

                    <div class="media g-mb-30">
                      <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-20" src="{{asset('uploads/avatars/'.$comment->user->avatar)}}" alt="Image Description">
                      <div class="media-body u-shadow-v22 g-bg-secondary g-pa-30">
                        <div class="g-mb-15">
                          <h5 class="d-flex justify-content-between align-items-center h5 g-color-gray-dark-v1 mb-0">
                            <span class="d-block g-mr-10">
                              <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Author - {{$comment->user->name}}</a> 
                            </span>
                            <span class="g-color-gray-dark-v4 g-font-size-12">{{$comment->created_at->toFormattedDateString()}}</span>
                          </h5>
                          
                        </div>

                        <p>{!! $comment->post_comment !!}</p>

                        <ul class="list-inline d-sm-flex my-0">
                          <li class="list-inline-item g-mr-20">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                              <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i>
                              214
                            </a>
                          </li>
                          <li class="list-inline-item g-mr-20">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                              <i class="icon-dislike g-pos-rel g-top-1 g-mr-3"></i>
                              18
                            </a>
                          </li>
                          <li class="list-inline-item ml-auto">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                              <i class="icon-note g-pos-rel g-top-1 g-mr-3"></i>
                              Reply
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    @else
                    <div class="media g-ml-40 g-mb-30">
                      <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="{{asset('uploads/avatars/'.$comment->user->avatar)}}" alt="Image Description">
                      <div class="media-body u-shadow-v22 g-bg-secondary g-pa-30">
                        <div class="g-mb-15">
                          <h5 class="d-flex justify-content-between align-items-center h5 g-color-gray-dark-v1 mb-0">
                            <span class="d-block g-mr-10">
                              <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Author - {{$comment->user->name}}</a> 
                            </span>
                            <span class="g-color-gray-dark-v4 g-font-size-12">{{$comment->created_at->toFormattedDateString()}}</span>
                          </h5>
                        </div>

                        <p>{!! $comment->post_comment !!}</p>

                        <ul class="list-inline d-sm-flex my-0">
                          <li class="list-inline-item g-mr-20">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                              <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i>
                              637
                            </a>
                          </li>
                          <li class="list-inline-item g-mr-20">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                              <i class="icon-dislike g-pos-rel g-top-1 g-mr-3"></i>
                              49
                            </a>
                          </li>
                          <li class="list-inline-item ml-auto">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                              <i class="icon-note g-pos-rel g-top-1 g-mr-3"></i>
                              Reply
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <!-- Comments Ends-->
                  @endif

              @endforeach

              </div>
            </div>



            <div class="col-lg-3 order-lg-1 g-brd-right--lg g-brd-gray-light-v4 g-mb-80">
              <div class="g-pr-20--lg">
               
                  <!-- Tags -->
                  <div class="g-mb-40">
                    <h3 class="h5 g-color-black g-font-weight-600 mb-4">Categories</h3>
                    <ul class="u-list-inline mb-0">
                      @foreach($categories as $category)

                      <li class="list-inline-item g-mb-10">
                        <a class="u-tags-v1 g-color-gray-dark-v4 g-color-white--hover g-bg-gray-light-v5 g-bg-primary--hover g-font-size-12 g-rounded-50 g-py-4 g-px-15" href="#!">{{$category->category_name}}</a>
                      </li>

                      @endforeach
                      
                    </ul>
                  </div>
                  <!-- End Tags -->

                  <hr class="g-brd-gray-light-v4 g-my-50">

                  <!-- Newsletter -->
                  <div class="g-mb-50">
                    
                    <div class="input-group">
                      <span class="input-group-btn">
                          <a href="{{url('gforum/addpost')}}"><button class="btn btn-primary">Add a Post</button></a>
                      </span>
                      
                    </div>
                  </div>
                  <!-- End Newsletter -->
                </div>
              </div>
           


          </div>
        </div>
        <!-- End Blog Minimal Blocks -->

 
  @include('layouts.public.includes.footer')

  @endsection