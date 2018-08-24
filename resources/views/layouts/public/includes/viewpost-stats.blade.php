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
                      <li class="list-inline-item g-color-gray-dark-v4">
                        
                        @if(Auth::check() )
                        <button type="button" class="btn btn-sm u-btn-orange" id="leaveCommentModal-{{$post->id}}">Leave a Comment</button>
                        @include('private-views.gforum.comments.leaveCommentModal')
                        <script type="text/javascript">
                          $('#leaveCommentModal-{{$post->id}}').on('click', function(e){
                             e.preventDefault();
                            $('#postCommentModal-{{$post->id}}').modal('show');
                          })
                        </script>
                      @else
                        <a href="{{url('login')}}" class="btn btn-secondary" role="button">Leave a Comment</a>
                      @endif
                     
                      </li>
                      
                    </ul>