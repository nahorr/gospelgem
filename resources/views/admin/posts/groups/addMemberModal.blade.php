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

            <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-4 g-mb-25 col-md-12">
              <select class="js-select u-select--v3-select u-sibling w-100" title="Select a user" style="display: none;" data-live-search="true" name="user_id">
                @foreach($users as $key=>$member)
                  <option value="{{ $member->id }}" data-content='<span class="d-flex align-items-center w-100"><i class="hs-admin-rocket g-font-size-18 g-mr-15"></i><span>{{$member->name}} - {{$member->email}}</span></span>'>{{$member->name}} - {{$member->email}}</option>
                @endforeach
              </select>

              <div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
                <i class="hs-admin-angle-down"></i>
              </div>
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