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
                  @if(!empty($post_image->filename) && $post_image->filename != 'default_post_image.jpg')
                    <img class="img-fluid w-100 g-rounded-5 g-mb-25" src="{{ asset('posts/images/'.$post_image->filename) }}" alt="gosgem blog photo">
                
                  @endif
                  <div class="px-4">
                    <ul class="d-flex justify-content-start align-items-end list-inline g-color-gray-dark-v5 g-font-size-13 g-mt-minus-45 g-mb-25">
                      <li class="list-inline-item mr-5">
                        <img class="g-width-40 g-height-40 g-brd-around g-brd-2 g-brd-white rounded-circle mb-2" src="{{asset('uploads/avatars/'.$user->avatar)}}" alt="Image Description">
                        <h4 class="h6 g-font-weight-600 g-font-size-13 mb-0">
                            <a class="g-color-gray-dark-v4" href="#!">{{$user->name}}</a>
                          </h4>
                      </li>
                      <li class="list-inline-item">
                        <span class="g-font-size-12">{{$post->created_at->toFormattedDateString()}}</span>
                      </li>
                      <li class="list-inline-item ml-auto">
                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-font-size-default g-transition-0_3 g-text-underline--none--hover" href="#!">
                          <i class="align-middle mr-1 icon-medical-022 u-line-icon-pro"></i>
                        </a>
                        <span class="g-color-gray-dark-v5">5k</span>
                      </li>
                      <li class="list-inline-item ml-3">
                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-font-size-default g-transition-0_3 g-text-underline--none--hover" href="#!">
                          <i class="align-middle mr-1 icon-finance-206 u-line-icon-pro"></i>
                        </a>
                        <span class="g-color-gray-dark-v5">10</span>
                      </li>
                    </ul>

                    <h2 class="h5 g-color-black g-font-weight-600">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">{{$post->post_title}}</a>
                      </h2>
                    <p class="g-color-gray-dark-v4">{!! $post->post_body !!}</p>
                    
                  </div>
                </article>
                <!-- End Blog Minimal Blocks -->


              </div>
            </div>

            <div class="col-lg-3 order-lg-1 g-brd-right--lg g-brd-gray-light-v4 g-mb-80">
              <div class="g-pr-20--lg">
               
                  <!-- Tags -->
                  <div class="g-mb-40">
                    <h3 class="h5 g-color-black g-font-weight-600 mb-4">Categories</h3>
                    <ul class="u-list-inline mb-0">
                      <li class="list-inline-item g-mb-10">
                        <a class="u-tags-v1 g-color-gray-dark-v4 g-color-white--hover g-bg-gray-light-v5 g-bg-primary--hover g-font-size-12 g-rounded-50 g-py-4 g-px-15" href="#!">Design</a>
                      </li>
                      
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
        </div>
        <!-- End Blog Minimal Blocks -->

 
  @include('layouts.public.includes.footer')

  @endsection