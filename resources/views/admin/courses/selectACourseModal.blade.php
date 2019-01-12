<!-- Modal -->
<div id="selectACourseModal-{{ $course->id }}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="color:#F39C12;">
        <h4 class="modal-title pull-left">Please Select a Course</h4>
      </div>
      <div class="modal-body">
        
        <ul class="list-group">
          @foreach($courses as $key=>$list_course)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="{{ url('admin/courses/showcourseregistrations/'.$list_course->id) }}"><strong>{{ $list_course->course_name }}</strong></a>  
            <span class="badge badge-primary badge-pill">{{ $courses_registrations->where('course_id', $list_course->id)->count()}}</span>
          </li>
          @endforeach
        </ul>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>