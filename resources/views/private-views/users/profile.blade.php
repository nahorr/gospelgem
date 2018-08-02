@extends('layouts.private.app')

@section('content')

@include('layouts.private.includes.header')


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

        @include('layouts.private.includes.sidebar')

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                @include('layouts.private.includes.metrics')

                            <div class="row">
                              <div class="col-md-3 g-mb-30 g-mb-0--md">
                                <div class="h-20 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
                                  <!-- User Information -->
                                  <section class="text-center g-mb-30 g-mb-50--md">
                                    <div class="d-inline-block g-pos-rel g-mb-20">
                                      <h3 class="g-font-weight-300 g-font-size-20 g-color-black mb-0">{{Auth::user()->name}}</h3>
                                      <hr>
                                      <img class="img-fluid rounded-circle" src="{{asset('uploads/avatars/'.Auth::user()->avatar)}}" alt="{{Auth::user()->name}} profile picture">
                                    </div>

                                    <hr>
                                    <form enctype="multipart/form-data" action="{{url('/users/profile/updateavatar')}}" method="POST">
                                       <label>Update Profile Picture</label>
                                        <input type="file" name="avatar">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" vrole="button" class="btn btn-danger">Submit</button>
                                    </form>
                                  </section>
                                  <!-- User Information -->

                                </div>

                              </div>

                              <div class="col-md-9">
                                <div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
                                  <form class="js-validate" action="{{url('/users/profile/updateprofile')}}" method="POST">
                                    {{ csrf_field() }}
                                    <header>
                                      <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">General information</h2>
                                      <div class="col align-self-center g-hidden-md-down g-px-10">
                                        <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-dark-v6">
                                        <span class="g-pos-rel g-width-18 g-height-18 g-bg-lightblue-v3 g-brd-around g-brd-lightblue-v3 rounded-circle">
                                          <i class="hs-admin-check g-absolute-centered g-font-weight-800 g-font-size-8 g-color-white" title="Confirmed"></i>
                                        </span>
                                        <span class="g-hidden-lg-down g-font-weight-300 g-font-size-default g-color-lightblue-v3 g-ml-8">Confirmed</span>
                                      </em>
                                      </div>
                                    </header>

                                    <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

                                    <div class="row g-mb-20">
                                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                        <label class="mb-0" for="#firstName">Your Name</label>
                                      </div>

                                      <div class="col-md-9 align-self-center">
                                        <div class="form-group g-pos-rel mb-0">
                                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
                                        </span>
                                          <input id="name" name="name" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="{{Auth::user()->name}}" required="required" data-msg="This field is mandatory"
                                          data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true" disabled="">
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row g-mb-20">
                                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                        <label class="mb-0">Gender</label>
                                      </div>

                                      <div class="col-md-9 align-self-center">
                                        <div class="row g-mx-minus-10">
                                          <div class="col-md-auto align-self-center g-width-180--md g-px-10">
                                            <div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                              <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
                                            </span>
                                              <input id="gender" name="gender" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="{{@$user_details->gender}}">
                                            </div>
                                          </div>

                                          <div class="col align-self-center g-hidden-md-down g-px-10">
                                            <span class="g-font-weight-300 g-color-gray-dark-v6">We use this only for statistics</span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row g-mb-20">
                                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                        <label class="mb-0">Birthdate</label>
                                      </div>

                                      <div class="col-md-6 align-self-center">
                                        <div class="row g-mx-minus-10">
                                          <div class="col-md align-self-center g-px-10 g-mb-20 g-mb-0--md">
                                            <div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                                              <div id="datepickerWrapper" class="u-datepicker-right u-datepicker--v3 g-pos-rel w-100 g-cursor-pointer g-brd-around g-brd-gray-light-v7 g-rounded-4">
                                                @if(@$user_details->dob != null)
                                                  <input class="form-control" name="dob" type="date" value="{{ @$user_details->dob->format('Y-m-d') }}" id="dob">
                                                @else
                                                  <input class="form-control" name="dob" type="date" placeholder="eg 2017-07-25 id="dob">
                                                @endif
                                                <div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
                                                  
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                        </div>
                                      </div>
                                    </div>

                                    <div class="row g-mb-20">
                                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                        <label class="mb-0" for="#email">Email</label>
                                      </div>

                                      <div class="col-md-9 align-self-center">
                                        <div class="form-group g-pos-rel mb-0">
                                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
                                        </span>
                                          <input id="email" name="email" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="email" value="{{Auth::user()->email}}" disabled="">
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row g-mb-20">
                                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                        <label class="mb-0" for="#city">Your City</label>
                                      </div>

                                      <div class="col-md-9 align-self-center">
                                        <div class="form-group g-pos-rel mb-0">
                                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
                                        </span>
                                          <input id="city" name="city" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="{{@$user_details->city}}">
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row g-mb-20">
                                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                        <label class="mb-0" for="#country">Your Country</label>
                                      </div>

                                      <div class="col-md-9 align-self-center">
                                        <div class="form-group g-pos-rel mb-0">
                                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
                                        </span>
                                          <input id="location" name="country" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="text" value="{{@$user_details->country}}">
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row g-mb-20">
                                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                        <label class="mb-0" for="#phone">Phone Number</label>
                                      </div>

                                      <div class="col-md-9 align-self-center">
                                        <div class="row g-mx-minus-10">
                                          <div class="col-auto align-self-center g-width-270 g-px-10">
                                            <div class="form-group g-pos-rel mb-0">
                                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                              <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
                                            </span>
                                              <input id="phone" name="phone" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="tel" value="{{@$user_details->phone}}">
                                            </div>
                                          </div>

                                          
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row g-mb-20">
                                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                        <label class="mb-0" for="#about_me">About Me</label>
                                      </div>

                                      <div class="col-md-9 align-self-center">
                                        <div class="form-group g-pos-rel mb-0">
                                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
                                        </span>
                                          <textarea class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" rows="7" name="about_me" >{{@$user_details->about_me}}</textarea>
                                        </div>
                                      </div>
                                    </div>

                                    <hr>
                                    <div>
                                      <button class="btn btn-md btn-xl--md u-btn-lightblue-v3 g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Update Profile</button>
                                      <button class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" type="reset">Cancel</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-9 offset-md-3">
                              <hr>
                            </div>
                            <div class="row">
                              <div class="col-md-9 offset-md-3">
                                <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
                                    <form class="js-validate" action="{{url('/users/profile/updatepassword')}}" method="POST">
                                    <header>
                                      <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Change password</h2>
                                    </header>

                                    <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

                                    <div class="row g-mb-20">
                                      <div class="col-md-3">
                                        <label class="mb-0" for="#currentPassword">Current Password</label>
                                      </div>

                                      <div class="col-md-9 align-self-center">
                                        <div>
                                          <div class="form-group g-pos-rel mb-0">
                                            <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                            <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
                                          </span>
                                            <input id="currentPassword" name="currentPassword" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="password" required="required" data-msg="This field is mandatory"
                                            data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                                          </div>

                                        </div>
                                      </div>
                                    </div>

                                    <div class="row g-mb-20">
                                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                        <label class="mb-0" for="#newPassword">New Password</label>
                                      </div>

                                      <div class="col-md-9 align-self-center">
                                        <div class="form-group g-pos-rel mb-0">
                                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
                                        </span>
                                          <input id="newPassword" name="newPassword" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="password" required="required" data-msg="This field is mandatory" data-error-class="u-has-error-v3"
                                          data-success-class="has-success" aria-required="true">
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row g-mb-20">
                                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                        <label class="mb-0" for="#confirmNewPassword">Confirm Password</label>
                                      </div>

                                      <div class="col-md-9 align-self-center">
                                        <div class="form-group g-pos-rel mb-0">
                                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
                                        </span>
                                          <input id="confirmNewPassword" name="confirmNewPassword" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-lightred-v2--error g-rounded-4 g-px-20 g-py-12" type="password" required="required" data-msg="This field is mandatory"
                                          data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                                        </div>
                                      </div>
                                    </div>

                                    <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

                                    <div>
                                      <button class="btn btn-md btn-xl--md u-btn-lightblue-v3 g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Save Changes</button>
                                      <button class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" type="reset">Cancel</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>

            </div>



            @include('layouts.private.includes.footer')
            
        </div>


    </div>


</main>

@endsection