  @extends('layouts.public.app')

  @section('content')
  <style type="text/css">
    .error {
      color: red;
      background-color: #acf;
   }
  </style>

  @include('layouts.public.includes.nav-header')

  <!--Basic Table-->
  <section class="g-py-100">
    <div class="container">
      <header class="text-center g-width-60x--md mx-auto g-mb-50">
          <h2 class="h1 g-color-gray-dark-v1 g-font-weight-300">{{$group->name}} Group</h2>
          <p class="lead">{{$group->description}} </p>
        </header>
       @if(Auth::check() )
        <button type="button" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15" id="addPostButton">Add a Post</button>
        <a href="{{url('groups/show')}}" class="btn btn-md u-btn-deeporange g-mr-10 g-mb-15 pull-right" id="groupsButton"><i class="fa fa-users"></i> All Groups({{$group->count()}})</a>
        <!-- General Controls -->
        <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" enctype="multipart/form-data" method="post" action="/gforum/storeaddpost" id="addPostForm" style="display: none;">
          {{ csrf_field() }}

           <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
           <input type="hidden" name="group_id" value="{{ $group->id }}" >
           <div class="row">
             <div class="form-group col-md-6 g-mb-25">
              <label for="post_title"><strong>Select a category</strong></label><br>
              
                <select class="form-control form-control-md form-control-lg rounded-0 g-mb-25" name="category_id" id="category_id">
                    <option selected disabled>Please select Group Posts Category</option>
                          @foreach($categories->where('category_name','Group Posts') as $key => $category)

                              <option value="{{ $category->id }}" >
                                 {{$group->name}} {{ $category->category_name }}
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
          <button type="submit" class="btn btn-success" id="submitPostFormButton">Add Post</button>
          <button type="button" class="btn btn-danger" id="closePostFormButton">Close</button>
        </form>
       
        @else
          <a href="{{url('login')}}" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15">Add a Post</a>
          <a href="{{url('groups/show')}}" class="btn btn-md u-btn-deeporange g-mr-10 g-mb-15 pull-right" id="groupsButton"><i class="fa fa-users"></i> Group({{$group->count()}})</a>
        @endif

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
    
    <div class="table-responsive">
      <table class="table table-bordered u-table--v2">
        <thead class="thead-dark text-uppercase g-letter-spacing-1">
          <tr>
            <!--<th class="g-font-weight-300 g-color-black">#</th>-->
            <th class="g-font-weight-600 g-color-black text-center"><span style="color: #fff;"><strong>{{$group->name}} Group Posts<small>({{$posts->where('group_id',$group->id)->count()}} posts)</small> 
            </strong></span></th>
            <!--<th class="g-font-weight-300 g-color-black g-min-width-200">Post Title and Information</th>-->
            <!--<th class="g-font-weight-300 g-color-black text-center">Stats</th>-->
            
          </tr>
        </thead>

        <tbody>
          @foreach($posts as $key => $post)
            @foreach($users as $user)
             @if($post->user_id == $user->id)
                <tr>
                  <!--<td class="align-middle"> {{$key+1}} </td>-->
                  <td class="align-middle text-center">
                    <form class="form-group" action="{{ url('/gforum/countpostviews', [$post->id])}}" method="POST" id="{{$post->id}}">
                      {{ csrf_field() }}
                        <input name="post_views" type="hidden" value="{{$post->post_views + 1}}">

                        <!--<input type="submit" value="{{ $post->post_title }}">-->
                                      
                        <a href="javascript:{{url('gforum/viewpost'.$post->id)}}" onclick="document.getElementById( {{ $post->id }} ).submit(); return false;">
                        
                        <div class="media">
                          
                          <div class="media-body align-self-center">
                            
                            
                            <span style="color: #6635b7;"><strong>{{$post->post_title}} - <span style="color: #b78f18;">{{ str_limit(strip_tags ( $post->post_body), $limit = 300, $end = '...') }}</span></strong></span> 
                            <span style="color: #6635b7;"> 
                                - posted {{$post->created_at->diffForHumans()}} on {{$post->created_at->toFormattedDateString()}} - 
                                {{ $post->post_views }} views
                            </span>
                          </div>
                        </div>

                        </a>
                        
                            by 
                            <a href="#" id="pop-{{$user->id}}-{{$post->id}}">
                                <img id="imageresource-{{$user->id}}-{{$post->id}}" class="g-width-25 g-height-25 rounded-circle" src="{{asset('uploads/avatars/'.$user->avatar)}}" alt="{{$user->name}}">
                            </a>
                             <a href="{{ url('gforum/user/'.$user->id)}}"><span style="color: #b78f18;">{{$user->name}}</span>
                           </a>
                           <!-- Creates the bootstrap modal where the image will appear -->
                            <div class="modal fade" id="imagemodal-{{$user->id}}-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color: #F39C12;">
                                    <h4 class="modal-title" id="myModalLabel"><span style="color: #FFF;">{{ $user->name }}</span></h4>
                                  </div>
                                  <div class="modal-body">
                                    <img src="" id="imagepreview-{{$user->id}}-{{$post->id}}" style="width: 100%; height: 100%;" >
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <script type="text/javascript">
                              jQuery(document).ready(function(){

                                   $("#pop-{{$user->id}}-{{$post->id}}").on("click", function() {
                                   $('#imagepreview-{{$user->id}}-{{$post->id}}').attr('src', $('#imageresource-{{$user->id}}-{{$post->id}}').attr('src')); // here asign the image to the modal when the user click the enlarge link
                                   $('#imagemodal-{{$user->id}}-{{$post->id}}').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
                                });              
             

                              });
                          </script>
                        
                    </form>
                      
                  </td>
                  
                </tr>
              @endif
            @endforeach
          @endforeach
        </tbody>
      </table>
      
      <div class="pagination">{{$posts->links("pagination::bootstrap-4")}}</div> 

    </div>
  </div>
  </section>
    <!--End Basic Table-->


  @include('layouts.public.includes.footer')
  <script>
     jQuery(document).ready(function(){

                     
       $("#submitPostFormButton").click(function(){

          $("#addPostForm").hide(1000);
       });

       $("#addPostButton").click(function(){
          $("#addPostForm").show(1000);
       });

       $("#closePostFormButton").click(function(){
          $("#addPostForm").hide(1000);
       });

    });



     $(function () {
         $('#addPostForm').submit(function (e) {
             e.preventDefault()  // prevent the form from 'submitting'

             var url = e.target.action  // get the target
             var formData = $(this).serialize() // get form data
             $.post(url, formData, function (response) { 
             // send; response.data will be what is returned
                 location.reload();
             })


             .fail(function(response) {
              var err = JSON.parse(response.responseText);
                  alert(err.message+"\n"+err.errors.category_id
                    +"\n"+err.errors.post_title
                    +"\n"+err.errors.post_body
                    
                    );

              })
         })
     })

     </script>

  @endsection