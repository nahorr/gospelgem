<!-- Modal -->
<div id="addMentorModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #222e44; color: #FFF;">
        <h4 class="modal-title pull-left"><strong>Add Mentor Form</strong></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        
          <!-- Add Course -->
          <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/mentors/addmentor') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group g-mb-25 col-md-12">
              <label for="post_title">Full Name</label>
              <input type="text" class="form-control rounded-0 form-control-md" id="full_name" name="full_name" required="">
            </div>
            <div class="form-group g-mb-25 col-md-12">
              <label for="post_title">Email</label>
              <input type="email" class="form-control rounded-0 form-control-md" id="email" name="email">
            </div>
            <div class="form-group g-mb-25 col-md-12">
              <label for="post_title">About Mentor</label>
              <textarea class="form-control rounded-0 form-control-md"  id="about" name="about"></textarea>
            </div>
           <!-- File Input -->
             <div class="form-group g-mb-25 col-md-12">
              <label for="post_title">Mentor Picture</label><br>
                <input type="file" name="picture">
             </div>
           
           <!-- End File Input -->

            <div class="form-group g-mb-25 col-md-6">
             <button type="submit" class="btn btn-success">Add Mentor</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
           </div>

          </form>
          <!-- Add Form -->
      </div>     
  </div>
</div>
</div>