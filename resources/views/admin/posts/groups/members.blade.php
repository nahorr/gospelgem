@extends('admin.app')

@section('content')

<style>
  .noDisplay {
    display: none;
  }
</style>

@include('admin.includes.header')

<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

        @include('admin.includes.sidebar')

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
          <div class="g-pa-20">
           @include('admin.includes.metrics')
           @include('flash::message')

             <header class="g-mb-20">
               <h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">
                <strong><span style="color: red;">{{$group->name}}</span> Group Members</strong>
                <button type="button" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15 pull-right" id="addMember-{{$group->id}}">Add a member</button>
             </h2>
             </header>
              @include('admin.posts.groups.addMemberModal')
              <script type="text/javascript">
                $('#addMember-{{$group->id}}').on('click', function(e){
                    e.preventDefault();
                  $('#addMemberModal-{{$group->id}}').modal('show');
                })
              </script>
                 <div class="table-responsive g-mb-40">
                   <table class="table u-table--v3 g-color-black table-bordered table-striped">
                     <thead>
                       <tr>
                        <th class="g-px-30">
                          <div class="media">
                            <div class="d-flex align-self-center"><strong>#</strong></div></div>
                        </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center"><strong>User Image</strong></div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center"><strong>Name</strong></div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center"><strong>Approved</strong></div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center"><strong>Suspended</strong></div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center"><strong>Date Added</strong></div>  
                           </div>
                         </th>
                         <th class="g-px-30">
                          <div class="media">
                             <div class="d-flex align-self-center"><strong>Delete</strong></div>
                           </div>
                         </th>
                       </tr>
                     </thead>

                     <tbody>

                      @foreach($group->users as $key => $member)
                      
                       <tr>
                        <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$key+1}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">
                              <img class="g-width-36 g-height-36 rounded-circle g-mr-15" src="{{asset('uploads/avatars/'.$member->avatar)}}" alt="{{$member->name}} picture">
                            </div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$member->name}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                          <div class="row">
                            <div class="col-md-3">
                              @if($member->pivot->approved == true)
                                <a href="{{url('admin/posts/groups/member/delete/'. $member->id)}}" class="btn btn-md u-btn-success g-mr-10">YES</a>
                              @else
                                <a href="{{url('admin/posts/groups/member/delete/'. $member->id)}}" class="btn btn-md u-btn-darkred g-mr-10">NO</a>
                              @endif
                              </div>
                            </div>
                          </td>
                          <td class="g-px-30">
                          <div class="row">
                            <div class="col-md-3">
                              @if($member->pivot->suspended == true)
                                <a href="{{url('admin/posts/groups/member/delete/'. $member->id)}}" class="btn btn-md u-btn-success g-mr-10">YES</a>
                              @else
                                <a href="{{url('admin/posts/groups/member/delete/'. $member->id)}}" class="btn btn-md u-btn-darkred g-mr-10">NO</a>
                              @endif
                              </div>
                            </div>
                          </td>
                         <td class="g-px-30">
                           {{$member->created_at->toFormattedDateString()}}
                         </td>
                         <td class="g-px-30">
                          <div class="row">
                            <div class="col-md-3">
                                <a href="{{url('admin/posts/groups/member/delete/'. $member->id)}}" class="btn btn-md u-btn-darkred g-mr-10" onclick="return confirm('Are you sure you want to Delete this record?')">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                       
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