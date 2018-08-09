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
      <a href="{{url('gforum/addpost')}}" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15">Add a Post</a>
    <div class="table-responsive">
      <table class="table table-bordered u-table--v2">
        <thead class="text-uppercase g-letter-spacing-1">
          <tr>
            <!--<th class="g-font-weight-300 g-color-black">#</th>-->
            <th class="g-font-weight-600 g-color-black text-center"><span style="color: #6635b7;"><strong>Most Recent Posts</strong></span></th>
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
                            
                            
                            <span style="color: #6635b7;"><strong>{{$post->post_title}}</strong></span> 
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
                  
                  <!--
                  <td class="align-middle text-center">
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                        <i class="align-middle g-font-size-default mr-1 icon-finance-206 u-line-icon-pro"></i> 10 comments
                      </span>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                        <i class="align-middle g-font-size-default mr-1 icon-medical-022 u-line-icon-pro"></i> 20 likes
                    </span>
                  </td>
                  -->
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