@extends('admin.app')

@section('content')

<style>
  .noDisplay {
    display: none;
  }
</style>

@include('admin.includes.header')

<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel">

        @include('admin.includes.sidebar')

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">

                 @include('admin.includes.metrics')

                 @include('flash::message')

                 @include('errors.form_error')


                <header class="g-mb-20">
                   <h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">
                    <strong>Course Category: <span style="color: red">{{$coursecategory->course_category_name}}</span></strong>
                    <button type="button" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15 pull-right" id="addCourse">Add New Course</button>
                  </h2>
                </header>
                 <!-- Add Course -->
                 <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/courses/storeAddCourse') }}" id="ajaxFormAddCourse" enctype="multipart/form-data" style="display: none;">
                   {{ csrf_field() }}

                   <!-- <input type="hidden" name="course_category_id" value="{{$coursecategory->id}}" required=""> -->

                   <div class="form-group g-mb-25 col-md-3">
                     <select class="form-control" name="course_category_id" id="course_category_id">
                       <option selected disabled>Please select a course category</option>
                       @foreach($course_categories as $key=>$course_category)                    
                         <option value="{{ $course_category->id }}">{{$course_category->course_category_name}}</option>
                       @endforeach
                     </select>
                   </div>

                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Course Code</label>
                     <input type="text" class="form-control rounded-0 form-control-md" id="course_code" name="course_code" required="">
                   </div>
                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Course Name</label>
                     <input type="text" class="form-control rounded-0 form-control-md" id="course_name" name="course_name" required="">
                   </div>
                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Course Mentor</label>
                     <input type="text" class="form-control rounded-0 form-control-md" id="course_mentor" name="course_mentor" required="">
                   </div>
                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Currency(<span style="color: red;">enter USD, NGN, or FREE if course is free</span>)</label>
                     <input type="text" class="form-control rounded-0 form-control-md" id="currency" name="currency" required="">
                   </div>
                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Price</label>
                     <input type="number" class="form-control rounded-0 form-control-md" id="price" name="price">
                   </div>
                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Paystack Link <span style="color: red"> :Leave blank if no Paystack Link</span></label>
                     <input type="text" class="form-control rounded-0 form-control-md" id="paystack_link" name="paystack_link">
                   </div>
                   <div class="form-group g-mb-25 col-md-6">
                    <label for="exampleTextarea">Course Description</label>
                    <textarea class="form-control rounded-0 form-control-md"  id="course_description" name="course_description" required=""></textarea>
                  </div>

                  <div class="form-group g-mb-25 col-md-6">
                    <label for="course_venue">Venue</label>
                    <textarea class="form-control rounded-0 form-control-md"  id="course_venue" name="course_venue" required=""></textarea>
                  </div>

                  <div class="form-group g-mb-25 col-md-6">
                     <label for="post_title">Course Moodle Link <span style="color: red"> :Leave blank if no Course Moodle Link<br> if this course is on the Moodel site, go to the course on course.gosgem.com and copy the course url. Then paste it here</span></label>
                     <input type="text" class="form-control rounded-0 form-control-md" id="course_moodle_link" name="course_moodle_link">
                   </div>
                   <div class="form-group g-mb-25 col-md-6">
                     <label for="post_title">Enrolment Key<span style="color: red"> :Leave blank if no enrollment key<br> Go to course.gosgem.com and add this elrolment key to the course</span></label>
                     <input type="text" class="form-control rounded-0 form-control-md" id="enrolment_key" name="enrolment_key">
                   </div>

                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Course Start Date</label>
                     <input class="form-control" type="date" value="2011-08-19" name="start_date">
                   </div>

                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Start Time</label>
                     <input class="form-control" type="time" value="13:45" name="start_time">
                   </div>

                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Course End Date</label>
                     <input class="form-control" type="date" value="2011-08-19" name="end_date">
                   </div>

                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">End Time</label>
                     <input class="form-control" type="time" value="13:45" name="end_time">
                   </div>

                  <!-- File Input -->
                    <div class="form-group g-mb-25 col-md-6">
                       <input type="file" name="course_picture" required="">
                    </div>
                  
                  <!-- End File Input -->

                   <div class="form-group g-mb-25 col-md-6">
                    <button type="submit" class="btn btn-success" id="ajaxSubmitAddCourse">Add Course</button>
                    <button type="button" class="btn btn-danger" id="ajaxCloseAddCourse">Close</button>
                  </div>

                 </form>
                 <!-- End General Controls -->
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                 <script type="text/javascript">
                    jQuery(document).ready(function(){

                      $("#ajaxFormAddCourse").addClass("noDisplay");
                      
                      $("#ajaxSubmitAddCourse").click(function(){
        
                         $("#ajaxFormAddCourse").hide(1000);
                        
                      });

                      $("#addCourse").click(function(){
                         $("#ajaxFormAddCourse").show(1000);
                      });

                      $("#ajaxCloseAddCourse").click(function(){
                         $("#ajaxFormAddCourse").hide(1000);
                      });
                   });

                 </script>

  

                 <div class="table-responsive g-mb-40">
                   <table class="table u-table--v3 g-color-black">
                     <thead>
                       <tr>
                        <th class="g-px-30">
                          <div class="media">
                            <div class="d-flex align-self-center">#</div></div>
                        </th>
                        <!-- <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Code</div></div>
                         </th> -->
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Name</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Mentor</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Price</div></div>
                         </th>
                         <!-- <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Description</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Venue</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Moodle Link</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Picture</div></div>
                         </th>-->
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Start Date</div></div>
                         </th>
                          <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Start Time</div></div>
                         </th>
                         <!-- <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">End Date</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">End Time</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Date Added</div>
                           </div>
                         </th>  -->
                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">View/Edit</div>

                           
                           </div>
                         </th>
                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Delete</div>

                           
                           </div>
                         </th>
                       </tr>
                     </thead>

                     <tbody>

                      @foreach($categorycourses as $key => $course)
                      
                       <tr>
                        <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$key+1}}</div>
                           </div>
                         </td>
                         <!-- <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left"> {{$course->course_code}} 
                            </div>
                           </div>
                         </td> -->
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$course->course_name}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$course->course_mentor}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">
                              @if($course->currency == 'USD')
                                <strong>CENTS</strong>
                              @elseif($course->currency == 'NGN')
                                <strong>KOBO</strong>
                              @else
                                <strong>{{ $course->currency }}</strong>
                              @endif
                              {{$course->price}}</div>
                           </div>
                         </td>
                         <!-- <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$course->course_description}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$course->course_venue}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$course->course_moodle_link}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <img src="{{asset('unify/assets/img/coursepictures/'.$course->course_picture)}}" alt="{{$course->course_name}}" class="img-thumbnail" style="max-height: 100px; max-width: 100px">
                           </div>
                         </td> -->
                         <td class="g-px-30">
                           {{$course->start_date->toFormattedDateString()}}
                         </td>
                         <td class="g-px-30">
                           {{ date('h:i A', strtotime($course->start_time)) }}
                         </td>
                         <!-- <td class="g-px-30">
                           {{ $course->end_date->toFormattedDateString() }}
                         </td>
                         <td class="g-px-30">
                           {{ date('h:i A', strtotime($course->end_time)) }}
                         </td>
                         <td class="g-px-30">
                           {{$course->created_at->toFormattedDateString()}}
                         </td> -->

                         <td class="g-px-30">
                            <button type="button" class="btn btn-md u-btn-indigo" id="editCourseModalButton-{{$course->id}}">View/Edit</button>

                            @include('admin.courses.editcoursemodal')

                            <script type="text/javascript">
                              $('#editCourseModalButton-{{$course->id}}').on('click', function(e){
                                 e.preventDefault();
                                $('#editCourseModal-{{$course->id}}').modal('show');
                              })
                            </script>

                         </td>

                         <td class="g-px-30">
                          <div class="row">
                            
                                <div class="col-md-3">
                                  <a href="{{url('admin/courses/deleteCourse/'. $course->id)}}" class="btn btn-md u-btn-darkred" onclick="return confirm('Are you sure you want to Delete this record?')">Delete</a>
                                </div>
                            
                          </div>

                         </td>
                         

                       </tr>
                       
                      @endforeach
                     </tbody>
                   </table>
                 </div>
              
         

            @include('admin.includes.footer')
            
        </div>
    </div>
</main>

@endsection