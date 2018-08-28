  @extends('layouts.public.app')

  @section('content')

  @include('layouts.public.includes.nav-header')

  <style>
    img, iframe {
    max-width: 100%;

  }

  .u-shadow-v22 {
      box-shadow: 0 2px 5px rgba(51, 51, 51, 1.00);
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
                     @include('flash::message')
  
                    <h2 class="h4 g-color-black g-font-weight-600 mb-3">
                      <a class="u-link-v5 g-color-black g-color-primary--hover">{{$post->post_title}}</a>
                      <!--<a href="{{ url('gforum') }}" class="btn btn-md u-btn-primary g-mr-10 g-mb-15 pull-right">GForum</a>-->
                      
                      @if(Auth::check() )

                        @if($post->user_id == Auth::user()->id)
                        <button type="button" class="btn btn-sm btn-info" id="editPostModal-{{$post->id}}">Edit Post</button>
                        @include('private-views.gforum.editpost')
                        <script type="text/javascript">
                          $('#editPostModal-{{$post->id}}').on('click', function(e){
                             e.preventDefault();
                            $('#postEditPostModal-{{$post->id}}').modal('show');
                          })
                        </script>

                      @endif
                      @endif
                    </h2>
                    
                     

                    @include('layouts.public.includes.viewpost-stats')
                    
                    <p class="g-color-gray-dark-v4 g-line-height-1_8">{!! $post->post_body !!}</p>
                  </div>

                    <div class="u-divider u-divider-solid u-divider-center g-brd-gray-light-v3 g-my-40">
                      <i class="fa fa-comments-o u-divider__icon u-divider__icon--indented g-bg-gray-light-v4 g-color-gray-light-v1 rounded-circle"></i>
                    </div>
                  
                  @if(Auth::check() )
                    <button type="button" class="btn btn-sm u-btn-deeporange" id="leaveCommentModal2-{{$post->id}}">Leave a Comment</button> <i class="fa fa-comments-o"></i> {{$comments->count()}}
                    @include('private-views.gforum.comments.leaveCommentModal2')
                    <script type="text/javascript">
                      $('#leaveCommentModal2-{{$post->id}}').on('click', function(e){
                         e.preventDefault();
                        $('#postCommentModal2-{{$post->id}}').modal('show');
                      })
                    </script>
                  @else
                    <a href="{{url('login')}}" class="btn btn-secondary" role="button">Leave a Comment</a> <i class="fa fa-comments-o"></i> {{$comments->count()}}
                  @endif
              </article>

             
                <!-- End Blog Minimal Blocks --o
                    
                    <!-- Comments Starts-->
                    @foreach($comments as $comment)
                 

                        <div class="media g-mb-30">
                          
                          <div class="media-body u-shadow-v22 g-bg-secondary g-pa-30">
                            <div class="g-mb-15">
                              
                              <h5 class="d-flex justify-content-between align-items-center h5 g-color-gray-dark-v1 mb-0">
                                <span class="d-block g-mr-10">
                                  <img class="u-tags-v1 g-width-50 g-height-50 rounded-circle g-mt-3" src="{{asset('uploads/avatars/'.$comment->user->avatar)}}" alt="Image Description">
                                  <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Comment By: {{$comment->user->name}}</a> 
                                </span>
                                <span class="g-color-gray-dark-v4 g-font-size-12">{{$comment->created_at->toFormattedDateString()}} at {{$comment->created_at->format('g:i A')}}</span>
                              </h5>
                              
                            </div>

                            <p>{!! $comment->post_comment !!}</p>

                            <ul class="list-inline d-sm-flex my-0">

                              <li class="list-inline-item g-mr-20">

                                <form class="form-group" action="{{ url('/gforum/countcommentlikes', [$comment->id])}}" method="POST">
                                  {{ csrf_field() }}
                                    <input name="comment_likes" type="hidden" value="{{$comment->comment_likes + 1}}">
                                    
                                    <button class="btn btn-sm btn-light" type="submit">
                                      <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i>
                                      {{ $comment->comment_likes }}
                                    </button>
                                </form>
                                
                              </li>
                              <li class="list-inline-item ml-auto">
                                
                                @if(Auth::check() )
                                <button type="button" class="btn btn-sm btn-light" id="replyCommentModal-{{$comment->id}}"><i class="fa fa-edit"></i> Reply</button>
                                  @include('private-views.gforum.comments.replycomment')

                                  <script type="text/javascript">
                                    $('#replyCommentModal-{{$comment->id}}').on('click', function(e){
                                      e.preventDefault();
                                      $('#postReplyCommentModal-{{$comment->id}}').modal('show');
                                    })
                                  </script>
                                @else
                                  <a href="{{url('login')}}" class="btn btn-sm btn-light" role="button"><i class="fa fa-edit"></i> Reply</a>
                                @endif
                                  
                              </li>
                              <li class="list-inline-item ml-auto">
                                @if(Auth::check() && $comment->user_id == Auth::user()->id)

                                  <button type="button" class="btn btn-sm btn-light" id="editCommentModal-{{$comment->id}}"><i class="fa fa-edit"></i> Edit</button>
                                  @include('private-views.gforum.comments.editcomment')

                                  <script type="text/javascript">
                                    $('#editCommentModal-{{$comment->id}}').on('click', function(e){
                                      e.preventDefault();
                                      $('#postEditCommentModal-{{$comment->id}}').modal('show');
                                    })
                                  </script>
                                  <a class="btn btn-sm btn-light" href="{{url('gforum/comments/deletecomment/'.$comment->id)}}" role="button" onclick="return confirm('Are you sure you want to Delete this comment? This action will also delete all the replies associated with this comment')"><i class="fa fa-trash" style="color: red;"></i> Delete</a>
                                @endif
                              </li>
                              </ul>

                              <div class="u-divider u-divider-solid u-divider-center g-brd-primary g-my-40">
                                 
                                <i class="u-divider__icon g-bg-primary g-color-white rounded-circle">{{$comment_replies->where('comment_id', $comment->id)->count()}}</i>
                              </div>

                            @foreach($comment_replies as $reply)

                              @if($comment->id == $reply->comment_id)

                                <div class="media g-ml-60 g-mb-30">
                                  <div class="media-body">
                                   
                                      <div class="media-body u-shadow-v22 g-bg-danger g-bg-white--hover g-pa-30" style="box-shadow: 0 2px 5px #999;">
                                        <div class="g-mb-15">
                                          <h5 class="d-flex justify-content-between align-items-center h5 g-color-gray-dark-v1 mb-0">
                                            <span class="d-block g-mr-10">
                                              <img class="u-tags-v1 g-width-50 g-height-50 rounded-circle g-mt-3" src="{{asset('uploads/avatars/'.$comment->user->avatar)}}" alt="Image Description">
                                              <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">{{$reply->user->name}} replied to {{$comment->user->name}}'s comment</a> 
                                            </span>
                                            <span class="g-color-gray-dark-v4 g-font-size-12">{{$reply->created_at->toFormattedDateString()}} at {{$reply->created_at->format('g:i A')}}</span>
                                          </h5>
                                        </div>

                                        <p>{!! $reply->comment_reply !!}</p>

                                        <ul class="list-inline d-sm-flex my-0">
                                          <li class="list-inline-item g-mr-20">
                                            <form class="form-group" action="{{ url('/gforum/countcommentreplylikes', [$reply->id])}}" method="POST">
                                              {{ csrf_field() }}
                                                <input name="comment_reply_likes" type="hidden" value="{{$reply->comment_reply_likes + 1}}">
                                                
                                                <button class="btn btn-sm btn-light" type="submit">
                                                  <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i>
                                                  {{ $reply->comment_reply_likes }}
                                                </button>
                  
                                            </form>
                                          </li>
                                          <li class="list-inline-item g-mr-20">
                                            @if(Auth::check() && $reply->user_id == Auth::user()->id)
                                            

                                              <button type="button" class="btn btn-sm btn-light" id="editReplyCommentModal-{{$reply->id}}"><i class="fa fa-edit"></i> Edit</button>
                                              @include('private-views.gforum.comments.editreplycomment')

                                              <script type="text/javascript">
                                                $('#editReplyCommentModal-{{$reply->id}}').on('click', function(e){
                                                  e.preventDefault();
                                                  $('#postEditReplyCommentModal-{{$reply->id}}').modal('show');
                                                })
                                              </script>
                                              <a class="btn btn-sm btn-light" href="{{url('gforum/comments/deletereplycomment/'.$reply->id)}}" role="button" onclick="return confirm('Are you sure you want to Delete this reply? This action will also delete all other replies associated with this reply')"><i class="fa fa-trash" style="color: red;"></i> Delete</a>
                                            
                                            @endif
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


                      <ul class="list-inline g-brd-y g-brd-gray-light-v3 g-font-size-13 g-py-13 mb-0">
                      <li class="list-inline-item g-color-gray-dark-v4 mr-2">
                        By:
                        <span class="d-inline-block g-color-gray-dark-v4">
                         
                            <img class="g-g-width-50 g-height-50 rounded-circle mr-2" src="{{asset('uploads/avatars/'.$post->user->avatar)}}" alt="Image Description">
                            {{$post->user->name}}
                          </span>
                      </li>
                      <li class="list-inline-item g-color-gray-dark-v4">
                        
                          <i class="align-middle g-font-size-default mr-1 icon-hotel-restaurant-056 u-line-icon-pro"></i>
                          {{$post->created_at->toFormattedDateString()}}
                        
                      </li>
                      <li class="list-inline-item g-color-gray-dark-v4">
                         
                          <i class="align-middle g-font-size-default mr-1 icon-education-043 u-line-icon-pro"></i> {{$post->post_views}} Views
                        
                      </li>
                      <li class="list-inline-item g-color-gray-dark-v4">
                        
                          <i class="align-middle g-font-size-default mr-1 icon-finance-206 u-line-icon-pro"></i>
                          {{$post->comments->count()}} Comments
                        
                      </li>
                      <li class="list-inline-item g-color-gray-dark-v4">
                
                        <form class="form-group" action="{{ url('/gforum/countpostlikes', [$post->id])}}" method="POST">
                          {{ csrf_field() }}
                            <input name="post_likes" type="hidden" value="{{$post->post_likes + 1}}">
                            
                            <button class="btn btn-sm btn-light" type="submit">
                              <i class="align-middle g-font-size-default mr-1 icon-medical-022 u-line-icon-pro"></i>
                              {{ $post->post_likes }} Likes
                            </button>
                        </form>
                      </li>
                      
                      
                    </ul>

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

                          @if(Auth::check() )
                          <button type="button" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15" id="addPostModal">Add a Post</button>
                          @include('private-views.gforum.addpost')
                          <script type="text/javascript">
                            $('#addPostModal').on('click', function(e){
                               e.preventDefault();
                              $('#addNewPostModal').modal('show');
                            })
                          </script>
                          @else
                            <a href="{{url('login')}}" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15">Add a Post</a>
                          @endif
                          @if(Auth::check() )

                            @if($post->user_id == Auth::user()->id)
                              <a class="btn btn-md u-btn-deeporange g-mr-10 g-mb-15" href="{{url('gforum/deletepost/'.$post->id)}}" role="button" onclick="return confirm('Are you sure you want to Delete this Post? This action will also delete all the comments and replies associated with this post.')">Delete Post</a>
                            @endif
                          @endif
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