@extends('layouts.private.app')

@section('content')

@include('layouts.private.includes.header')


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

        @include('layouts.private.includes.sidebar')

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                @include('layouts.private.includes.metrics')

            		<a href="{{url('/courses')}}" class="btn btn-md u-btn-orange g-mr-10 g-mb-15">Available courses</a>

                    <div class="table-responsive g-mb-40">
                    
	                  <table class="table u-table--v3--bordered g-color-black">
	                    <thead>
	                      <tr>
	                        <th>#</th>
	                        <th>Coure Name</th>
	                        <th>Mentor</th>
	                        <th>Price</th>
	                        <th>Registered</th>
	                        <th>Actions</th>
	                      </tr>
	                    </thead>

	                    <tbody>
	                    @foreach($registrations as $key=>$registration)
	                      <tr>
	                        <td>{{ $key+1 }}</td>
	                        <td>{{ $registration->course->course_name }}</td>
	                        <td>{{ $registration->course->course_mentor }}</td>
	                        <td>
	                        	@if($registration->course->price ==null)
	                        		{{ $registration->course->currency }} 
	                        	@else
	                        		{{ $registration->course->currency }} {{ $registration->course->price/100 }}
	                        	@endif
	                        </td>
	                        <td>{{ $registration->created_at->toFormattedDateString() }}</td>
	                        <td>
	                        	<button type="button" class="btn btn-danger" id="courseDetails-{{$registration->course->course_id }}">Course Details</button>
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