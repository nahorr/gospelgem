<!-- Modal -->
<div id="courseDetailsModal-{{$registration->id}}{{$registration->course->course_id}}" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #FF5733;">
        <h4 class="modal-title pull-left" style="color: #FFF;">Course: {{$registration->course->course_name}}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        
          <ul class="list-group">
            <li class="list-group-item">
              <img src="{{asset('unify/assets/img/coursepictures/'.$registration->course->course_picture)}}" alt="{{$registration->course->course_name}}" class="img-thumbnail" style="max-height: 125px; max-width: 213px">
            </li>
            <li class="list-group-item"><strong>Mentor:</strong> {{$registration->course->course_mentor}}</li>
            <li class="list-group-item"><strong>Code:</strong> {{$registration->course->course_code}}</li>
            <li class="list-group-item"><strong>Name:</strong> {{$registration->course->course_name}}</li>
            <li class="list-group-item"><strong>Price:</strong> {{$registration->course->currency}}{{$registration->course->price}}</li>
            <li class="list-group-item"><strong>Description:</strong> {{$registration->course->course_description}}</li>
            <li class="list-group-item"><strong>Venue:</strong> {{$registration->course->course_venue}}</li>
            <li class="list-group-item"><strong>Start Date:</strong> {{$registration->course->start_date->toFormattedDateString()}}</li>
            <li class="list-group-item"><strong>Start Time:</strong> {{ date('h:i A', strtotime($registration->course->start_time)) }}</li>
            <li class="list-group-item"><strong>End Date:</strong> {{$registration->course->end_date->toFormattedDateString()}}</li>
            <li class="list-group-item"><strong>End Time:</strong> {{ date('h:i A', strtotime($registration->course->end_time)) }}</li>
            
          </ul>
       

      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
  </div>
</div>