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

                 <header class="g-mb-20">
                   <h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">
                    <strong>Category Table</strong>
                    <button type="button" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15 pull-right" id="addCategory">Add a Category</button>
                 </h2>
                 </header>
                 <!-- Add Category -->
                 <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/storeAddCategory') }}" id="ajaxFormAddCategory" style="display: none;">
                   {{ csrf_field() }}

                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Category Name</label>
                     <input type="text" class="form-control rounded-0 form-control-md" id="category" name="category_name" required="">
                   </div>
                   <div class="form-group g-mb-25 col-md-6">
                    <label for="exampleTextarea">Please description this category</label>
                    <textarea class="form-control rounded-0 form-control-md"  id="category_description" name="category_description" placeholder="Say something like - This Category is about..." required=""></textarea>
                  </div>
                   <div class="form-group g-mb-25 col-md-6">
                    <button type="submit" class="btn btn-success" id="ajaxSubmitaddCategory">Add Category</button>
                    <button type="button" class="btn btn-danger" id="ajaxCloseaddCategory">Close</button>
                  </div>

                 </form>
                 <!-- End General Controls -->
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                 <script>
                    jQuery(document).ready(function(){

                      $("#ajaxFormAddCategory").addClass("noDisplay");
                      
                      $("#ajaxSubmitaddCategory").click(function(){
        
                         $("#ajaxFormAddCategory").hide(1000);
                        
                      });

                      $("#addCategory").click(function(){
                         $("#ajaxFormAddCategory").show(1000);
                      });

                      $("#ajaxCloseaddCategory").click(function(){
                         $("#ajaxFormAddCategory").hide(1000);
                      });
                   });

                        $(function () {
                            $('#ajaxFormAddCategory').submit(function (e) {
                                e.preventDefault()  // prevent the form from 'submitting'

                                var url = e.target.action  // get the target
                                var formData = $(this).serialize() // get form data
                                $.post(url, formData, function (response) { // send; response.data will be what is returned
                                    location.reload();
                                })
                            })
                        })
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

                      @foreach($categories as $key => $category)
                      
                       <tr>
                        <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$key+1}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$category->category_name}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$category->category_description}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           {{$category->created_at->toFormattedDateString()}}
                         </td>
                         <td class="g-px-30">
                          <div class="row">
                            
                                <div class="col-md-12">
                    
                                  <button type="button" class="btn btn-md u-btn-indigo g-mr-10 g-mb-15" id="editCategory-{{$category->id}}">Edit Category</button>
                                
                                <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/storeEditCategory',[$category->id]) }}" id="ajaxFormEditCategory-{{$category->id}}" style="display: none;">
                                  {{ csrf_field() }}

                                  <div class="form-group g-mb-25" >
                                    <label for="post_title">Category Name</label>
                                    <input type="text" class="form-control rounded-0 form-control-md" id="category_name" name="category_name" value="{{$category->category_name}}" required="">
                                  </div>
                                  <div class="form-group g-mb-25">
                                  <label for="exampleTextarea">Please description this category</label>
                                  <textarea class="form-control rounded-0 form-control-md"  id="category_description" name="category_description" required="">{{$category->category_description}}</textarea>
                                </div>
                                  <div class="form-group g-mb-25">
                                   <button type="submit" class="btn btn-success" id="ajaxSubmitEditCategory-{{$category->id}}">Update</button>
                                   <button type="button" class="btn btn-danger" id="ajaxCloseEditCategory-{{$category->id}}">Close</button>
                                 </div>
                                </form>
                                <!-- End General Controls -->
                               </div> 
                                <script>
                                   jQuery(document).ready(function(){

                                     $("#ajaxFormEditCategory-{{$category->id}}").addClass("noDisplay");
                                     
                                     $("#ajaxSubmitEditCategory-{{$category->id}}").click(function(){
                                        $("#ajaxFormEditCategory-{{$category->id}}").hide(1000);
                                     });

                                     $("#editCategory-{{$category->id}}").click(function(){
                                        $("#ajaxFormEditCategory-{{$category->id}}").show(1000);
                                     });

                                     $("#ajaxCloseEditCategory-{{$category->id}}").click(function(){
                                        $("#ajaxFormEditCategory-{{$category->id}}").hide(1000);
                                     });
                                  });

                                       $(function () {
                                           $('#ajaxFormEditCategory-{{$category->id}}').submit(function (e) {
                                               e.preventDefault()  // prevent the form from 'submitting'

                                               var url = e.target.action  // get the target
                                               var formData = $(this).serialize() // get form data
                                               $.post(url, formData, function (response) { // send; response.data will be what is returned
                                                   location.reload();
                                               })
                                           })
                                       })
                                   </script>
                            
                          </div>

                         </td>

                         <td class="g-px-30">
                          <div class="row">
                            
                                <div class="col-md-3">
                                  <a href="{{url('admin/deleteCategory/'. $category->id)}}" class="btn btn-md u-btn-darkred g-mr-10" onclick="return confirm('Are you sure you want to Delete this record?')">Delete</a>
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