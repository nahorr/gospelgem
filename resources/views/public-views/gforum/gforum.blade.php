  @extends('layouts.public.app')

  @section('content')

  @include('layouts.public.includes.nav-header')

  <!--Basic Table-->
  <section class="g-py-100">
    <div class="container">
      <header class="text-center g-width-60x--md mx-auto g-mb-50">
          <h2 class="h1 g-color-gray-dark-v1 g-font-weight-300">Introducing GForum</h2>
          <p class="lead">GForum is a Good News Forum. It is a place to share beautiful, inspiring, and uplifting stories with gems around the world. </p>
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
        <thead class="text-uppercase g-letter-spacing-1">
          <tr>
            <!--<th class="g-font-weight-300 g-color-black">#</th>-->
            <th class="g-font-weight-600 g-color-black text-center"><span style="color: #6635b7;"><strong>Most Recent Posts -
              @foreach($categories as $category)
                
                @if($loop->last)
                   <span>{{$category->category_name}}.</span>
                @else
                   <span>{{$category->category_name}},</span>
               @endif
                
              @endforeach
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
                                      
                        <a href="javascript:{{url('gforum/viewpost'.$post->id)}}" onclick="document.getElementById( {{$post->id}} ).submit(); return false;">
                        
                        <div class="media">
                          
                          <div class="media-body align-self-center">
                            
                            
                            <span style="color: #6635b7;"><strong>{{$post->post_title}} - <span style="color: #b78f18;">{{ str_limit(strip_tags ( $post->post_body), $limit = 300, $end = '...') }}</span></strong></span> 
                            <span style="color: #6635b7;">
                              - posted by <img class="g-width-25 g-height-25 rounded-circle" src="{{asset('uploads/avatars/'.$user->avatar)}}" alt="{{$user->name}}"> {{$user->name}} 
                              on {{$post->created_at->toFormattedDateString()}} - 
                                {{ $post->post_views }} views
                            </span>
                          </div>
                        </div>

                        </a>
                    </form>
                    
                  </td>
                  
                </tr>
              @endif
            @endforeach
          @endforeach

        </tbody>
      </table>
      
      <div class="pagination">{{ $posts->links() }}</div> 

    </div>
  </div>
  </section>
    <!--End Basic Table-->


  @include('layouts.public.includes.footer')

  @endsection