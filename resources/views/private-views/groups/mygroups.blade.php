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
	                        <th>Exit Group</th>
	                        <th>Action</th>
	                      </tr>
	                    </thead>

	                    <tbody>
	                    @foreach($groups as $key=>$mygroup)
	                    @if($mygroup->group_admin == Auth::user()->id)
	                      <tr>
	                        <td>{{ $key+1 }}</td>
	                        <td>{{ $mygroup->name }}</td>
	                        <td>{{ $mygroup->name }}</td>
	                        <td>{{ $mygroup->description }}</td>
	                        <td>
	                        	$mygroup
	                        	<button type="button" class="btn btn-light" id="courseDetails-{{$mygroup->id}}{{$mygroup->course->course_id }}"><i class="fa fa-eye"></i> View Details 
	                        		@if($mygroup->course->enrolment_key)
	                        			& <span style="color: #186A3B"><strong>get Enrolment key</span></strong>
	                        		@endif
	                        	</button>
	                        	@include('private-views.courses.courseDetailsModal')
				                <script type="text/javascript">
				                  $('#courseDetails-{{$mygroup->id}}{{$mygroup->course->course_id }}').on('click', function(e){
				                     e.preventDefault();
				                    $('#courseDetailsModal-{{$mygroup->id}}{{$mygroup->course->course_id}}').modal('show');
				                  })
				                </script>
	                        </td>
	                        <td>
	                        	@if($mygroup->course->course_moodle_link == null)
	                        		<a href="" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15" data-toggle="tooltip" data-placement="top" title="Venue: {{$mygroup->course->course_venue}}"><strong><i class="icon-education-074 u-line-icon-pro"></i> ONSITE</strong></a>
	                        	@else
	                        		<a href="{{$mygroup->course->course_moodle_link}}" class="btn btn-md u-btn-pink g-mr-10 g-mb-15" data-toggle="tooltip" data-placement="top" title="Click to start or continue course. Please use your Gosgem email and password to login on our course management system when prompted"><strong><i class="icon-education-030 u-line-icon-pro"></i> ONLINE</strong></a>
	                        	@endif
	                        </td>
	                      </tr>
	                     @endif
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