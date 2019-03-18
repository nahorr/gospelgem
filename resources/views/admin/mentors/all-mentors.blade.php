@extends('admin.app')

@section('content')

@include('admin.includes.header')


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

        @include('admin.includes.sidebar')

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">

                  @include('admin.includes.metrics')
                  @include('flash::message')
                  @include('errors.form_error')

                <header class="g-mb-20">
                <h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0 pull-left">Mentors Table</h2>
                <button type="button" class="btn btn-md u-btn-deeporange g-mr-10 g-mb-15 pull-right" id="newMentor">New Mentor</a>
                </header>
                @include('admin.mentors.addMentorModal')
                <script type="text/javascript">
                  $('#newMentor').on('click', function(e){
                      e.preventDefault();
                    $('#addMentorModal').modal('show');
                  })
                </script>
                <div class="table-responsive g-mb-40">
                   <table class="table u-table--v3--bordered g-color-black">
                     <thead>
                       <tr>
                         <th>#</th>
                         <th>Picture</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>About</th>
                         <th>Created</th>
                         <th>Actions</th>
                       </tr>
                     </thead>

                     <tbody>
                      @foreach($mentors as $key=>$mentor)
                       <tr>
                         <td>{{ $key+1 }}</td>
                         <td>
                            <img src="{{asset('uploads/mentors/'.$mentor->picture)}}" alt="{{$mentor->full_name}}" class="img-thumbnail" style="max-height: 50px; max-width: 50px">
                         </td>
                         <td>{{ $mentor->full_name }}</td>
                         <td>{{ $mentor->email }}</td>
                         <td>{{ $mentor->about }}</td>
                         <td>{{ $mentor->created_at->toFormattedDateString() }}</td>
                         <td>
                          <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#" id="editMentor-{{$mentor->id}}">
                            <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6"></i>
                          </a>
                          @include('admin.mentors.editMentorModal')
                          <script type="text/javascript">
                            $('#editMentor-{{$mentor->id}}').on('click', function(e){
                                e.preventDefault();
                              $('#editMentorModal-{{$mentor->id}}').modal('show');
                            })
                          </script>
                          <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="{{ url('/admin/mentors/deletementor/'.$mentor->id) }}" onclick="return confirm('Are you sure you want to Delete this record?')">
                            <i class="hs-admin-trash g-font-size-18 g-color-gray-light-v6"></i>
                          </a>
                          
                         </td>

                       </tr>
                      @endforeach
                     </tbody>
                   </table>
                </div>
            </div>  
        </div>

        @include('admin.includes.footer')
        
    </div>
</main>

@endsection