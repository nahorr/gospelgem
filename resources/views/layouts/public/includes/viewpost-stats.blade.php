                    <ul class="list-inline g-brd-y g-brd-gray-light-v3 g-font-size-13 g-py-13 mb-0">
                      <li class="list-inline-item g-color-gray-dark-v4 mr-2">
                        By:
                        <span class="d-inline-block g-color-gray-dark-v4">
                         
                            <img class="g-g-width-20 g-height-20 rounded-circle mr-2" src="{{asset('uploads/avatars/'.$post->user->avatar)}}" alt="Image Description">
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
                
                        <form class="form-group" action="{{ url('/gforum/countpostlikes', [$post->id])}}" method="POST" id="{{$post->id}}">
                          {{ csrf_field() }}
                            <input name="post_likes" type="hidden" value="{{$post->post_likes + 1}}">
                            
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="javascript:{}" onclick="document.getElementById( {{$post->id}} ).submit(); return false;">
                              <i class="align-middle g-font-size-default mr-1 icon-medical-022 u-line-icon-pro"></i>
                              {{ $post->post_likes }} Likes
                            </a>
                        </form>
                      </li>
                      <li class="list-inline-item g-color-gray-dark-v4">
                        <a class="d-inline-block g-color-gray-dark-v4 g-color-white--hover g-bg-gray-dark-v2--hover rounded g-transition-0_3 g-text-underline--none--hover g-px-15 g-py-5" href="{{url('gforum/comments/leavecomment/'.$post->id)}}">
                          <i class="align-middle g-font-size-default mr-1 icon-hotel-restaurant-002 u-line-icon-pro"></i>
                          Leave a Comment
                        </a>
                      </li>
                      
                    </ul>