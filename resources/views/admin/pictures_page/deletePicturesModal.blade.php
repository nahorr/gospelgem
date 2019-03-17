
<!-- Modal -->
<div id="deletePicturesModal-{{$picture->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #222e44; color: #FFF;">
        <h4 class="modal-title pull-left"><strong>Delete Pictures</strong></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        
        <ul class="list-group">
          @for ($i = 0; $i < count(json_decode($picture->filename)); $i++)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ json_decode($picture->filename)[$i] }}<br>
            <img src="{{asset('uploads/pagepictures/'. json_decode($picture->filename)[$i] )}}" alt="..." class="json_decode($picture->filename)[$i]" style="max-height: 150px; max-width: 150px">

            <form method="post" action="{{url('admin/deletepic/'. $picture->id)}}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input type="text" name="filename" class="form-control" value="{{ json_decode($picture->filename)[$i] }}" hidden="">
              <button type="submit" class="btn-sm btn-danger" onclick="return confirm('Are you sure you want to Delete this Picture?')">Delete</button>
            </form>
          </li>
          @endfor
        </ul>
          
      </div>     
  </div>
</div>
</div>
