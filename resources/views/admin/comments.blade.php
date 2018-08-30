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

                 <header class="g-mb-20">
                   <h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0"><strong>Comments</strong></button></h2>
                 </header>
                
                 <div class="table-responsive g-mb-40">
                   <table class="table u-table--v3 g-color-black">
                     <thead>
                       <tr>
                        <th class="g-px-30">
                          <div class="media">
                            <div class="d-flex align-self-center">#</div></div>
                        </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">By User</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">For Post</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Date Added</div>

                             
                           </div>
                         </th>
                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">View Comment</div>

                           
                           </div>
                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Approve/Reject</div>

                           
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

                      @foreach($comments as $key => $comment)
                      
                       <tr>
                        <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$key+1}}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{$comment->user->name}}</div>
                           </div>
                         </td>
                      
                         <td class="g-px-30">
                           <div class="media">
                             <div class="media-body align-self-center text-left">{{ str_limit($comment->post->post_title, $limit = 30, $end = '...') }}</div>
                           </div>
                         </td>
                         <td class="g-px-30">
                           {{$comment->created_at->toFormattedDateString()}}
                         </td>
                         <td class="g-px-30">
                           <button class="btn btn-md u-btn-darkpurple g-mr-10" id="viewCommentModal" }}">View Post</button>
                         </td>
                         <td class="g-px-30">
                          <div class="row">
                            
                                <div class="col-md-3">
                                  @if($comment->approved == 0)
                                    <form class="form-group" action="{{ url('/admin/approveComment', [$comment->id])}}" method="POST">
                                      {{ csrf_field() }}
                                        <input name="approved" type="hidden" value="1">
                                        
                                        <button class="btn btn-md btn-success" type="submit">
                                          <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i>
                                          Aprrove
                                        </button>
          
                                    </form>
                                  @else
                                    <form class="form-group" action="{{ url('/admin/rejectComment', [$comment->id])}}" method="POST">
                                      {{ csrf_field() }}
                                        <input name="approved" type="hidden" value="0">
                                        
                                        <button class="btn btn-md btn-warning" type="submit">
                                          <i class="icon-dislike g-pos-rel g-top-1 g-mr-3"></i>
                                          Reject
                                        </button>
          
                                    </form>
                                  @endif
                                </div>
                                
                          </div>

                         </td>

                         <td class="g-px-30">
                          <div class="row">
                            
                                <div class="col-md-3">
                                  <a href="{{url('admin/deleteComment/'. $comment->id)}}" class="btn btn-md u-btn-darkred g-mr-10" onclick="return confirm('Are you sure you want to Delete this post?')">Delete</a>
                                </div>
                            
                          </div>

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