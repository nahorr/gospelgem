  @extends('layouts.public.app')

  @section('content')
  
  @include('layouts.public.includes.nav-header')


  <!-- Popular Jobs -->
      <section class="g-py-100">
        <div class="container">
          <header class="text-center g-width-60x--md mx-auto g-mb-50">
            <h2 class="h1 g-color-gray-dark-v1 g-font-weight-300">My Groups({{$user->groups->count()}})</h2>
            <p class="lead">Your groups are displayed below. You can select a group to continue.</p>
            @include('flash::message')
          </header>
          <div class="row col-md-12">
            <a href="{{url('groups/show')}}" class="btn btn-md u-btn-darkpurple g-mb-15 pull-right" id="groupsButton"><i class="fa fa-users"></i> All Groups</a>
          </div>
          <div class="row g-mb-30">
            @foreach($user->groups as $group)
            <div class="col-lg-4 g-mb-40 g-mb-0--lg">
              <ul class="list-unstyled mb-0">
                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    <a href="{{url('/groups/showgroupposts/'.$group->id)}}">
                      <img class="g-width-40 g-height-40" src="{{asset('unify/assets/img-temp/logos/img1.png')}}" alt="{{$group->name}}">
                    </a>
                  </div>
                  <div class="media-body">
                    <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="{{url('/groups/showgroupposts/'.$group->id)}}">{{$group->name}}</a>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">                     
                        <i class="icon-people g-pos-rel g-top-1 mr-1"></i> 
                            {{$group->users->count()}} Members 
                    </span>
                    @if( in_array(\Auth::user()->id, $group->users->pluck('id')->toArray()))
                      <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                        <a href="{{url('/groups/showgroupposts/'.$group->id)}}" style="text-decoration: none">
                          <i class="icon-communication-057 u-line-icon-pro g-pos-rel g-top-1 mr-1"></i> View Posts ({{\App\Post::where('group_id',$group->id)->count()}})
                        </a>
                      </span>
                    @else
                      <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                        <form class="form-group" action="{{ url('/groups/joinrequest', [\Auth::user()->id,$group->id])}}" method="POST">
                          {{ csrf_field() }}
                            <button class="btn btn-sm u-btn-deeporange g-mr-10" onclick="return confirm('Are you sure you want to send a request to join this group?')"><strong>Join Group</strong>
                            </button>
                        </form>
                      </span>
                      
                    @endif
                  </div>
                </li>
              </ul>
            </div>

            @endforeach
          </div>
        </div>
      </section>
      <!-- End Popular Jobs -->
  @include('layouts.public.includes.footer')
  @endsection