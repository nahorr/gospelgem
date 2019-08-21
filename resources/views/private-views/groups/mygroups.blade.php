@extends('layouts.private.app')

@section('content')

@include('layouts.private.includes.header')


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

        @include('layouts.private.includes.sidebar')

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                @include('layouts.private.includes.metrics')

            		<a href="{{url('/courses')}}" class="btn btn-md u-btn-orange g-mr-10 g-mb-15">Create New Group</a>

                    <div class="table-responsive g-mb-40">
                    
	                  <table class="table u-table--v3--bordered g-color-black">
	                    <thead>
	                      <tr>
	                        <th>#</th>
	                        <th>Group Name</th>
	                        <th>Group Admin</th>
	                        <th>Memmber</th>
	                        <th>Description</th>
	                        <th>Action</th>
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
	                        <td>{{ $mygroup->users()->count()}}
	                        <td>
	                        	{{ $mygroup->description}}
	                        </td>
	                        <td>
	                        	@if($mygroup->group_admin == Auth::user()->id)
	                        		<a href="" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15" data-toggle="tooltip" data-placement="top" title="You are the group admin. Deleting this group with delete all data associated with the group."><strong><i class="icon-media-066 u-line-icon-pro"></i> Delete Group</strong></a>
	                        	@else
	                        		<a href="" class="btn btn-md u-btn-pink g-mr-10 g-mb-15" data-toggle="tooltip" data-placement="top" title="Exit this group if no longer wish to be a member of the group"><strong><i class="icon-education-030 u-line-icon-pro"></i> Exit Group</strong></a>
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