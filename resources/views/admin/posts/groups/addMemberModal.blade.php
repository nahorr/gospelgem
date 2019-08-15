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
          <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/videos/addvideo') }}">
            {{ csrf_field() }}

            <div class="form-group g-mb-25 col-md-12">
              <label for="post_title">Video Title</label>
              <input type="text" class="form-control rounded-0 form-control-md" id="video_title" name="video_title" required="">
            </div>
            <div class="form-group g-mb-25 col-md-12">
              <label for="post_title">Video Description</label>
              <textarea class="form-control rounded-0 form-control-md"  id="video_description" name="video_description"></textarea>
            </div>
            <div class="form-group g-mb-25 col-md-12">
              <label for="post_title">Video link/url</label>
              <input type="text" class="form-control rounded-0 form-control-md" id="video_link" name="video_link" required="">
            </div>
            <div class="form-group g-mb-25 col-md-12">
              <label for="post_title">Video Page</label>
              <input type="text" class="form-control rounded-0 form-control-md" id="video_page" name="video_page" required="">
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