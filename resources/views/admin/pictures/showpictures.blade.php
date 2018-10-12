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
                  @if (count($errors) > 0)
      
                    <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                    </div>

                  @endif

                 <header class="g-mb-20">
                   <h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">
                    <strong>{{ $picture_category->pic_category_name}} Picture Table</strong>
                    <button type="button" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15 pull-right" id="addPicture">New {{ $picture_category->pic_category_name}} Picture</button>
                 </h2>
                 </header>
                 <!-- Add Category -->
                 <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/storenewpicture', [$picture_category->id]) }}" id="ajaxFormNewPicture" enctype="multipart/form-data" style="display: none;">
                   {{ csrf_field() }}

                   <input type="hidden" id="picture_category_id" name="picture_category_id" value="{{$picture_category->id}}" required="">
                    <div class="form-group g-mb-25 col-md-3">
                       <label for="post_title">Picture Name(<span style="color: red"> No spaces: eg slider_1</span>)</label>
                       <input type="text" class="form-control rounded-0 form-control-md" id="picture_name" name="picture_name" required="">
                     </div>
                      

                   @if($picture_category->pic_category_name == 'Slider')

                    <div class="form-group g-mb-25 col-md-3">
                       <label for="post_title">Picture Title Left</label>
                       <input type="text" class="form-control rounded-0 form-control-md" id="picture_title_left" name="picture_title_left" required="">
                     </div>
                     <div class="form-group g-mb-25 col-md-3">
                       <label for="post_title">Picture Title Right</label>
                       <input type="text" class="form-control rounded-0 form-control-md" id="picture_title_right" name="picture_title_right" required="">
                     </div>
                     <div class="form-group g-mb-25 col-md-3">
                       <label for="post_title">Picture Description Left</label>
                       <input type="text" class="form-control rounded-0 form-control-md" id="picture_description_left" name="picture_description_left" required="">
                     </div>
                     <div class="form-group g-mb-25 col-md-3">
                       <label for="post_title">Picture Description Right</label>
                       <input type="text" class="form-control rounded-0 form-control-md" id="picture_description_right" name="picture_description_right" required="">
                     </div>
                    

                    @else
                     
                     <div class="form-group g-mb-25 col-md-3">
                       <label for="post_title">Picture Title</label>
                       <input type="text" class="form-control rounded-0 form-control-md" id="picture_title" name="picture_title" required="">
                     </div>
                     <div class="form-group g-mb-25 col-md-3">
                       <label for="post_title">Picture Description</label>
                       <input type="text" class="form-control rounded-0 form-control-md" id="picture_description" name="picture_description" required="">
                     </div>
                     <div class="form-group g-mb-25 col-md-3">
                       <label for="post_title">Picture Link/URL(<span style="color: red"> url redirected to when the picture/button is clicked</span>)</label>
                       <input type="text" class="form-control rounded-0 form-control-md" id="picture_link" name="picture_link" required="">
                     </div>

                   @endif
                  <!-- File Input -->
                    <div class="form-group g-mb-25 col-md-6">
                       <input type="file" name="picture" required="">
                    </div>
                  
                  <!-- End File Input -->
                  <div class="form-group g-mb-25 col-md-6">
                    <button type="submit" class="btn btn-success" id="ajaxSubmitaddPicture">Add Picture Category</button>
                    <button type="button" class="btn btn-danger" id="ajaxCloseAddPicture">Close</button>
                  </div>

                 </form>
                 <!-- End General Controls -->
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                 <script>
                    jQuery(document).ready(function(){

                      //$("#ajaxFormNewPicture").addClass("noDisplay");
                      
                      $("#addPicture").click(function(){
                         $("#ajaxFormNewPicture").show(1000);
                      });

                      $("#ajaxCloseAddPicture").click(function(){
                         $("#ajaxFormNewPicture").hide(1000);
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
                             <div class="d-flex align-self-center">Picture Name</div></div>
                         </th>

                         @if($picture_category->pic_category_name == 'Slider')

                           <th class="g-px-30">
                             <div class="media">
                               <div class="d-flex align-self-center">Picture Title Left</div></div>
                           </th>
                           <th class="g-px-30">
                             <div class="media">
                               <div class="d-flex align-self-center">Picture Title Right</div></div>
                           </th>
                           <th class="g-px-30">
                             <div class="media">
                               <div class="d-flex align-self-center">Picture Description Left</div></div>
                           </th>
                           <th class="g-px-30">
                             <div class="media">
                               <div class="d-flex align-self-center">Picture Description Right</div></div>
                           </th>

                          @else

                            <th class="g-px-30">
                             <div class="media">
                               <div class="d-flex align-self-center">Picture Title</div></div>
                           </th>
                           
                           <th class="g-px-30">
                             <div class="media">
                               <div class="d-flex align-self-center">Picture Description</div></div>
                           </th>

                           <th class="g-px-30">
                             <div class="media">
                               <div class="d-flex align-self-center">URL</div></div>
                           </th>

                           

                         @endif

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
                        
                       </tr>
                     </thead>

                     <tbody>

                      @foreach($site_pictures as $key => $picture)
                      
                       <tr>
                        <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$key+1}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$picture->picture_name}}</div>
                           </div>
                         </td>
                         @if($picture_category->pic_category_name == 'Slider')
                           <td class="g-px-30">
                             <div class="media">
                               <div class="media-body align-self-center text-left">{{$picture->picture_title_left}}</div>
                             </div>
                           </td>
                           <td class="g-px-30">
                             <div class="media">
                               <div class="media-body align-self-center text-left">{{$picture->picture_title_right}}</div>
                             </div>
                           </td>
                           <td class="g-px-30">
                             <div class="media">
                               <div class="media-body align-self-center text-left">{{$picture->picture_description_left}}</div>
                             </div>
                           </td>
                           <td class="g-px-30">
                             <div class="media">
                               <div class="media-body align-self-center text-left">{{$picture->picture_description_right}}</div>
                             </div>
                           </td>
                        @else

                          <td class="g-px-30">
                             <div class="media">
                               <div class="media-body align-self-center text-left">{{$picture->picture_title}}</div>
                             </div>
                           </td>
                           
                           <td class="g-px-30">
                             <div class="media">
                               <div class="media-body align-self-center text-left">{{$picture->picture_description}}</div>
                             </div>
                           </td>
                           <td class="g-px-30">
                             <div class="media">
                               <div class="media-body align-self-center text-left">{{$picture->picture_link}}</div>
                             </div>
                           </td>

                        @endif
                        
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{ $picture->created_at->toFormattedDateString() }}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                            <img src="{{asset('unify/assets/img/pictures/'.$picture->picture)}}" alt="{{$picture->picture_name}}" class="img-thumbnail" style="max-height: 10%;">
                         </td>
                         <td class="g-px-30">
                          <div class="row">
                            
                                <div class="col-md-12">
                    
                                <button type="button" class="btn btn-md u-btn-indigo g-mr-10 g-mb-15" id="editPicture-{{$picture->id}}">Edit Picture</button>
                                
                                <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/storeEditPicture',[$picture->id]) }}" id="ajaxFormEditPicture-{{$picture->id}}" enctype="multipart/form-data" style="display: none;">
                                  {{ csrf_field() }}

                                   <input type="hidden" id="picture_category_id" name="picture_category_id" value="{{$picture->picture_category_id}}" required="">
                                   <input type="hidden" id="picture_name" name="picture_name" value="{{$picture->picture_name}}" required="">
                                                                     
                                  <div class="form-group g-mb-25 col-md-6">
                                     <input type="file" name="picture" required="">
                                  </div>
                                  <div class="form-group g-mb-25">
                                   <button type="submit" class="btn btn-success" id="ajaxSubmitEditPicture-{{$picture->id}}">Update</button>
                                   <button type="button" class="btn btn-danger" id="ajaxCloseEditPicture-{{$picture->id}}">Close</button>
                                 </div>
                                </form>
                                <!-- End General Controls -->
                               </div> 
                                <script>
                                   jQuery(document).ready(function(){

                                     //$("#ajaxFormEditPicCategory-{{$picture->id}}").addClass("noDisplay");
                                     
                                    $("#editPicture-{{$picture->id}}").click(function(){
                                        $("#ajaxFormEditPicture-{{$picture->id}}").show(1000);
                                     });

                                     $("#ajaxCloseEditPicture-{{$picture->id}}").click(function(){
                                        $("#ajaxFormEditPicture-{{$picture->id}}").hide(1000);
                                     });
                                  });

                               </script>
                            
                          </div>

                         </td>

                         <!-- <td class="g-px-30">
                          <div class="row">
                            
                                <div class="col-md-3">
                                  <a href="{{url('admin/deletepicture/'. $picture->id)}}" class="btn btn-md u-btn-darkred g-mr-10" onclick="return confirm('Are you sure you want to Delete this record?')">Delete</a>
                                </div>
                            
                          </div>

                         </td> -->
                         

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