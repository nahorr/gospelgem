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
                    <strong>{{ $category_pics->pic_category_name}} Picture Table</strong>
                    <button type="button" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15 pull-right" id="addPicture">New {{ $category_pics->pic_category_name}} Picture</button>
                 </h2>
                 </header>
                 <!-- Add Category -->
                 <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/storeNewPicture') }}" id="ajaxFormNewPicture" style="display: none;">
                   {{ csrf_field() }}

                   <input type="hidden" id="picture_category_id" name="picture_category_id" value="{{$category_pics->id}}" required="">

                   <div class="form-group g-mb-25 col-md-3">
                     <label for="post_title">Picture Name(<no spaces: eg slider_1)</label>
                     <input type="text" class="form-control rounded-0 form-control-md" id="pic_category_name" name="pic_category_name" required="">
                   </div>
                   <div class="form-group g-mb-25 col-md-6">
                    <label for="exampleTextarea">Please description this picture</label>
                    <textarea class="form-control rounded-0 form-control-md"  id="pic_category_description" name="pic_category_description" placeholder="Say something like - This Category is for index pictures..." required=""></textarea>
                  </div>
                   <div class="form-group g-mb-25 col-md-6">
                    <button type="submit" class="btn btn-success" id="ajaxSubmitaddPicture">Add Picture Category</button>
                    <button type="button" class="btn btn-danger" id="ajaxCloseAddPicture">Close</button>
                  </div>

                 </form>
                 <!-- End General Controls -->
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                 <script>
                    jQuery(document).ready(function(){

                      $("#ajaxFormNewPicture").addClass("noDisplay");
                      
                      $("#ajaxSubmitaddPicture").click(function(){
        
                         $("#ajaxFormNewPicture").hide(1000);
                        
                      });

                      $("#addPicture").click(function(){
                         $("#ajaxFormNewPicture").show(1000);
                      });

                      $("#ajaxCloseAddPicture").click(function(){
                         $("#ajaxFormNewPicture").hide(1000);
                      });
                   });

                        $(function () {
                            $('#ajaxFormNewPicture').submit(function (e) {
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
                             <div class="d-flex align-self-center">Picture Name</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Picture Description</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Date Added</div>

                             
                           </div>
                         </th>
                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Preview</div>

                           
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

                      @foreach($pic_categories as $key => $category)
                      
                       <tr>
                        <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$key+1}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$category->pic_category_name}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$category->pic_category_description}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           {{$category->created_at->toFormattedDateString()}}
                         </td>
                         <td class="g-px-30">
                          <div class="row">
                            
                                <div class="col-md-12">
                    
                                <button type="button" class="btn btn-md u-btn-indigo g-mr-10 g-mb-15" id="editPicCategory-{{$category->id}}">Edit Category</button>
                                
                                <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/storeEditPicCategory',[$category->id]) }}" id="ajaxFormEditPicCategory-{{$category->id}}" style="display: none;">
                                  {{ csrf_field() }}

                                  <div class="form-group g-mb-25" >
                                    <label for="post_title">Category Name</label>
                                    <input type="text" class="form-control rounded-0 form-control-md" id="pic_ategory_name" name="pic_category_name" value="{{$category->pic_category_name}}" required="">
                                  </div>
                                  <div class="form-group g-mb-25">
                                  <label for="exampleTextarea">Please description this category</label>
                                  <textarea class="form-control rounded-0 form-control-md"  id="pic_category_description" name="pic_category_description" required="">{{$category->pic_category_description}}</textarea>
                                </div>
                                  <div class="form-group g-mb-25">
                                   <button type="submit" class="btn btn-success" id="ajaxSubmitEditPicCategory-{{$category->id}}">Update</button>
                                   <button type="button" class="btn btn-danger" id="ajaxCloseEditPicCategory-{{$category->id}}">Close</button>
                                 </div>
                                </form>
                                <!-- End General Controls -->
                               </div> 
                                <script>
                                   jQuery(document).ready(function(){

                                     $("#ajaxFormEditPicCategory-{{$category->id}}").addClass("noDisplay");
                                     
                                     $("#ajaxSubmitEditPicCategory-{{$category->id}}").click(function(){
                                        $("#ajaxFormEditPicCategory-{{$category->id}}").hide(1000);
                                     });

                                     $("#editPicCategory-{{$category->id}}").click(function(){
                                        $("#ajaxFormEditPicCategory-{{$category->id}}").show(1000);
                                     });

                                     $("#ajaxCloseEditPicCategory-{{$category->id}}").click(function(){
                                        $("#ajaxFormEditPicCategory-{{$category->id}}").hide(1000);
                                     });
                                  });

                                       $(function () {
                                           $('#ajaxFormEditPicCategory-{{$category->id}}').submit(function (e) {
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
                                  <a href="{{url('admin/deletePicCategory/'. $category->id)}}" class="btn btn-md u-btn-darkred g-mr-10" onclick="return confirm('Are you sure you want to Delete this record?')">Delete</a>
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