@extends('layouts.private.app')

@section('content')

@include('layouts.private.includes.header')


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

        @include('layouts.private.includes.sidebar')

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                @include('layouts.private.includes.metrics')

               
                     
                      <div class="g-pa-20">
                        <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Comments I posted
                          <div class="pull-right">
                            <a href="{{url('gforum')}}" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15">Back to GForum</a>
                          </div>
                        </h1>

                       
                        <div class="table-responsive g-mb-40">
                          <table class="table table-bordered table-hover u-table--v3 g-color-black">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th><i class="hs-admin-comments-smiley"> Reply to Post Titled</th>
                                <th><i class="hs-admin-calendar"> Date Posted</th>
                                <th><i class="hs-admin-check-box"></i> Approval Status</th>
                                <th><i class="hs-admin-bar-chart"></i> Stats</th>
                                <th><i class="hs-admin-pencil-alt"> Actions</th>
                              </tr>
                            </thead>

                            <tbody>
                              @foreach($comments->where('user_id', Auth::user()->id) as $key => $comment)
                              <tr>
                                <td> {{$key+1}} </td>
                                <td> {{ $comment->post->post_title }}</td>
                                <td> {{$comment->created_at->toFormattedDateString() }}</td>
                                <td>
                                  @if($comment->approved == 1)
                                    <span class="u-tags-v1 text-center g-width-110 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-weight-400 g-color-white g-rounded-50 g-py-4 g-px-15">    Approved
                                    </span>
                                  @else
                                    <span class="u-tags-v1 text-center g-width-110 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-weight-400 g-color-red g-rounded-50 g-py-4 g-px-15">    Pending...
                                    </span>
                                  @endif
                                </td>
                                <td>
                                  <a class="js-edit u-link-v5 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!">
                                    <i class="hs-admin-eye"></i>Views
                                  </a>
                                  <a class="u-link-v5 g-color-gray-light-v6 g-color-lightblue-v3--hover g-text-underline--none--hover g-ml-12" href="#!">
                                    <i class="hs-admin-heart"></i>Likes
                                  </a>
                                  <a class="u-link-v5 g-color-gray-light-v6 g-color-lightblue-v3--hover g-text-underline--none--hover g-ml-12" href="#!">
                                    <i class="hs-admin-comments"></i>comments
                                  </a>
                                </td>
                                <td>
                                  <a class="js-edit u-link-v5 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="{{url('gforum/comments/editcomment'.$comment->id)}}">
                                    <i class="hs-admin-pencil"></i>
                                  </a>
                                  <a class="u-link-v5 g-color-gray-light-v6 g-color-lightblue-v3--hover g-text-underline--none--hover g-ml-12" href="{{url('gforum/comment/deletecomment/'.$comment->id)}}" onclick="return confirm('Are you sure you want to Delete this record?')">
                                    <i class="hs-admin-trash"></i>
                                  </a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>

                        
                      </div>

                      

            </div>



            @include('layouts.private.includes.footer')
            
        </div>


    </div>


</main>


@endsection