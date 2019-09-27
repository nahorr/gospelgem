<!-- Modal -->
<div id="deleteGroupModal-{{$mygroup->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #FFF; color: darkred;">
        <h4 class="modal-title pull-left"><strong>Are you sure you you realy want to delete {{$mygroup->name}} group.</h4>
        <button type="button" class="close" data-dismiss="modal"><span style="color: white">&times;</span></button>
        
      </div>
      <div class="modal-body">
        
          <!-- Delete Group -->
          <a href="{{url('/groups/delete/'.$mygroup->id)}}" class="btn btn-md u-btn-darkred g-mr-10 g-mb-15">Delete Group</a>
          <!-- Delete Group -->
      </div>     
  </div>
</div>
</div>