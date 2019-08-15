<!-- Modal -->
<div id="addMemberModal-{{$group->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #222e44; color: #FFF;">
        <h4 class="modal-title pull-left"><strong>Add a member to group: <span style="color: red">{{$group->name}}</span></strong></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        
          <!-- Add Course -->
          <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/posts/groups/addmembers/'.$group->id) }}">
            {{ csrf_field() }}

            <div class="form-group g-mb-25 col-md-12">
              <select class="form-control" name="user_id" id="user_id">
                 <option selected disabled>Please select a user</option>
                 @foreach($users as $key=>$member)                    
                   <option value="{{ $member->id }}">{{$member->name}} - {{$member->email}}</option>
                 @endforeach
               </select>
            </div>
            <div class="form-group g-mb-25 col-md-6">
             <button type="submit" class="btn btn-success">Submit</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
           </div>

          </form>
          <!-- Add Form -->
      </div>     
  </div>
</div>
</div>