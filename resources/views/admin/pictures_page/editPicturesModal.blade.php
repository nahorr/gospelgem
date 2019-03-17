
<!-- Modal -->
<div id="editPicturesModal-{{$picture->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #222e44; color: #FFF;">
        <h4 class="modal-title pull-left"><strong>Editing Picture(s): {{$picture->title}}</strong></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        
          <!-- Add Course -->
          <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/admin/pictures_page/editpictures/'.$picture->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group g-mb-25 col-md-12">
             <label for="post_title"><strong>Title</strong></label>
             <input type="text" class="form-control rounded-0 form-control-md" name="title" value="{{$picture->title}}">
            </div>
           <div class="form-group g-mb-25 col-md-12">
             <label for="post_title"><strong>Description</strong></label>
             <textarea class="form-control rounded-0 form-control-md"  name="description">{{$picture->description}}</textarea>
           </div>
          <!-- File Input -->
         
            <label class="form-group col-md-12" for="post_title">
              <strong>Add More Pictures: </strong>
              <span style="color: red">You can add more than one pictures</span>
            </label>
            <div class="form-group input-group control-group-{{$picture->id}} increment-{{$picture->id}} g-mb-25 col-md-12" >
              <input type="file" name="filename[]" class="form-control" multiple>
            </div>
            <!-- End File Input -->

            <div class="form-group g-mb-25 col-md-6">
               <button type="submit" class="btn btn-primary">Update</button>
               <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>

          </form>
          <!-- Add Form -->
      </div>     
    </div>
  </div>
</div>