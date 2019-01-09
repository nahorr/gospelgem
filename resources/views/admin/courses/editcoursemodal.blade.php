<!-- Modal -->
<div id="editCourseModal-{{$course->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title pull-left">Editing Course: {{$course->course_name}}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        
          <!-- Add Course -->
          <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/courses/storeUpdateCourse', [$course->id]) }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <input type="hidden" name="course_category_id" value="{{$coursecategory->id}}" required="">

            <div class="form-group g-mb-25 col-md-6">
              <label for="post_title">Course Code</label>
              <input type="text" class="form-control rounded-0 form-control-md" id="course_code" name="course_code" value="{{$course->course_code}}" disabled="">
            </div>
            <div class="form-group g-mb-25 col-md-6">
              <label for="post_title">Course Name</label>
              <input type="text" class="form-control rounded-0 form-control-md" id="course_name" name="course_name" required=""  value="{{$course->course_name}}">
            </div>
            <div class="form-group g-mb-25 col-md-6">
              <label for="post_title">Course Mentor</label>
              <input type="text" class="form-control rounded-0 form-control-md" id="course_mentor" name="course_mentor" required="" value="{{$course->course_mentor}}">
            </div>
            <div class="form-group g-mb-25 col-md-6">
              <label for="post_title">Price(USD)</label>
              <input type="number" class="form-control rounded-0 form-control-md" id="price" name="price" value="{{$course->price}}">
            </div>
            <div class="form-group g-mb-25 col-md-10">
              <label for="paystack_link">Paystack Link</label>
              <input type="text" class="form-control rounded-0 form-control-md" id="paystack_link" name="paystack_link" value="{{$course->paystack_link}}">
            </div>
            <div class="form-group g-mb-25 col-md-10">
             <label for="exampleTextarea">Course Description</label>
             <textarea class="form-control rounded-0 form-control-md"  id="course_description" name="course_description" required=""> {{$course->course_description}}</textarea>
           </div>
           <div class="form-group g-mb-25 col-md-10">
              <label for="course_venue">Venue</label>
             <textarea class="form-control rounded-0 form-control-md"  id="course_venue" name="course_venue" required=""> {{$course->course_venue}}</textarea>
            </div>
           <div class="form-group g-mb-25 col-md-10">
              <label for="post_title">Course Moodle Link</label>
              <input type="text" class="form-control rounded-0 form-control-md" id="course_moodle_link" name="course_moodle_link" value="{{$course->course_moodle_link}}">
            </div>
            

            <div class="form-group g-mb-25 col-md-6">
              <label for="post_title">Course Start Date</label>
              <input class="form-control" type="date"  name="start_date" value="{{$course->start_date->format('Y-m-d')}}">
            </div>
            <div class="form-group g-mb-25 col-md-6">
              <label for="post_title">Start Time</label>
              <input class="form-control" type="time"  name="start_time" value="{{$course->start_time}}">
            </div>
            <div class="form-group g-mb-25 col-md-6">
              <label for="post_title">Course End Date</label>
              <input class="form-control" type="date" name="end_date" value="{{$course->end_date->format('Y-m-d')}}">
            </div>
            <div class="form-group g-mb-25 col-md-6">
              <label for="">End Time</label>
              <input class="form-control" type="time"  name="end_time" value="{{$course->end_time}}">
            </div>
           <!-- File Input -->
             <div class="form-group g-mb-25 col-md-6">
                <img src="{{asset('unify/assets/img/coursepictures/'.$course->course_picture)}}" alt="{{$course->course_name}}" class="img-thumbnail" style="max-height: 100px; max-width: 100px">
                <input type="file" name="course_picture">
             </div>
           
           <!-- End File Input -->

            <div class="form-group g-mb-25 col-md-6">
             <button type="submit" class="btn btn-success">Update Course</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
           </div>

          </form>
          <!-- Add Form -->
       

      </div>

  </div>
</div>