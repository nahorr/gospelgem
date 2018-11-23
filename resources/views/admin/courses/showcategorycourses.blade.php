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

                 @include('errors.form_error')

                 <header class="g-mb-20">
                   <h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">
                    <strong>Mentor {{$coursecategory->course_category_name}} Courses</strong>
                    <button type="button" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15 pull-right" id="addCourse">New Course</button>
                 </h2>
                 </header>
                 <!-- Add Category -->
                 <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/courses/storeAddCourse') }}" id="ajaxFormAddCourse" enctype="multipart/form-data" style="display: none;">
                   {{ csrf_field() }}

                   <input type="hidden" name="course_category_id" value="{{$coursecategory->id}}" required="">

                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Course Code</label>
                     <input type="text" class="form-control rounded-0 form-control-md" id="course_code" name="course_code" required="">
                   </div>
                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Course Name</label>
                     <input type="text" class="form-control rounded-0 form-control-md" id="course_name" name="course_name" required="">
                   </div>
                   <div class="form-group g-mb-25 col-md-6">
                    <label for="exampleTextarea">Course Description</label>
                    <textarea class="form-control rounded-0 form-control-md"  id="course_description" name="course_description" required=""></textarea>
                  </div>
                  <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Course Moodle Link</label>
                     <input type="text" class="form-control rounded-0 form-control-md" id="course_moodle_link" name="course_moodle_link" required="">
                   </div>
                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Course Mentor</label>
                     <input type="text" class="form-control rounded-0 form-control-md" id="course_mentor" name="course_mentor" required="">
                   </div>

                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Course Start Date</label>
                     <input class="form-control" type="date" value="2011-08-19" name="start_date">
                   </div>

                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Course End Date</label>
                     <input class="form-control" type="date" value="2011-08-19" name="end_date">
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
                 <script>
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
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Category Name</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Category Description</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Date Added</div>

                             
                           </div>
                         </th>
                         
                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Edit</div>

                           
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
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left"> {{$course->course_code}} 
                            </div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$course->course_name}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           {{$course->created_at->toFormattedDateString()}}
                         </td>
                         <td class="g-px-30">
                          <div class="row">
                            
                                <div class="col-md-12">
                    
                                  <button type="button" class="btn btn-md u-btn-indigo g-mr-10 g-mb-15" id="editCourseCategory-{{$course->id}}">Edit Category</button>
                                
                                <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/courses/storeEditCourseCategory',[$course->id]) }}" id="ajaxFormEditCourseCategory-{{$course->id}}" style="display: none;">
                                  {{ csrf_field() }}

                                  <div class="form-group g-mb-25" >
                                    <label for="post_title">Category Name</label>
                                    <input type="text" class="form-control rounded-0 form-control-md" id="category_name" name="course_category_name" value="{{$course->course_name}}" required="">
                                  </div>
                                  <div class="form-group g-mb-25">
                                  <label for="exampleTextarea">Please description this category</label>
                                  <textarea class="form-control rounded-0 form-control-md"  id="category_description" name="course_category_description" required="">{{$course->course_description}}</textarea>
                                </div>
                                  <div class="form-group g-mb-25">
                                   <button type="submit" class="btn btn-success" id="ajaxSubmitEditCourseCategory-{{$course->id}}">Update</button>
                                   <button type="button" class="btn btn-danger" id="ajaxCloseEditCourseCategory-{{$course->id}}">Close</button>
                                 </div>
                                </form>
                                <!-- End General Controls -->
                               </div> 
                                <script>
                                   jQuery(document).ready(function(){

                                     $("#ajaxFormEditCourseCategory-{{$course->id}}").addClass("noDisplay");
                                     
                                     $("#ajaxSubmitEditCourseCategory-{{$course->id}}").click(function(){
                                        $("#ajaxFormEditCourseCategory-{{$course->id}}").hide(1000);
                                     });

                                     $("#editCourseCategory-{{$course->id}}").click(function(){
                                        $("#ajaxFormEditCourseCategory-{{$course->id}}").show(1000);
                                     });

                                     $("#ajaxCloseEditCourseCategory-{{$course->id}}").click(function(){
                                        $("#ajaxFormEditCourseCategory-{{$course->id}}").hide(1000);
                                     });
                                  });

                                       
                              </script>
                            
                          </div>

                         </td>

                         <td class="g-px-30">
                          <div class="row">
                            
                                <div class="col-md-3">
                                  <a href="{{url('admin/courses/deleteCourseCategory/'. $course->id)}}" class="btn btn-md u-btn-darkred g-mr-10" onclick="return confirm('Are you sure you want to Delete this record?')">Delete</a>
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