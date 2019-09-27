<!-- Modal -->
<div id="editGroupModal-{{$mygroup->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #222e44; color: #FFF;">
        <h4 class="modal-title pull-left"><strong>Edit group: {{$mygroup->name}}</h4>
        <button type="button" class="close" data-dismiss="modal"><span style="color: white">&times;</span></button>
        
      </div>
      <div class="modal-body">
        
          <!-- Add Course -->
          <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="post" action="{{ url('/groups/edit/'.$mygroup->id) }}">
             {{ csrf_field() }}
             <div class="form-group g-mb-25 col-md-12">
               <p style="color: red"> Editing </p>
             </div>
             
             <div class="form-group g-mb-25 col-md-12">
               <label for="post_title">Group Name</label>
               <input type="text" class="form-control rounded-0 form-control-md" id="name" name="name" required="" value="{{$mygroup->name}}">
             </div>
             <div class="form-group g-mb-25 col-md-12">
              <label for="exampleTextarea">Please description this group</label>
              <textarea class="form-control rounded-0 form-control-md"  id="description" name="description" required="">{{$mygroup->description}}</textarea>
            </div>
             <div class="form-group g-mb-25 col-md-6">
              <button type="submit" class="btn btn-success">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

           </form>
          <!-- Add Form -->
      </div>     
  </div>
</div>
</div>