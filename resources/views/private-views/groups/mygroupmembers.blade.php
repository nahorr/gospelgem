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
	                        <th><strong>First Name</strong></th>
	                        <th><strong>Last Name</strong></th>
	                        <th><strong>Join Date</strong></th>
	                        <th><strong>Action</strong></th>
	                      </tr>
	                    </thead>

	                    <tbody>
	                    @foreach($group->users as $key=>$groupmember)
	                    	
	                      <tr>
	                        <td>{{ $key+1 }}</td>
	                        <td><strong>{{ $group->name }}</strong></td>
	                        <td>
	                        	@if($groupmember->first_name == NULL)
	                        	  {{ $groupmember->name }}
	                        	@else
	                        		{{ $groupmember->first_name }}
	                        	@endif
	                        </td>
	                        <td>
	                        	@if($groupmember->last_name == NULL)
	                        	  {{ $groupmember->name }}
	                        	@else
	                        		{{ $groupmember->last_name }}
	                        	@endif
	                        </td>
	                        <td>
	                        	{{ $groupmember->pivot->created_at->toFormattedDateString() }}
	                        </td>
	                  		<td>
	                        	<a href="" class="btn btn-md u-btn-lightred g-mr-10 g-mb-15" data-toggle="tooltip" data-placement="top" title="You are the group admin. Deleting this group with delete all data associated with the group."><strong><i class="icon-media-066 u-line-icon-pro"></i> Suspend</strong>
	                        	</a>
	                        	<a href="" class="btn btn-md u-btn-primary g-mr-10 g-mb-15" data-toggle="tooltip" data-placement="top" title="You are the group admin. Deleting this group with delete all data associated with the group."><strong><i class="icon-media-066 u-line-icon-pro"></i> Approve</strong></a>
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