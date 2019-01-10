  @extends('layouts.public.app')

  @section('content')

  @include('layouts.public.includes.nav-header')

  <!--Basic Table-->
  <section class="g-py-100">
    <div class="container">
      <header class="text-center g-width-60x--md mx-auto g-mb-50">
          <h2 class="h1 g-color-gray-dark-v1 g-font-weight-300">Viewing Posts in {{$category->category_name}} Category</h2>
          <p class="lead">{{$category->category_description}} </p>
        </header>
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
        
    <div class="table-responsive">
      <table class="table table-bordered u-table--v2">
        <thead class="thead-dark text-uppercase g-letter-spacing-1">
          <tr>
            <!--<th class="g-font-weight-300 g-color-black">#</th>-->
            <th class="g-font-weight-600 g-color-black text-center"><span style="color: #fff;"><strong>Your are viewing Posts in {{$category->category_name}} Category<small>({{$posts_category->total()}} posts)</small><br>
              (<a href="{{url('gforum')}}""><span style="color: #b78f18;">Recent,</span></a>
              @foreach($categories as $category)
                
                @if($loop->last)
                   <a href="{{url('gforum/category/'.$category->id)}}"><span style="color: #b78f18;">{{$category->category_name}}.</span></a>
                @else
                   <a href="{{url('gforum/category/'.$category->id)}}"><span style="color: #b78f18;">{{$category->category_name}},</span></a>
               @endif
                
              @endforeach
              )
            </strong></span></th>
            <!--<th class="g-font-weight-300 g-color-black g-min-width-200">Post Title and Information</th>-->
            <!--<th class="g-font-weight-300 g-color-black text-center">Stats</th>-->
            
          </tr>
        </thead>

        <tbody>
          @foreach($posts_category as $key => $post)
            @foreach($users as $user)
             @if($post->user_id == $user->id)
                <tr>
                  <!--<td class="align-middle"> {{$key+1}} </td>-->
                  <td class="align-middle text-center">
                    <form class="form-group" action="{{ url('/gforum/countpostviews', [$post->id])}}" method="POST" id="{{$post->id}}">
                      {{ csrf_field() }}
                        <input name="post_views" type="hidden" value="{{$post->post_views + 1}}">

                        <!--<input type="submit" value="{{ $post->post_title }}">-->
                                      
                        <a href="javascript:{{url('gforum/viewpost'.$post->id)}}" onclick="document.getElementById( {{$post->id}} ).submit(); return false;">
                        
                        <div class="media">
                          
                          <div class="media-body align-self-center">
                            
                            
                            <span style="color: #6635b7;"><strong>{{$post->post_title}} - <span style="color: #b78f18;">{{ str_limit(strip_tags ( $post->post_body), $limit = 300, $end = '...') }}</span></strong></span> 
                            <span style="color: #6635b7;"> 
                                - posted on {{$post->created_at->toFormattedDateString()}} - 
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
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
      
      <div class="pagination">{{$posts_category->links("pagination::bootstrap-4")}}</div> 

    </div>
  </div>
  </section>
    <!--End Basic Table-->


  @include('layouts.public.includes.footer')

  @endsection