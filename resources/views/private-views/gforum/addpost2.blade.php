       

          <div class="modal fade" id="addNewPostModal2" role="dialog">
            <div class="modal-dialog modal-lg">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Adding a New Post</h4>
                </div>
                <div class="modal-body">
                  <div class="row">
                              
                    <div class="col-md-12">
                  
                      <!-- General Controls -->
                      <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" enctype="multipart/form-data" method="post" action="/gforum/storeaddpost" id="addPostForm">
                        {{ csrf_field() }}

                         <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >

                         <div class="row">
                           <div class="form-group col-md-6 g-mb-25">
                            <label for="post_title"><strong>Select a category</strong></label><br>
                            
                              <select class="form-control form-control-md form-control-lg rounded-0 g-mb-25" name="category_id" id="category_id">
                                  <option selected disabled>Please select one category</option>
                                        @foreach($categories as $key => $category)

                                            <option value="{{ $category->id }}" >
                                                {{ $category->category_name }}
                                            </option>

                                        @endforeach
                                </select>
                               
                            </div>
                            <div class="form-group col-md-6 g-mb-25">
                              <label for="post_title"><strong>Post Tile</strong></label>
                              <input type="text" class="form-control rounded-0 form-control-md" id="post_title" name="post_title" aria-describedby="postTitle" placeholder="Enter Your Post Title Here">
                            </div>
                          </div>

                        <div class="form-group g-mb-25">
                          <label for="exampleTextarea"><strong>Post Body</strong> <span style="color: darkred;">(you can add pictures and/or videos to your post)</span></label>
                          <textarea class="summernote" id="postBody" name="post_body" id="summernote"></textarea>

                        </div>

                        <div class="form-group g-mb-25">
                          <label class="form-check-label g-mb-20">
                            <input type="hidden" name="show_profile_picture" value="0"><input type="checkbox" name="show_profile_picture" value="1" /><span style="color: darkred;">Include my profile picture with this post</span>
                          </label>
                        </div>
                        <button type="submit" class="btn btn-success">Add Post</button>
                      </form>
                      
                    </div>
                 </div>
            </div>
          </div>
        </div>
      </div> 

