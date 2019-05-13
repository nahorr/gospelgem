@extends('admin.app')

@section('content')

<style>
  .noDisplay {
    display: none;
  }
</style>

@include('admin.includes.header')

<main class="container-fluid px-0 g-pt-65">
  <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
    @include('admin.includes.sidebar')
    <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">

        <div class="g-pa-20">

        @include('admin.includes.metrics')

         @include('flash::message')
          @if (count($errors) > 0)

            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div>

          @endif
          <div class="alert alert-danger" role="alert">
            Please click the "Edit Video" button to edit the welcome page video. It is not necessary to add a new video.<br>
            <span style="color: #5D6D7E">The "Video Title" will be displayed on the 'welcome page'</span>
          </div>
          <header class="g-mb-20">
            <h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">Videos Table
              <button type="button" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15 pull-right" id="addVideo">Add Video</button>
            </h2>
          </header>
          @include('admin.videos.addVideoModal')
          <script type="text/javascript">
            $('#addVideo').on('click', function(e){
                e.preventDefault();
              $('#addVideoModal').modal('show');
            })
          </script>
          <div class="table-responsive g-mb-40">
            <table class="table u-table--v3--bordered g-color-black">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Link/url</th>
                  <th>Page</th>
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                @foreach($videos as $key=>$video)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{$video->video_title}}</td>
                  <td>{{$video->video_description}}</td>
                  <td>
                    <a href="{{$video->video_link}}" target="_blank">
                      {{$video->video_link}}
                    </a>                   
                  </td>
                  <td>{{$video->video_page}}</td>
                  <td>
                    <button type="button" class="btn btn-md u-btn-pink g-mr-10 g-mb-15 pull-left" id="editVideo">Edit Video</button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @include('admin.videos.editVideoModal')
            <script type="text/javascript">
              $('#editVideo').on('click', function(e){
                  e.preventDefault();
                $('#editVideoModal').modal('show');
              })
            </script>
          </div>
            
        </div>

        @include('admin.includes.footer')
        
    </div>
  </div>
</main>

@endsection