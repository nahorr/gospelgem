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
                   <h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">Invitation Form Table</h2>
                   <h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0 pull-right">Total # of Invitations: {{ $invitationFormSubmissions->count() }}</h2>
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
                             <div class="d-flex align-self-center">Organization</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Country</div></div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Event</div>                            
                           </div>
                         </th>
                         <th class="g-px-30">
                           <div class="media">
                             <div class="d-flex align-self-center">Description</div> 
                           </div>
                         </th>
                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Date</div>
                           </div>
                         </th>
                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Venue</div>
                           </div>
                         </th>
                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Name</div>
                           </div>
                         </th>
                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Phone</div>
                           </div>
                         </th>
                         <th class="g-px-30">
                            <div class="media">
                             <div class="d-flex align-self-center">Email</div>
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

                      @foreach($invitationFormSubmissions as $key => $submissions)
                       <tr>
                        <td class="g-px-30">{{$key+1}}</td>
                         <td class="g-px-30">{{$submissions->organization_name}}</td>
                         <td class="g-px-30">{{$submissions->country}}</td>
                         <td class="g-px-30">{{$submissions->event}}</td>
                         <td class="g-px-30">{{$submissions->description}}</td>
                         <td class="g-px-30">{{$submissions->event_date}}</td>
                         <td class="g-px-30">{{$submissions->venue}}</td>
                         <td class="g-px-30">{{$submissions->contact_person}}</td>
                         <td class="g-px-30">{{$submissions->contact_phone}}</td>
                         <td class="g-px-30">{{$submissions->contact_email}}</td>
                         <td class="g-px-30">{{$submissions->created_at->toFormattedDateString()}}</td>
                         <td class="g-px-30">
                          <a href="{{ url('/admin/invitationform/deletesubmissions/'.$submissions->id) }}" class="btn btn-default" role="button" onclick="return confirm('Are you sure you want to Delete this record?')">
                            <i class="hs-admin-trash" style="color: red"></i>
                          </a>
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