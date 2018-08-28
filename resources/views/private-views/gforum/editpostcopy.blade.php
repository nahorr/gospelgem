      <div class="modal fade" id="postEditPostModal-{{$post->id}}" role="dialog">
        <div class="modal-dialog modal-lg">
  
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editing your Post</h4>
              </div>
                <div class="modal-body">

                  <div class="row">
                              
                    <div class="col-md-12">
                  
                      <!-- General Controls -->
                      <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" enctype="multipart/form-data" method="post" action="{{ url('/gforum/storeeditpost', [$post->id]) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ $post->category_id }}" >
                         <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >

                        <div class="form-group g-mb-25">
                          <label for="post_title">Post Tile</label>
                          <input type="text" class="form-control rounded-0 form-control-md" id="post_title" name="post_title" aria-describedby="postTitle" value="{{$post->post_title}}">
                        </div>


                        <div class="form-group g-mb-25">
                          <label for="exampleTextarea">Post Body <span style="color: darkred;">(you can add pictures and/or videos to your post)</span></label>
                          <textarea class=" summernote autosize-transition form-control" id="postBody" name="post_body">{!! $post->post_body !!}</textarea>

                        </div>

                       
                        <div class="form-group g-mb-25">
                          <label class="form-check-label g-mb-20">
                            <input type="hidden" name="show_profile_picture" value="0"><input type="checkbox" name="show_profile_picture" value="1" /><span style="color: darkred;">Include my profile picture with this post</span>
                          </label>
                        </div>
                        <button type="submit" class="btn btn-danger" id="editSubmit">Submit Changes</button>
                      </form>
                      <!-- End General Controls -->
                     
                        @if (count($errors) > 0)
                        
                          <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                          </div>

                          <script>
                            $( document ).ready(function() {
                              $('#editSubmit').click(function(){
                                
                                $('this').modal('show');
                                
                              });
                                

                                
                            
                                
                            });
                        </script>

                      @endif
                    
                    </div>
                  </div>

                </div>
            </div>
          </div>
        </div>



           