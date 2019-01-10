                    <ul class="list-inline g-brd-y g-brd-gray-light-v3 g-font-size-13 g-py-13 mb-0">
                      <li class="list-inline-item g-color-gray-dark-v4 mr-2">
                        By:
                        <span class="d-inline-block g-color-gray-dark-v4">
                          <a href="#" id="pop-{{$post->user->id}}-{{$post->id}}">
                              <img id="imageresource-{{$post->user->id}}-{{$post->id}}" class="g-g-width-50 g-height-50 rounded-circle mr-2" src="{{asset('uploads/avatars/'.$post->user->avatar)}}" alt="$post->user->name">
                          </a>
                            {{$post->user->name}}
                        </span>
                         <!-- Creates the bootstrap modal where the image will appear -->
                          <div class="modal fade" id="imagemodal-{{$post->user->id}}-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color: #F39C12;">
                                  <h4 class="modal-title" id="myModalLabel"><span style="color: #FFF;">{{ $post->user->name }}</span></h4>
                                </div>
                                <div class="modal-body">
                                  <img src="" id="imagepreview-{{$post->user->id}}-{{$post->id}}" style="width: 100%; height: 100%;" >
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <script type="text/javascript">
                            jQuery(document).ready(function(){

                                 $("#pop-{{$post->user->id}}-{{$post->id}}").on("click", function() {
                                 $('#imagepreview-{{$post->user->id}}-{{$post->id}}').attr('src', $('#imageresource-{{$post->user->id}}-{{$post->id}}').attr('src')); // here asign the image to the modal when the user click the enlarge link
                                 $('#imagemodal-{{$post->user->id}}-{{$post->id}}').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
                              });              
                        

                            });
                        </script>

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