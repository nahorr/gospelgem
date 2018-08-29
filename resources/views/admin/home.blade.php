@extends('admin.app')

@section('content')

@include('admin.includes.header')


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

        @include('admin.includes.sidebar')

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">

                 @include('admin.includes.metrics')

                 <header class="g-mb-20">
                   <h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">Users Table</h2>
                 </header>

                 <div class="table-responsive g-mb-40">
                   <table class="table u-table--v3 g-color-black">
                     <thead>
                       <tr>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Name</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Role</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Sign Up Date</div>

                             
                           </div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Status</div>

                           
                           </div>
                         </th>
                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Delete</div>

                           
                           </div>
                         </th>
                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Action</div>

                           
                           </div>
                         </th>
                       </tr>
                     </thead>

                     <tbody>

                      @foreach($users as $key => $user)
                      @if($user->id > 1)
                       <tr>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">
                               <img class="g-width-36 g-height-36 rounded-circle g-mr-15" src="{{asset('uploads/avatars/'.$user->avatar)}}" alt="{{$user->name}} picture">
                             </div>

                             <div class="media-body align-self-center text-left">{{$user->name}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">

                          @If($user->is_admin == 1)

                            Administrator

                          @else

                            User

                          @endif

                         </td>
                         <td class="g-px-30">{{$user->created_at->toFormattedDateString()}}</td>
                         <td class="g-px-30">
                           <div class="d-inline-block">
                             <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                             <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                             @If($user->verified == 1)

                               Verified

                             @else

                               Not Verified

                             @endif
                             </span>
                           </div>
                         </td>
                         <td class="g-px-30">
                          <div class="row">
                            
                                <div class="col-md-3">
                                  <a href="{{url('admin/home/delete/'. $user->id)}}" class="btn btn-sm u-btn-darkred g-mr-10" onclick="return confirm('Are you sure you want to Delete this record?')">Delete</a>
                                </div>
                            
                          </div>

                         </td>
                         <td class="g-px-30">
                        
                          <div class="row">
                            
                            @if($user->is_admin == 0 )
                              <div class="row">
                                
                                
                                <div class="col-md-3">
                                  <form class="form-group" action="{{ url('/admin/home/makeAdmin', [$user->id])}}" method="POST">
                                    {{ csrf_field() }}
                                      <input name="is_admin" type="hidden" value="1">
                                      
                                      <button class="btn btn-sm u-btn-darkpurple g-mr-10" onclick="return confirm('Are you sure you want to make this user admin?')">Make Admin
                                      </button>
                                  </form>
                                </div>
                                
                              </div>
                              @else
                              <div class="row">
                                
                                <div class="col-md-3">
                                  <form class="form-group" action="{{ url('/admin/home/makeUser', [$user->id])}}" method="POST">
                                    {{ csrf_field() }}
                                      <input name="is_admin" type="hidden" value="0">
                                      
                                      <button class="btn btn-sm u-btn-deeporange g-mr-10" onclick="return confirm('Are you sure you want to remove this user from admin list?')">Make User
                                      </button>
                                  </form>
                                </div>
                              </div>
                              
                              @endif
                            </div>
                         </td>
                       </tr>
                       @endif
                      @endforeach
                     </tbody>
                   </table>
                 </div>
               </div>

            @include('admin.includes.footer')
            
        </div>
    </div>
</main>

@endsection