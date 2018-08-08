@extends('layouts.private.app')

@section('content')

@include('layouts.private.includes.header')


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

        @include('layouts.private.includes.sidebar')

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                @include('layouts.private.includes.metrics')
                <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-28">Add a new post</h1>
                  <div class="row">
                              
                    <div class="col-md-8">
                  
                      <!-- General Controls -->
                      <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" enctype="multipart/form-data" method="post" action="/gforum/storeaddpost">
                        {{ csrf_field() }}

                         <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >

                        <div class="form-group g-mb-25">
                          <label for="post_title">Post Tile</label>
                          <input type="text" class="form-control rounded-0 form-control-md" id="post_title" name="post_title" aria-describedby="postTitle" placeholder="Enter Your Post Title Here">
                        </div>


                        <div class="form-group g-mb-25">
                          <label for="exampleTextarea">Post Body <span style="color: darkred;">(you can add pictures and/or videos to your post)</span></label>
                          <textarea class=" summernote autosize-transition form-control" id="postBody" name="post_body" placeholder="Inspire people with this post"></textarea>

                        </div>

                        <div class="form-group g-mb-25">
                          <label for="exampleInputFile">Upload a cover picture for your post <span style="color: darkred;">(this will be the default picture)</span></label>
                          <input type="file" class="form-control" id="photos" name="photos[]" multiple="" />
                          
                          <small id="fileHelp" class="form-text text-muted"><span style="color: darkred;">Image size less than or equal to 2MB</span></small>
                        </div>

                        <div class="form-group g-mb-25">
                          <label class="form-check-label g-mb-20">
                            <input type="hidden" name="show_profile_picture" value="0"><input type="checkbox" name="show_profile_picture" value="1" /><span style="color: darkred;">Include my profile picture with this post</span>
                          </label>
                        </div>
                        <input type="submit" value="Add Post" />
                      </form>
                      <!-- End General Controls -->
                     
                      @if (count($errors) > 0)
                       <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                        </div>
                      @endif
                    
                  </div>
                 </div>             
                </div>
            </div>



            @include('layouts.private.includes.footer')
            
        </div>


    </div>


</main>

@endsection