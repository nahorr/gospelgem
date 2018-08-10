  @extends('layouts.public.app')

  @section('content')

  @include('layouts.public.includes.nav-header')

  <style>
    img, iframe {
    max-width: 100%;
  }
  </style>

        <!-- Blog Minimal Blocks -->
        <div class="container g-pt-100 g-pb-20">
          <div class="row justify-content-between">

            
            <div class="col-lg-9 order-lg-2 g-mb-80">
              <div class="g-pl-20--lg">
                
                <!-- Blog Minimal Blocks -->
                <article class="g-mb-100">
                  <div class="g-mb-30">
  
                    <h2 class="h4 g-color-black g-font-weight-600 mb-3">
                      <a class="u-link-v5 g-color-black g-color-primary--hover">{{$post->post_title}}</a>
                      <a href="{{ url('gforum') }}" class="pull-right"><button type="button" class="btn btn-primary">Back to Forum</button></a>
                    </h2>

                     

                    @include('layouts.public.includes.viewpost-stats')
                    
                    <p class="g-color-gray-dark-v4 g-line-height-1_8">{!! $post->post_body !!}</p>


                    
                  </div>

                  
                </article>
                <!-- End Blog Minimal Blocks -->

                 <a class="btn btn-danger" href="{{url('gforum/comments/leavecomment/'.$post->id)}}" role="button">
                    <i class="align-middle g-font-size-default mr-1 icon-hotel-restaurant-002 u-line-icon-pro"></i>
                    Leave a Comment
                  </a>

                    <hr>
                    
                    <!-- Comments Starts-->
                    @foreach($comments as $comment)
                 

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

                                <form class="form-group" action="{{ url('/gforum/countcommentlikes', [$comment->id])}}" method="POST">
                                  {{ csrf_field() }}
                                    <input name="comment_likes" type="hidden" value="{{$comment->comment_likes + 1}}">
                                    
                                    <button class="btn btn-md btn-block u-btn-primary rounded g-py-13" type="submit">
                                      <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i>
                                      {{ $comment->comment_likes }}
                                    </button>
                                </form>
                                
                              </li>
                              <li class="list-inline-item ml-auto">
                                <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="{{url('/gforum/comments/replycomment', [$comment->id])}}">
                                  <i class="icon-note g-pos-rel g-top-1 g-mr-3"></i>
                                  Reply
                                </a>
                              </li>
                            </ul>

                            @foreach($comment_replies as $reply)

                              @if($comment->id == $reply->comment_id)

                             <div class="media g-mb-30">
                              <div class="media-body">
                                <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-20" src="{{asset('uploads/avatars/'.$reply->user->avatar)}}" alt="Image Description">
                                  <div class="media-body u-shadow-v22 g-bg-danger g-bg-primary--hover g-pa-30" style="box-shadow: 0 2px 5px #999;">
                                    <div class="g-mb-15">
                                      <h5 class="d-flex justify-content-between align-items-center h5 g-color-gray-dark-v1 mb-0">
                                        <span class="d-block g-mr-10">
                                          <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">{{$reply->user->name}} replied to {{$comment->user->name}}'s comment</a> 
                                        </span>
                                        <span class="g-color-gray-dark-v4 g-font-size-12">{{$reply->created_at->toFormattedDateString()}}</span>
                                      </h5>
                                    </div>

                                    <p>{!! $reply->comment_reply !!}</p>

                                    <ul class="list-inline d-sm-flex my-0">
                                      <li class="list-inline-item g-mr-20">
                                        <form class="form-group" action="{{ url('/gforum/countcommentreplylikes', [$reply->id])}}" method="POST">
                                          {{ csrf_field() }}
                                            <input name="comment_reply_likes" type="hidden" value="{{$reply->comment_reply_likes + 1}}">
                                            
                                            <button class="btn btn-md btn-block u-btn-primary rounded g-py-13" type="submit">
                                              <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i>
                                              {{ $reply->comment_reply_likes }}
                                            </button>
              
                                        </form>
                                      </li>
                                      
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            @endif
                          @endforeach

                          </div>
                        </div>

                     @endforeach


                  @include('layouts.public.includes.viewpost-stats')

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