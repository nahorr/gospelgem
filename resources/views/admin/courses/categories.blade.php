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
                    <strong>Course Category Table</strong>
                    <button type="button" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15 pull-right" id="addCourseCategory">New Course Category</button>
                 </h2>
                 </header>
                 <!-- Add Category -->
                 <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/courses/storeAddCourseCategory') }}" id="ajaxFormAddCourseCategory" style="display: none;">
                   {{ csrf_field() }}

                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Course Category Name</label>
                     <input type="text" class="form-control rounded-0 form-control-md" id="course_category" name="course_category_name" required="">
                   </div>
                   <div class="form-group g-mb-25 col-md-6">
                    <label for="exampleTextarea">Please description this category</label>
                    <textarea class="form-control rounded-0 form-control-md"  id="category_description" name="course_category_description" required=""></textarea>
                  </div>
                   <div class="form-group g-mb-25 col-md-6">
                    <button type="submit" class="btn btn-success" id="ajaxSubmitAddCourseCategory">Add Category</button>
                    <button type="button" class="btn btn-danger" id="ajaxCloseAddCourseCategory">Close</button>
                  </div>

                 </form>
                 <!-- End General Controls -->
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                 <script>
                    jQuery(document).ready(function(){

                      $("#ajaxFormAddCourseCategory").addClass("noDisplay");
                      
                      $("#ajaxSubmitAddCourseCategory").click(function(){
        
                         $("#ajaxFormAddCourseCategory").hide(1000);
                        
                      });

                      $("#addCourseCategory").click(function(){
                         $("#ajaxFormAddCourseCategory").show(1000);
                      });

                      $("#ajaxCloseAddCourseCategory").click(function(){
                         $("#ajaxFormAddCourseCategory").hide(1000);
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

                      @foreach($coursecategories as $key => $category)
                      
                       <tr>
                        <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$key+1}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left"> {{$category->course_category_name}} 

                              <a class="btn btn-sm btn-outline-success" href="{{url('admin/courses/showcategorycourses/'. $category->id)}}" role="button"> {{$courses->where('course_category_id', $category->id)->count()}} Courses</a>
                            </div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$category->course_category_description}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           {{$category->created_at->toFormattedDateString()}}
                         </td>
                         <td class="g-px-30">
                          <div class="row">
                            
                                <div class="col-md-12">
                    
                                  <button type="button" class="btn btn-md u-btn-indigo g-mr-10 g-mb-15" id="editCourseCategory-{{$category->id}}">Edit Category</button>
                                
                                <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/courses/storeEditCourseCategory',[$category->id]) }}" id="ajaxFormEditCourseCategory-{{$category->id}}" style="display: none;">
                                  {{ csrf_field() }}

                                  <div class="form-group g-mb-25" >
                                    <label for="post_title">Category Name</label>
                                    <input type="text" class="form-control rounded-0 form-control-md" id="category_name" name="course_category_name" value="{{$category->course_category_name}}" required="">
                                  </div>
                                  <div class="form-group g-mb-25">
                                  <label for="exampleTextarea">Please description this category</label>
                                  <textarea class="form-control rounded-0 form-control-md"  id="category_description" name="course_category_description" required="">{{$category->course_category_description}}</textarea>
                                </div>
                                  <div class="form-group g-mb-25">
                                   <button type="submit" class="btn btn-success" id="ajaxSubmitEditCourseCategory-{{$category->id}}">Update</button>
                                   <button type="button" class="btn btn-danger" id="ajaxCloseEditCourseCategory-{{$category->id}}">Close</button>
                                 </div>
                                </form>
                                <!-- End General Controls -->
                               </div> 
                                <script>
                                   jQuery(document).ready(function(){

                                     $("#ajaxFormEditCourseCategory-{{$category->id}}").addClass("noDisplay");
                                     
                                     $("#ajaxSubmitEditCourseCategory-{{$category->id}}").click(function(){
                                        $("#ajaxFormEditCourseCategory-{{$category->id}}").hide(1000);
                                     });

                                     $("#editCourseCategory-{{$category->id}}").click(function(){
                                        $("#ajaxFormEditCourseCategory-{{$category->id}}").show(1000);
                                     });

                                     $("#ajaxCloseEditCourseCategory-{{$category->id}}").click(function(){
                                        $("#ajaxFormEditCourseCategory-{{$category->id}}").hide(1000);
                                     });
                                  });

                                       
                              </script>
                            
                          </div>

                         </td>

                         <td class="g-px-30">
                          <div class="row">
                            
                                <div class="col-md-3">
                                  <a href="{{url('admin/courses/deleteCourseCategory/'. $category->id)}}" class="btn btn-md u-btn-darkred g-mr-10" onclick="return confirm('Are you sure you want to Delete this record?')">Delete</a>
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