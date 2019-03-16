
<!-- Modal -->
<div id="addPicturesModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #222e44; color: #FFF;">
        <h4 class="modal-title pull-left"><strong>Add Pictures Form</strong></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        
          <!-- Add Course -->
          <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/pictures_page/addpictures') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

           <div class="form-group g-mb-25 col-md-12">
             <label for="post_title"><strong>Title</strong></label>
             <input type="text" class="form-control rounded-0 form-control-md" id="title" name="title" required="">
           </div>
           <div class="form-group g-mb-25 col-md-12">
             <label for="post_title"><strong>Description</strong></label>
             <textarea class="form-control rounded-0 form-control-md"  id="description" name="description"></textarea>
           </div>
          <!-- File Input -->
          <label class="form-group col-md-12" for="post_title"><strong>Add Picture(s): </strong><span style="color: red">You can add more than one pictures</span></label>
          <div class="form-group input-group control-group increment g-mb-25 col-md-12" >
            <input type="file" name="filename[]" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-success form-control rounded-0 form-control-md" type="button"><i class="fa fa-plus"></i> Add</button>
            </div>
          </div>
          <div class="clone d-none">
            <div class="form-group control-group input-group g-mb-25 col-md-12">
              <input type="file" name="filename[]" class="form-control">
              <div class="input-group-btn"> 
                <button class="btn btn-danger form-control rounded-0 form-control-md" type="button"><i class="fa fa-close"></i> Remove</button>
              </div>
            </div>
          </div>
          <!-- End File Input -->

            <div class="form-group g-mb-25 col-md-6">
             <button type="submit" class="btn btn-primary">Add Pictures(s)</button>
             <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
           </div>

          </form>
          <!-- Add Form -->
      </div>     
  </div>
</div>
</div>

<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").before(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>