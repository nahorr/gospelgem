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
                  @if (count($errors) > 0)
      
                    <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                    </div>

                  @endif

                 <header class="g-mb-20">
                   <h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">
                    <strong>Pictures Page Table</strong>
                    <button type="button" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15 pull-right" id="addPictures">New Picture(s)</button>
                 </h2>
                 </header>
                 @include('admin.pictures_page.addPicturesModal')
                 <script type="text/javascript">
                   $('#addPictures').on('click', function(e){
                       e.preventDefault();
                     $('#addPicturesModal').modal('show');
                   })
                 </script>

                 <div class="table-responsive g-mb-40">
                   <table class="table u-table--v3--bordered g-color-black">
                     <thead>
                       <tr>
                        <th class="g-px-30">
                          <div class="media">
                            <div class="d-flex align-self-center">#</div></div>
                        </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Picture Title</div></div>
                         </th>
                           
                          <th class="g-px-30">
                             <div class="media">
                               <div class="d-flex align-self-center">Picture Description</div></div>
                          </th>

                          <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Number of Pictures</div>
                           </div>
                         </th>

                          <th class="g-px-30">
                             <div class="media">
                               <div class="d-flex align-self-center">Date Added</div>
                             </div>
                          </th>

                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Edit</div>
                           </div>
                         </th>
                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Delete</div>
                           </div>
                         </th>
                        
                       </tr>
                     </thead>

                     <tbody>

                      @foreach($pictures as $key => $picture)
                      
                       <tr>
                        <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$key+1}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$picture->title}}</div>
                           </div>
                         </td>

                          <td class="g-px-30">
                             <div class="media">
                               <div class="media-body align-self-center text-left">{{$picture->description}}</div>
                             </div>
                          </td>
                        <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{ count(json_decode($picture->filename)) }}
                           </div>
                        </td>
                          
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{ $picture->created_at->toFormattedDateString() }}</div>
                           </div>
                         </td>
                          <td class="g-px-30">
                            <button type="button" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15" id="editPictures-{{$picture->id}}">Edit</button>
                         </td>
                         @include('admin.pictures_page.editPicturesModal')
                         <script type="text/javascript">
                           $('#editPictures-{{$picture->id}}').on('click', function(e){
                               e.preventDefault();
                             $('#editPicturesModal-{{$picture->id}}').modal('show');
                           })
                         </script>
                         <td class="g-px-30">
                            <a href="{{url('admin/delete/'. $picture->id)}}" class="btn btn-md u-btn-darkred g-mr-10" onclick="return confirm('Are you sure you want to Delete this record?')">Delete</a>
                         </td>

                       </tr>
                       
                      @endforeach
                     </tbody>
                   </table>
                 </div>
               </div>

            @include('admin.includes.footer')
            
        </div>
    </div>
</main>

@endsection