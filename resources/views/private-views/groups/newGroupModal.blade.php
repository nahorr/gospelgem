<!-- Modal -->
<div id="newGroupModal-{{Auth::user()->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #222e44; color: #FFF;">
        <h4 class="modal-title pull-left"><strong>Create a new group</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        
          <!-- Add Course -->
          <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/posts/groups/create') }}">
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
          <!-- Add Form -->
      </div>     
  </div>
</div>
</div>