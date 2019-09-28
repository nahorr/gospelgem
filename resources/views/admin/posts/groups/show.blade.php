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
                <strong>Gosyan Group Table</strong>
                <button type="button" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15 pull-right" id="addgroup">Add New Group</button>
             </h2>
             </header>
             <!-- Add group -->
             <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/posts/groups/create') }}" id="ajaxFormAddgroup" style="display: none;">
               {{ csrf_field() }}
               <input type="hidden" id="group_admin" name="group_admin" value="{{Auth::user()->id}}" required="">
               <div class="form-group g-mb-25 col-md-3">
                 <label for="post_title">Group Name</label>
                 <input type="text" class="form-control rounded-0 form-control-md" id="name" name="name" required="">
               </div>
               <div class="form-group g-mb-25 col-md-6">
                <label for="exampleTextarea">Please description this group</label>
                <textarea class="form-control rounded-0 form-control-md"  id="description" name="description" placeholder="Say something like - This group is about..." required=""></textarea>
              </div>
               <div class="form-group g-mb-25 col-md-6">
                <button type="submit" class="btn btn-success" id="ajaxSubmitaddgroup">Add group</button>
                <button type="button" class="btn btn-danger" id="ajaxCloseaddgroup">Close</button>
              </div>

             </form>
             <!-- End General Controls -->
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
             <script>
                jQuery(document).ready(function(){
                  $("#ajaxFormAddgroup").addClass("noDisplay");
                  
                  $("#ajaxSubmitaddgroup").click(function(){
    
                     $("#ajaxFormAddgroup").hide(1000);
                    
                  });
                  $("#addgroup").click(function(){
                     $("#ajaxFormAddgroup").show(1000);
                  });
                  $("#ajaxCloseaddgroup").click(function(){
                     $("#ajaxFormAddgroup").hide(1000);
                  });
               });
                    $(function () {
                        $('#ajaxFormAddgroup').submit(function (e) {
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
                             <div class="d-flex align-self-center">Group Name</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Group Admin</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Description</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Members</div></div>
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

                      @foreach($groups as $key => $group)
                      
                       <tr>
                        <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$key+1}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$group->name}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{\App\User::where('id', $group->group_admin)->first()->name}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$group->description}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">
                              
                              <a href="{{url('admin/posts/groups/members/'. $group->id)}}" class="btn btn-sm u-btn-orange">{{$group->users->count()}} <i class="fa fa-users"></i> | View/add/edit</a>
                            </div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           {{$group->created_at->toFormattedDateString()}}
                         </td>
                         <td class="g-px-30">
                          <div class="row">
                            
                                <div class="col-md-12">
                    
                                  <button type="button" class="btn btn-md u-btn-indigo g-mr-10 g-mb-15" id="editgroup-{{$group->id}}">Edit group</button>
                                
                                <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/posts/groups/edit',[$group->id]) }}" id="ajaxFormEditgroup-{{$group->id}}" style="display: none;">
                                  {{ csrf_field() }}

                                  <div class="form-group g-mb-25" >
                                    <label for="post_title">group Name</label>
                                    <input type="text" class="form-control rounded-0 form-control-md" id="name" name="name" value="{{$group->name}}" required="">
                                  </div>
                                  <div class="form-group g-mb-25">
                                  <label for="exampleTextarea">Please description this group</label>
                                  <textarea class="form-control rounded-0 form-control-md"  id="description" name="description" required="">{{$group->description}}</textarea>
                                </div>
                                  <div class="form-group g-mb-25">
                                   <button type="submit" class="btn btn-success" id="ajaxSubmitEditgroup-{{$group->id}}">Update</button>
                                   <button type="button" class="btn btn-danger" id="ajaxCloseEditgroup-{{$group->id}}">Close</button>
                                 </div>
                                </form>
                                <!-- End General Controls -->
                               </div> 
                                <script>
                                   jQuery(document).ready(function(){
                                     $("#ajaxFormEditgroup-{{$group->id}}").addClass("noDisplay");
                                     
                                     $("#ajaxSubmitEditgroup-{{$group->id}}").click(function(){
                                        $("#ajaxFormEditgroup-{{$group->id}}").hide(1000);
                                     });
                                     $("#editgroup-{{$group->id}}").click(function(){
                                        $("#ajaxFormEditgroup-{{$group->id}}").show(1000);
                                     });
                                     $("#ajaxCloseEditgroup-{{$group->id}}").click(function(){
                                        $("#ajaxFormEditgroup-{{$group->id}}").hide(1000);
                                     });
                                  });
                                       $(function () {
                                           $('#ajaxFormEditgroup-{{$group->id}}').submit(function (e) {
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
                                  <a href="{{url('admin/posts/groups/delete/'. $group->id)}}" class="btn btn-md u-btn-darkred g-mr-10" onclick="return confirm('Are you sure you want to Delete this record?')">Delete</a>
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