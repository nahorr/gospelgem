@extends('layouts.private.app')

@section('content')

@include('layouts.private.includes.header')


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

        @include('layouts.private.includes.sidebar')

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                @include('layouts.private.includes.metrics')

            		<button type="button" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15 pull-right" id="addNewGroup-{{Auth::user()->id}}">Create new Group</button>
            		           
		             @include('private-views.groups.newGroupModal')
		             <script type="text/javascript">
		               $('#addNewGroup-{{Auth::user()->id}}').on('click', function(e){
		                   e.preventDefault();
		                 $('#newGroupModal-{{Auth::user()->id}}').modal('show');
		               })
		             </script>

                    <div class="table-responsive g-mb-40">
                    
	                  <table class="table u-table--v3--bordered g-color-black">
	                    <thead>
	                      <tr>
	                        <th><strong>#</strong></th>
	                        <th><strong>Group Name</strong></th>
	                        <th><strong>Group Admin</strong></th>
	                        <th><strong>Members</strong></th>
	                        <th><strong>Approved</strong></th>
	                        <th><strong>Suspended</strong></th>
	                        <th><strong>Action</strong></th>
	                      </tr>
	                    </thead>

	                    <tbody>
	                    @foreach(Auth::user()->groups as $key=>$mygroup)
	                    
	                      <tr>
	                        <td>{{ $key+1 }}</td>
	                        <td>{{ $mygroup->name }}</td>
	                        <td>
	                        	@if($mygroup->group_admin == Auth::user()->id)
	                        		{{Auth::user()->name}}
	                        	@endif
	                        </td>
	                        <td>
	                        	<a href="{{url('/groups/mygroupmembers/'.$mygroup->id)}}" class="btn btn-sm u-btn-purple g-mr-10 g-mb-15" data-toggle="tooltip" data-placement="top" title="View group members"><i class="fa fa-group"></i> 
	                        	@if($mygroup->users()->count() <= 1)                      	
	                        		{{ $mygroup->users()->count()}} member    	
	                        	@else
	                        		{{ $mygroup->users()->count()}} members
	                        	@endif
	                        	</a>
	                        </td>
	                        <td>
	                        	
	                     		@foreach($mygroup->users as $user)
	                     		@if($loop->last)
	                     		<div class="btn-group">
	                     			 <button type="submit" class="btn btn-sm btn-success">{{$user->pivot->where('approved',1)->where('group_id',$mygroup->id)->count()}} approved</button>
	                     			 <button type="submit" class="btn btn-sm btn-warning">
	                     				{{$user->pivot->where('approved',0)->where('group_id',$mygroup->id)->count()}} pending</button>
	                     		</div>
	                     		@endif
	                     		@endforeach
	                     		
	                        </td>
	                        <td>
	                     		@foreach($mygroup->users as $user)
	                     		@if($loop->last)
	                     		<div class="btn-group">
	                     			 <button type="submit" class="btn btn-sm btn-danger">{{$user->pivot->where('suspended',1)->where('group_id',$mygroup->id)->count()}} Suspended</button>
	                     		</div>
	                     		@endif
	                     		@endforeach
	                        </td>
	                        <td>
	                        	{{ $mygroup->description}}
	                        </td>
	                        <td>
	                        	@if($mygroup->group_admin == Auth::user()->id)
	                        	<div class="btn-group">
	                        		<a href="" id="editGroup-{{$mygroup->id}}" class="btn btn-md u-btn-teal g-mr-10 g-mb-15" data-toggle="tooltip" data-placement="top" title="Edit group info"><i class="fa fa-pencil"></i></a>
	                        		<a href="" id="deleteGroup-{{$mygroup->id}}" class="btn btn-md u-btn-lightred g-mr-10 g-mb-15" data-toggle="tooltip" data-placement="top" title="You are the group admin. Deleting this group will delete all data associated with the group."><i class="fa fa-trash"></i></a>	
	                        	</div>
	                        	@include('private-views.groups.editGroupModal')
					             <script type="text/javascript">
					               $('#editGroup-{{$mygroup->id}}').on('click', function(e){
					                   e.preventDefault();
					                 $('#editGroupModal-{{$mygroup->id}}').modal('show');
					               })
					             </script>
					             @include('private-views.groups.deleteGroupModal')
					             <script type="text/javascript">
					               $('#deleteGroup-{{$mygroup->id}}').on('click', function(e){
					                   e.preventDefault();
					                 $('#deleteGroupModal-{{$mygroup->id}}').modal('show');
					               })
					             </script>
	                        	@else
	                        		<a href="" class="btn btn-md u-btn-black g-mr-10 g-mb-15" data-toggle="tooltip" data-placement="top" title="Leave this group if you no longer wish to be a member of the group"><i class="fa fa-close"></i></a>
	                        	@endif
	                        </td>
	                      </tr>
	                    
	                     @endforeach
	                    </tbody>
	                  </table>
	                </div>
        

             </div>

            @include('layouts.private.includes.footer')
            
        </div>

    </div>
</main>

@endsection