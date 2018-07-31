@extends('admin.app')

@section('content')

@include('admin.includes.header')


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

        @include('admin.includes.sidebar')

        <div class="g-pa-20">
                   <div class="media">
                     <div class="d-flex align-self-center">
                       <h1 class="g-font-weight-300 g-font-size-28 g-color-black mb-0">Business Units</h1>
                     </div>

                     <div class="media-body align-self-center text-right">
                       <a class="js-fancybox btn btn-xl u-btn-lightblue-v3 g-width-160--md g-font-size-default g-ml-10" href="#!" data-src="#new-project-form" data-speed="350" data-options='{"touch" : false}'>New Business Unit
                     </a>
                     </div>
                   </div>

                   <hr class="d-flex g-brd-gray-light-v7 g-my-30">

                   <div class="media g-mb-30">
                     <div class="d-flex align-self-center align-items-center">
                       <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Number of Units: 0</span>

                     </div>

                     <div class="d-flex align-self-center align-items-center g-ml-10 g-ml-20--md g-ml-40--lg">
                       <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Director of Projects:</span>

                       <div class="u-select--v1 g-pr-20">
                         
                           <img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="{{asset('uploads/avatars/'.Auth::user()->avatar)}}" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">{{ Auth::user()->name }}</span></span>
                         
                       </div>
                     </div>
                   </div>

                   <div class="row">

                     <div class="col-md-6 col-lg-4 g-mb-30">
                       <div class="card h-100 g-brd-gray-light-v7 rounded">
                         <header class="card-header g-bg-transparent g-brd-bottom-none g-pa-20 g-pa-30--sm">
                           <div class="media g-mb-15">
                             <div class="d-flex align-self-center">#098762.</div>

                             <div class="media-body d-flex justify-content-end">
                               <div class="g-pos-rel g-z-index-2">
                                 <a id="dropDown6Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" aria-controls="dropDown6" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown6"
                                 data-dropdown-type="jquery-slide">
                                   <i class="hs-admin-more-alt g-ml-20"></i>
                                 </a>

                                 <div id="dropDown6" class="u-shadow-v31 g-pos-abs g-right-0 g-bg-white" aria-labelledby="dropDown6Invoker">
                                   <ul class="list-unstyled g-nowrap mb-0">
                                     <li>
                                       <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                         <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                         Edit
                                       </a>
                                     </li>
                                     <li>
                                       <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                         <i class="hs-admin-archive g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                         Archive
                                       </a>
                                     </li>
                                     <li>
                                       <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                         <i class="hs-admin-check g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                         Mark as Done
                                       </a>
                                     </li>
                                     <li>
                                       <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                         <i class="hs-admin-plus g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                         New Task
                                       </a>
                                     </li>
                                     <li>
                                       <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                         <i class="hs-admin-trash g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                         Delete
                                       </a>
                                     </li>
                                   </ul>
                                 </div>
                               </div>
                             </div>
                           </div>

                           <h3 class="g-font-weight-300 g-font-size-20 g-color-black g-mb-15">Music Production</h3>
                           <span class="u-tags-v1 text-center g-width-130 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-color-white g-rounded-50 g-py-4 g-px-15">View Unit</span>
                         </header>

                         <hr class="d-flex g-brd-gray-light-v7 g-mx-20 g-mx-30--sm my-0">

                         <div class="card-block g-px-20 g-px-30--sm g-py-10 g-py-15--sm">
                           <div class="media align-self-center g-mb-5">
                             <div class="d-flex g-width-100 g-font-weight-300 g-color-gray-dark-v10">Projects</div>

                             <div class="media-body align-self-center">
                               <div class="progress g-height-4 g-rounded-2">
                                 <div class="progress-bar g-bg-lightred-v2 g-rounded-2" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                               </div>
                             </div>

                             <div class="d-flex align-self-center justify-content-end g-font-weight-300 g-color-black g-width-40">25</div>
                           </div>

                           <div class="media align-self-center g-mb-5">
                             <div class="d-flex g-width-100 g-font-weight-300 g-color-gray-dark-v10">In Progress</div>

                             <div class="media-body align-self-center">
                               <div class="progress g-height-4 g-rounded-2">
                                 <div class="progress-bar g-bg-lightblue-v3 g-rounded-2" role="progressbar" style="width: 65%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                               </div>
                             </div>

                             <div class="d-flex align-self-center justify-content-end g-font-weight-300 g-color-black g-width-40">16</div>
                           </div>

                           <div class="media align-self-center">
                             <div class="d-flex g-width-100 g-font-weight-300 g-color-gray-dark-v10">Completed</div>

                             <div class="media-body align-self-center">
                               <div class="progress g-height-4 g-rounded-2">
                                 <div class="progress-bar g-bg-teal-v2 g-rounded-2" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                               </div>
                             </div>

                             <div class="d-flex align-self-center justify-content-end g-font-weight-300 g-color-black g-width-40">8</div>
                           </div>
                         </div>

                         <hr class="d-flex g-brd-gray-light-v7 g-mx-20 g-mx-30--sm my-0">

                         <div class="card-block g-px-20 g-px-30--sm g-py-15 g-py-20--sm">
                           <div class="row g-mb-25">
                             <div class="col-md-6 g-mb-25 g-mb-0--md">
                               <h5 class="g-font-size-default g-color-gray-dark-v6 g-mb-5">Date Started</h5>
                               <p class="g-color-black mb-0">24 Apr 2017</p>
                             </div>

                             <div class="col-md-6">
                               <h5 class="g-font-size-default g-color-gray-dark-v6 g-mb-5">Project Manager</h5>
                               <p class="g-color-black mb-0">
                                 <span class="g-hidden-md-down">{{Auth::user()->name}}
                                 
                               </p>
                             </div>
                           </div>

                           <div class="g-mb-25">
                             <h5 class="g-font-size-default g-color-gray-dark-v6 g-mb-5">Project Team</h5>
                            
                           </div>

                           <ul class="list-inline mb-0">
                             <li class="list-inline-item g-mb-10 g-mb-0--sm">
                               <img class="g-width-40 g-height-40 rounded-circle" src="{{asset('uploads/avatars/'.Auth::user()->avatar)}}" alt="Image Description">
                             </li>
                             <li class="list-inline-item g-mb-10 g-mb-0--sm">
                               <img class="g-width-40 g-height-40 rounded-circle" src="{{asset('uploads/avatars/'.Auth::user()->avatar)}}" alt="Image Description">
                             </li>
                             
                             <li class="list-inline-item g-mb-10 g-mb-0--sm">
                               <a class="d-flex align-items-center justify-content-center u-link-v5 g-width-40 g-height-40 g-bg-gray-light-v8 g-bg-primary--hover g-color-lightblue-v4 g-color-white--hover rounded-circle g-pos-rel g-top-1" href="#!">
                                 <i class="hs-admin-plus"></i>
                               </a>
                             </li>
                           </ul>
                         </div>
                       </div>
                     </div>

                  
                     <div class="col-md-6 col-lg-4 g-mb-30">
                       <a class="js-fancybox d-flex align-items-center justify-content-center u-link-v5 g-parent h-100 g-brd-around g-brd-style-dashed g-brd-gray-light-v7 rounded g-pa-30" href="#!" data-src="#new-project-form" data-speed="350">
                         <span class="text-center">
                         <span class="d-inline-block g-pos-rel g-width-50 g-height-50 g-font-size-default g-color-lightblue-v4 g-brd-around g-brd-lightblue-v4 rounded-circle g-mb-5">
                           <i class="hs-admin-plus g-absolute-centered"></i>
                         </span>
                         <span class="d-block g-font-weight-300 g-font-size-16 g-color-gray-dark-v6 g-color-lightblue-v4--parent-hover">Start New Business Unit</span>
                         </span>
                       </a>
                     </div>
                   </div>
                 </div>
    </div>
</main>

@endsection