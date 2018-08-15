
<div class="modal fade" id="postEditReplyCommentModal-{{$reply->id}}" role="dialog">
  <div class="modal-dialog modal-lg">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editing your Reply</h4>
      </div>
      <div class="modal-body">
      
          <div class="row">
                      
            <div class="col-md-12">
          
              <!-- General Controls -->
              <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" enctype="multipart/form-data" method="post" action="{{ url('gforum/comments/storeeditreplycomment', [$reply->id]) }}">
                {{ csrf_field() }}

                <input type="hidden" name="post_id" value="{{ $reply->id }}" >
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
                 

                <div class="form-group g-mb-25">
                  <label for="exampleTextarea"><strong>Edit Your reply</strong> <span style="color: darkred;">(you can add pictures and/or videos to your comment)</span></label>
                  <textarea class=" summernote autosize-transition form-control" id="comment_reply" name="comment_reply">{!! $reply->comment_reply !!}</textarea>

                </div>

                <div class="form-group g-mb-25">
                  <label class="form-check-label g-mb-20">
                    <input type="hidden" name="show_profile_picture" value="0"><input type="checkbox" name="show_profile_picture" value="1" /><span style="color: darkred;">Include my profile picture with this comment</span>
                  </label>
                </div>
                <input type="submit" value="Submit Your Changes" />
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
              @endif
            
          </div>

          </div>
      </div>
    </div>
  </div>
</div>

          
                