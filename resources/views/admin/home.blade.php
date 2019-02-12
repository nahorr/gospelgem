@extends('admin.app')

@section('content')

@include('admin.includes.header')


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

        @include('admin.includes.sidebar')

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">

                 @include('admin.includes.metrics')

                 <div class="media-md align-items-center g-mb-30">
                  
                   <div class="d-flex g-mb-15 g-mb-0--md">
                     <h3 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">
                      <a href="#" class="btn btn-md u-btn-darkpurple" ><strong>Users Table</strong></a>
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
                               <div class="d-flex align-self-center">Name</div>

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
                               <div class="d-flex align-self-center">Role</div>

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
                               <div class="d-flex align-self-center">Status</div>

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
                               <div class="d-flex align-self-center g-nowrap">Verify</div>

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
                           <th>
                             <div class="media">
                               <div class="d-flex align-self-center g-nowrap">Action</div>

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
                        @foreach($users_all as $key => $user)
                          @if($user->id > 1)
                         <tr>
                           <td> {{ $key+1 }}</td>
                           <td>
                            <div class="media">
                             <div class="d-flex align-self-center">
                               <img class="g-width-36 g-height-36 rounded-circle g-mr-15" src="{{asset('uploads/avatars/'.$user->avatar)}}" alt="{{$user->name}} picture">
                             </div>

                             <div class="media-body align-self-center text-left">{{$user->name}}</div>
                           </div>
                           </td>
                           <td>{{ $user->email }}</td>
                           <td>
                            @If($user->is_admin == 1)

                              Admin

                            @else

                              User

                          @endif
                           </td>
                           <td>{{ date('d-M-y', strtotime($user->created_at)) }}</td>
                           <td>
                            @If($user->verified == 1)

                               Verified

                             @else

                               Not Verified

                             @endif
                           </td>
                           <td>
                            <div class="row">
                            
                                <div class="col-md-3">
                                  @If($user->verified != 1)
                                  <form class="form-group" action="{{ url('/admin/home/verify', [$user->id])}}" method="POST">
                                    {{ csrf_field() }}
                                      <input name="verified" type="hidden" value="1">
                                      
                                      <button class="btn btn-sm u-btn-primary g-mr-10" onclick="return confirm('Are you sure you want to verify this user manually?')">Verify
                                      </button>
                                  </form>
                                @else
                                  <form class="form-group" action="{{ url('/admin/home/unverify', [$user->id])}}" method="POST">
                                    {{ csrf_field() }}
                                      <input name="verified" type="hidden" value="0">
                                      
                                      <button class="btn btn-sm u-btn-black g-mr-10" onclick="return confirm('Are you sure you want to unverify this user manually?')">unVerify
                                      </button>
                                  </form>
                                @endif
                                </div>
                            
                          </div>
                           </td>
                           <td>
                            <div class="row">
                            
                                <div class="col-md-3">
                                  <a href="{{url('admin/home/delete/'. $user->id)}}" class="btn btn-sm u-btn-darkred g-mb-15" onclick="return confirm('Are you sure you want to Delete this record?')">Delete</a>
                                </div>
                            
                          </div>
                          </td>
                           <td>
                           <div class="row">
                            
                            @if($user->is_admin == 0 )
                              <div class="row">
                                
                                
                                <div class="col-md-3">
                                  <form class="form-group" action="{{ url('/admin/home/makeAdmin', [$user->id])}}" method="POST">
                                    {{ csrf_field() }}
                                      <input name="is_admin" type="hidden" value="1">
                                      
                                      <button class="btn btn-sm u-btn-darkpurple g-mr-10" onclick="return confirm('Are you sure you want to make this user admin?')">Make Admin
                                      </button>
                                  </form>
                                </div>
                                
                              </div>
                              @else
                              <div class="row">
                                
                                <div class="col-md-3">
                                  <form class="form-group" action="{{ url('/admin/home/makeUser', [$user->id])}}" method="POST">
                                    {{ csrf_field() }}
                                      <input name="is_admin" type="hidden" value="0">
                                      
                                      <button class="btn btn-sm u-btn-deeporange g-mr-10" onclick="return confirm('Are you sure you want to remove this user from admin list?')">Make User
                                      </button>
                                  </form>
                                </div>
                              </div>
                              
                              @endif
                            </div>
                          </td>
                         </tr>
                          @endif
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
        </div>

        @include('admin.includes.footer')
        
    </div>
</main>

@endsection