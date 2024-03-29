@extends('layouts.private.app')

@section('content')

@include('layouts.private.includes.header')


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

        @include('layouts.private.includes.sidebar')

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                @include('layouts.private.includes.metrics')
                <h4 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-28">Leave a comment for the post <mark>{{ $post->post_title }}</mark></h4>
                <p><mark>Posted By: {{$post->user->name}} on: {{$post->created_at->toFormattedDateString()}}</mark></p>

                <p>Post:<br>{!! $post->post_body !!}</p>
                
                  <div class="row">
                              
                    <div class="col-md-8">
                  
                      <!-- General Controls -->
                      <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" enctype="multipart/form-data" method="post" action="{{ url('gforum/comments/storeleavecomment', [$post->id]) }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="post_id" value="{{ $post->id }}" >

                         <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >


                        <div class="form-group g-mb-25">
                          <label for="exampleTextarea"><strong>Your Comment</strong> <span style="color: darkred;">(you can add pictures and/or videos to your comment)</span></label>
                          <textarea class=" summernote autosize-transition form-control" id="post_comment" name="post_comment"></textarea>

                        </div>

                        <div class="form-group g-mb-25">
                          <label class="form-check-label g-mb-20">
                            <input type="hidden" name="show_profile_picture" value="0"><input type="checkbox" name="show_profile_picture" value="1" /><span style="color: darkred;">Include my profile picture with this comment</span>
                          </label>
                        </div>
                        <input type="submit" value="Submit Your Comment" />
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