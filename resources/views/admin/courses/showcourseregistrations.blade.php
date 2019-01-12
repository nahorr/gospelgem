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

                 @include('errors.form_error')
                 <header class="g-mb-20">
                   <h2 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">
                    <strong>Course: {{$course->course_name}}</strong>
                  </h2>
                </header>

                 <div class="media-md align-items-center g-mb-30">
                  
                  <div class="d-flex g-mb-15 g-mb-0--md">
                    
                    <button type="button" class="btn btn-md u-btn-orange g-mr-20 pull-right" id="selectACourse-{{ $course->id }}">Select Another Course </button>

                  </div>

                  @include('admin.courses.selectACourseModal')
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script type="text/javascript">
                      
                      $("#selectACourse-{{ $course->id }}").on('click', function(e){
                         e.preventDefault();
                        $('#selectACourseModal-{{ $course->id }}').modal('show');
                      })
                  
                    </script>

                   <div class="d-flex g-mb-15 g-mb-0--md">
                     <h3 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">
                      <a href="#" class="btn btn-md u-btn-darkpurple" ><strong>{{$course_registrations->count()}} Students Registered</strong></a>
                    </h3>
                   </div>

                   <div class="media d-md-flex align-items-center ml-auto">
                     <div class="d-flex align-items-center">
                       <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Show:</span>

                       <div class="u-select--v1 g-pr-20">
                         <select id="datatableEntries1" class="js-select u-select--v1-select w-100">
                           <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">5 Entries</span>' value="5">5 Entries</option>
                           <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">10 Entries</span>' value="10">10 Entries</option>
                           <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">15 Entries</span>' value="15">15 Entries</option>
                           <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">20 Entries</span>' value="20">20 Entries</option>
                           <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">25 Entries</span>' value="25">25 Entries</option>
                         </select>
                         <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6"></i>
                       </div>
                     </div>

                     <div class="d-flex g-ml-15 g-ml-55--md">
                       <div class="input-group g-pos-rel g-width-320--md">
                         <input id="datatableSearch1" class="form-control g-font-size-default g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-20 g-pl-20 g-pr-50 g-py-10" type="text" placeholder="Search for name, position">
                         <button class="btn g-pos-abs g-top-0 g-right-0 g-z-index-2 g-width-60 h-100 g-bg-transparent g-font-size-16 g-color-primary g-color-secondary--hover rounded-0" type="submit">
                           <i class="hs-admin-search g-absolute-centered"></i>
                         </button>
                       </div>
                     </div>
                   </div>
                 </div>

                 <div class="g-mb-40">
                   <div class="table-responsive">
                     <table class="js-datatable table u-table--v3 u-editable-table--v1 g-color-black" data-dt-info="#datatableInfo1" data-dt-search="#datatableSearch1" data-dt-entries="#datatableEntries1" data-dt-is-show-paging="true" data-dt-pagination="datatablePagination1"
                     data-dt-page-length="5" data-dt-is-responsive="false" data-dt-pagination-classes="list-inline text-right mb-0" data-dt-pagination-items-classes="list-inline-item g-hidden-sm-down" data-dt-pagination-links-classes="u-pagination-v1__item u-pagination-v1-2 g-bg-secondary--active g-color-white--active g-brd-gray-light-v7 g-brd-secondary--hover g-brd-secondary--active g-rounded-4 g-py-8 g-px-15"
                     data-dt-pagination-next-classes="list-inline-item" data-dt-pagination-next-link-classes="u-pagination-v1__item u-pagination-v1-2 g-brd-gray-light-v7 g-brd-secondary--hover g-rounded-4 g-py-8 g-px-12" data-dt-pagination-next-link-markup='<span class="g-line-height-1 g-valign-middle" aria-hidden="true"><i class="hs-admin-angle-right"></i></span><span class="sr-only">Next</span>'
                     data-dt-pagination-prev-classes="list-inline-item" data-dt-pagination-prev-link-classes="u-pagination-v1__item u-pagination-v1-2 g-brd-gray-light-v7 g-brd-secondary--hover g-rounded-4 g-py-8 g-px-12" data-dt-pagination-prev-link-markup='<span class="g-line-height-1 g-valign-middle" aria-hidden="true"><i class="hs-admin-angle-left"></i></span><span class="sr-only">Prev</span>'>
                       <thead>
                         <tr>
                           <th>
                             <div class="media">
                               <div class="d-flex align-self-center">#</div>

                               <div class="d-flex align-self-center ml-auto">
                                 <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-up"></i>

                                 </a>

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-down"></i>

                                 </a>

                               </span>
                               </div>
                             </div>
                           </th>
                           <th>
                             <div class="media">
                               <div class="d-flex align-self-center">First Name</div>

                               <div class="d-flex align-self-center ml-auto">
                                 <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-up"></i>

                                 </a>

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-down"></i>

                                 </a>

                               </span>
                               </div>
                             </div>
                           </th>
                           <th>
                             <div class="media">
                               <div class="d-flex align-self-center">Last Name</div>

                               <div class="d-flex align-self-center ml-auto">
                                 <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-up"></i>

                                 </a>

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-down"></i>

                                 </a>

                               </span>
                               </div>
                             </div>
                           </th>
                           <th>
                             <div class="media">
                               <div class="d-flex align-self-center">Reg Date</div>

                               <div class="d-flex align-self-center ml-auto">
                                 <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-up"></i>

                                 </a>

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-down"></i>

                                 </a>

                               </span>
                               </div>
                             </div>
                           </th>
                           <th>
                             <div class="media">
                               <div class="d-flex align-self-center">Email</div>

                               <div class="d-flex align-self-center ml-auto">
                                 <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-up"></i>

                                 </a>

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-down"></i>

                                 </a>

                               </span>
                               </div>
                             </div>
                           </th>
                           <th>
                             <div class="media">
                               <div class="d-flex align-self-center g-nowrap">Phone</div>

                               <div class="d-flex align-self-center ml-auto">
                                 <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-up"></i>

                                 </a>

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-down"></i>

                                 </a>

                               </span>
                               </div>
                             </div>
                           </th>
                           <th>
                             <div class="media">
                               <div class="d-flex align-self-center g-nowrap">Tranx Ref#</div>

                               <div class="d-flex align-self-center ml-auto">
                                 <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-up"></i>

                                 </a>

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-down"></i>

                                 </a>

                               </span>
                               </div>
                             </div>
                           </th>
                           <th>
                             <div class="media">
                               <div class="d-flex align-self-center g-nowrap">Agree</div>

                               <div class="d-flex align-self-center ml-auto">
                                 <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-up"></i>

                                 </a>

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-down"></i>

                                 </a>

                               </span>
                               </div>
                             </div>
                           </th>
                           <th>
                             <div class="media">
                               <div class="d-flex align-self-center g-nowrap">Delete</div>

                               <div class="d-flex align-self-center ml-auto">
                                 <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-up"></i>

                                 </a>

                                 <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover" href="#!">

                                   <i class="hs-admin-angle-down"></i>

                                 </a>

                               </span>
                               </div>
                             </div>
                           </th>
                         </tr>
                       </thead>

                       <tbody>
                        @foreach($course_registrations as $key => $registrations)
                         <tr>
                           <td> {{ $key+1 }}</td>
                           <td>{{ $registrations->first_name }}</td>
                           <td>{{ $registrations->last_name }}</td>
                            <td>{{ $registrations->created_at->toFormatteddateString() }}</td>
                           <td>
                            {{ $registrations->email }}
                           </td>
                           <td>{{ $registrations->phone }}</td>
                           <td>
                            @if($registrations->trans_ref == null)
                              FREE
                            @else
                              {{ $registrations->trans_ref }}
                            @endif
                          </td>
                           <td>
                            @if($registrations->agree == 1)
                             YES
                            @else
                              NO
                            @endif
                          </td>
                           
                           
                           <td class="text-center">
                             <div class="col-md-3">
                              <a href="{{url('admin/courses/deleteCourseRegistration/'. $registrations->id)}}"  onclick="return confirm('Are you sure you want to Delete this record?')"><i class="fa fa-trash" style="color: red;"></i></a>
                            </div>
                           </td>
                         </tr>
                         
                         @endforeach
                         
                       </tbody>
                     </table>
                   </div>
                 </div>

                 <div class="media align-items-center g-mb-45">
                   <div id="datatableInfo1" class="media-body"></div>

                   <nav id="datatablePagination1" class="d-flex ml-auto" aria-label="Page Navigation"></nav>
                 </div>
            </div>

            @include('admin.includes.footer')
            
        </div>
    </div>
</main>

@endsection