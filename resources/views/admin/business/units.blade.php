@extends('admin.app')

@section('content')

@include('admin.includes.header')


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

        @include('admin.includes.sidebar')

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">

                 @include('admin.includes.metrics')

                 <header class="g-mb-20">
                   <h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">Contact Form Table</h2>
                   <h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0 pull-right">Total # of Messages: {{ $contactFormSubmissions->count() }}</h2>
                 </header>

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
                             <div class="d-flex align-self-center">Name</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Phone #</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Email</div>

                             
                           </div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Subject</div>

                           
                           </div>
                         </th>
                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Message</div>

                           
                           </div>
                         </th>

                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Date Submitted</div>

                           
                           </div>
                         </th>


                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Action</div>

                           
                           </div>
                         </th>
                       </tr>
                     </thead>

                     <tbody>

                      @foreach($contactFormSubmissions as $key => $submissions)
                       <tr>
                        <td class="g-px-30">{{$key+1}}</td>
                         <td class="g-px-30">{{$submissions->full_name}}</td>
                         <td class="g-px-30">{{$submissions->phone}}</td>
                         <td class="g-px-30">{{$submissions->email}}</td>
                         <td class="g-px-30">{{$submissions->message_subject}}</td>
                         <td class="g-px-30">{{$submissions->message}}</td>
                         <td class="g-px-30">{{$submissions->created_at->toFormattedDateString()}}</td>
                         
                         <td class="g-px-30">
                           <button type="button" class="btn btn-danger">Delete Message</button>
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