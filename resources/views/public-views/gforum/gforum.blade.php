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
            <th class="g-font-weight-300 g-color-black">#</th>
            <th class="g-font-weight-300 g-color-black">Post Details</th>
            <!--<th class="g-font-weight-300 g-color-black g-min-width-200">Post Title and Information</th>-->
            <!--<th class="g-font-weight-300 g-color-black text-center">Stats</th>-->
            
          </tr>
        </thead>

        <tbody>
          @foreach($posts as $key => $post)
            @foreach($users as $user)
             @if($post->user_id == $user->id)
                <tr>
                  <td class="align-middle"> {{$key+1}} </td>
                  <td class="align-middle text-nowrap">

                    <a href="{{url('gforum/addpost')}}">
                    <div class="media">
                      <img class="d-flex g-width-40 g-height-40 rounded-circle g-mr-10" src="{{asset('uploads/avatars/'.$user->avatar)}}" alt="{{$user->name}}">
                      <div class="media-body align-self-center">
                        <h5 class="h6 align-self-center g-font-weight-600 g-color-purple mb-0">{{$user->name}}</h5>
                        {{$post->post_title}} -  
                        <i class="align-middle g-font-size-default mr-1 icon-hotel-restaurant-003 u-line-icon-pro"></i> {{$post->created_at->toFormattedDateString()}};
                        <i class="align-middle g-font-size-default mr-1 icon-finance-206 u-line-icon-pro"></i> 10 comments; 
                        <i class="align-middle g-font-size-default mr-1 icon-medical-022 u-line-icon-pro"></i> 20 likes
                        </div>
                    </div>
                    </a>
                    
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
    </div>
  </div>
  </section>
    <!--End Basic Table-->

  
  </script>
  @include('layouts.public.includes.footer')

  @endsection