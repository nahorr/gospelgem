  @extends('layouts.public.app')

  @section('content')
  
  @include('layouts.public.includes.nav-header')


  <!-- Popular Jobs -->
      <section class="g-py-100">
        <div class="container">
          <header class="text-center g-width-60x--md mx-auto g-mb-50">
            <h2 class="h1 g-color-gray-dark-v1 g-font-weight-300">Gosyan Groups({{$groups->count()}})</h2>
            <p class="lead">Please contact group admin or send a join request to the admin if you wish to join the group.</p>
            @include('flash::message')
          </header>
          <div class="row col-md-12">
            <a href="{{url('groups/showmygroups/'.Auth::user()->id)}}" class="btn btn-md u-btn-deeporange g-mb-15 pull-right" id="groupsButton"><i class="fa fa-user"></i> My Groups</a>
          </div>
          <div class="row g-mb-30">
            @foreach($groups as $group)
            <div class="col-lg-4 g-mb-40 g-mb-0--lg">
              <ul class="list-unstyled mb-0">
                <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                  <div class="d-flex align-self-center g-mt-3 g-mr-15">
                    @foreach($group->users as $key => $user)
                      @if($user->pivot->approved == 1 && $user->pivot->suspended == 0 && $loop->last)
                      <a href="{{url('/groups/showgroupposts/'.$group->id)}}">
                        <img class="g-width-40 g-height-40" src="{{asset('unify/assets/img-temp/logos/img1.png')}}" alt="{{$group->name}}">
                      </a>
                      @elseif($loop->last)
                        <a href="" onclick="return confirm('Your request to join this group is yet to be approved by the group admin')">
                        <img class="g-width-40 g-height-40" src="{{asset('unify/assets/img-temp/logos/img1.png')}}" alt="{{$group->name}}">
                      </a> 
                      @endif
                    @endforeach
                    
                  </div>
                  <div class="media-body">
                    @foreach($group->users as $key => $user)
                      @if($user->pivot->approved == 1 && $user->pivot->suspended == 0 && $loop->last)
                        <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="{{url('/groups/showgroupposts/'.$group->id)}}">{{$group->name}}</a>
                      @elseif($loop->last)
                        <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="" onclick="return confirm('Your request to join this group is yet to be approved by the group admin')">{{$group->name}}</a>
                      </a> 
                      @endif
                    @endforeach
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">                     
                        <i class="icon-people g-pos-rel g-top-1 mr-1"></i>
                        @foreach($group->users as $key => $user)
                          @if($loop->last)
                              {{$user->pivot->where('group_id',$group->id)->where('approved',1)->count()}} Members 
                          @endif
                        @endforeach 
                    </span>
                   
                      @if( in_array(\Auth::user()->id, $group->users->pluck('id')->toArray()) )
                        <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                        @foreach($group->users as $key => $user)
                          @if(Auth::user()->id == $user->pivot->user_id && $group->id == $user->pivot->group_id && $user->pivot->approved == 1 && $user->pivot->suspended == 0)
                          <a href="{{url('/groups/showgroupposts/'.$group->id)}}"  class="btn btn-sm u-btn-darkpurple g-mr-10" style="text-decoration: none">
                            <i class="icon-communication-057 u-line-icon-pro g-pos-rel g-top-1 mr-1"></i> View Posts ({{\App\Post::where('group_id',$group->id)->count()}})
                          </a>
                          @elseif($loop->last && Auth::user()->id == $user->pivot->user_id)
                          <a href=""  class="btn btn-sm u-btn-darkpurple g-mr-10" style="text-decoration: none" onclick="return confirm('Your request to join this group is yet to be approved by the group admin')">
                            <i class="icon-communication-057 u-line-icon-pro g-pos-rel g-top-1 mr-1"></i> Pending...  ({{\App\Post::where('group_id',$group->id)->count()}})
                          </a> 
                          @endif
                        @endforeach
                        </span>
                      @else
                        <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15 btn-group">
                          <form class="form-group" action="{{ url('/groups/joinrequest', [\Auth::user()->id,$group->id])}}" method="POST">
                            {{ csrf_field() }}
                              <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure you want to send a request to join this group?')">Join Group
                              </a>
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