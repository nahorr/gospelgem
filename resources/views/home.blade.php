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
                  <div class="col-xl-4">
                    <!-- User Card -->
                    <div class="card g-brd-gray-light-v7 text-center g-pt-40 g-pt-60--md g-mb-30">
                      <header class="g-mb-30">
                        <img class="img-fluid rounded-circle g-width-125 g-height-125 g-mb-14" src="{{asset('uploads/avatars/'.Auth::user()->avatar)}}" alt="User Picture">
                        <h3 class="g-font-weight-300 g-font-size-22 g-color-black g-mb-2">{{ Auth::user()->name }}</h3>
                        <em class="g-font-style-normal g-font-weight-300 g-color-gray-dark-v6">CEO, Unify</em>
                      </header>

                      <section class="row no-gutters g-brd-top g-brd-gray-light-v4">
                        <div class="col-6 g-py-10 g-py-25--md">
                          <strong class="d-block g-font-weight-500 g-font-size-18 g-color-black">349</strong>
                          <span class="g-font-weight-300 g-color-gray-dark-v6">Connections</span>
                        </div>

                        <div class="col-6 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-25--md">
                          <strong class="d-block g-font-weight-500 g-font-size-18 g-color-black">124</strong>
                          <span class="g-font-weight-300 g-color-gray-dark-v6">Friends</span>
                        </div>
                      </section>
                    </div>
                    <!-- End User Card -->
                  </div>
                  <!-- End User Card -->

                  <!-- About Card -->
                  <div class="col-xl-8">
                    <!-- About Card -->
                    <div class="card g-brd-gray-light-v7 g-pa-15 g-pa-25-30--md g-mb-30">
                      <section class="g-mb-20">
                        <h3 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mb-20">About me</h3>
                        
                        <div class="g-font-weight-300 g-color-gray-dark-v6 g-mb-20">
                          @if(@$user_details->about_me == null)
                          <span class="g-font-size-20 g-color-black">Hi {{Auth::user()->name}}!</span>
                          <br>
                          
                            Please write something awesome about yourself.
                          @endif

                        </div>

                        <p class="g-font-weight-300 g-color-gray-dark-v6 mb-0">{{ @$user_details->about_me}}</p>
                      </section>

                      <section class="row">
                        <div class="col-md-6 g-mb-20 g-mb-0--md">
                          <h3 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mb-20">Skills</h3>

                          <ul class="u-list-inline mb-0">
                            <li class="list-inline-item g-mb-6 g-mr-2">
                              <a class="u-tags-v1 g-bg-lightblue-v3--hover g-color-gray-dark-v6 g-color-white--hover g-brd-around g-brd-gray-light-v4 g-brd-lightblue-v3--hover g-rounded-50 g-px-10 g-px-20--md g-py-2" href="#!">developer</a>
                            </li>
                            <li class="list-inline-item g-mb-6 g-mr-2">
                              <a class="u-tags-v1 g-bg-lightblue-v3--hover g-color-gray-dark-v6 g-color-white--hover g-brd-around g-brd-gray-light-v4 g-brd-lightblue-v3--hover g-rounded-50 g-px-10 g-px-20--md g-py-2" href="#!">html</a>
                            </li>
                            <li class="list-inline-item g-mb-6 g-mr-2">
                              <a class="u-tags-v1 g-bg-lightblue-v3--hover g-color-gray-dark-v6 g-color-white--hover g-brd-around g-brd-gray-light-v4 g-brd-lightblue-v3--hover g-rounded-50 g-px-10 g-px-20--md g-py-2" href="#!">bootstrap</a>
                            </li>
                            <li class="list-inline-item g-mb-6 g-mr-2">
                              <a class="u-tags-v1 g-bg-lightblue-v3--hover g-color-gray-dark-v6 g-color-white--hover g-brd-around g-brd-gray-light-v4 g-brd-lightblue-v3--hover g-rounded-50 g-px-10 g-px-20--md g-py-2" href="#!">php</a>
                            </li>
                            <li class="list-inline-item g-mb-6 g-mr-2">
                              <a class="u-tags-v1 g-bg-lightblue-v3--hover g-color-gray-dark-v6 g-color-white--hover g-brd-around g-brd-gray-light-v4 g-brd-lightblue-v3--hover g-rounded-50 g-px-10 g-px-20--md g-py-2" href="#!">management</a>
                            </li>
                          </ul>
                        </div>

                        <div class="col-md-6">
                          <h3 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mb-20">50 Recommended</h3>

                          <ul class="list-inline mb-0">
                            <li class="list-inline-item g-mb-10 g-mb-0--sm">
                              <img class="g-width-30 g-width-48--md g-height-30 g-height-48--md rounded-circle" src="../../assets/img-temp/100x100/img5.jpg" alt="Image Description">
                            </li>
                            <li class="list-inline-item g-mb-10 g-mb-0--sm">
                              <img class="g-width-30 g-width-48--md g-height-30 g-height-48--md rounded-circle" src="../../assets/img-temp/100x100/img6.jpg" alt="Image Description">
                            </li>
                            <li class="list-inline-item g-mb-10 g-mb-0--sm">
                              <img class="g-width-30 g-width-48--md g-height-30 g-height-48--md rounded-circle" src="../../assets/img-temp/100x100/img14.jpg" alt="Image Description">
                            </li>
                            <li class="list-inline-item g-mb-10 g-mb-0--sm">
                              <img class="g-width-30 g-width-48--md g-height-30 g-height-48--md rounded-circle" src="../../assets/img-temp/100x100/img16.jpg" alt="Image Description">
                            </li>
                            <li class="list-inline-item g-mb-10 g-mb-0--sm">
                              <div class="d-flex align-items-center justify-content-center g-width-30 g-width-48--md g-height-30 g-height-48--md g-bg-lightblue-v4 g-font-size-14 g-font-size-16--md g-color-white rounded-circle">+42</div>
                            </li>
                          </ul>
                        </div>
                      </section>
                    </div>
                    <!-- End About Card -->

                  </div>
                  <!-- End About Card -->

                </div>
                <div class="row">
                    <!-- Income Card -->
                    <div class="col-xl-12">
                      <!-- Income Cards -->
                      <div class="card g-brd-gray-light-v7 g-mb-30">
                        <header class="media g-pa-15 g-pa-25-30-0--md g-mb-20">
                          <div class="media-body align-self-center">
                            <h3 class="text-uppercase g-font-size-default g-color-black g-mb-8">Total Income</h3>

                            <div id="rangePickerWrapper3" class="u-datepicker-left u-datepicker--v3 g-pr-10">
                              <input id="rangeDatepicker3" class="g-font-size-12 g-font-size-default--md" type="text" data-rp-wrapper="#rangePickerWrapper3" data-rp-type="range" data-rp-date-format="d M Y" data-rp-default-date='["01 Jan 2016", "31 Dec 2017"]'>
                              <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v3"></i>
                            </div>
                          </div>

                          <div class="d-flex align-self-end align-items-center">
                            <span class="g-line-height-1 g-font-weight-300 g-font-size-28 g-color-lightblue-v4">$48,200</span>
                            <span class="d-flex align-self-center g-font-size-0 g-ml-10">
                    <i class="g-fill-gray-dark-v9">
                      <svg width="12px" height="20px" viewBox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g transform="translate(-21.000000, -751.000000)">
                          <g transform="translate(0.000000, 64.000000)">
                            <g transform="translate(20.000000, 619.000000)">
                              <g transform="translate(1.000000, 68.000000)">
                                <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </i>
                    <i class="g-fill-lightblue-v3">
                      <svg width="12px" height="20px" viewBox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g transform="translate(-33.000000, -751.000000)">
                          <g transform="translate(0.000000, 64.000000)">
                            <g transform="translate(20.000000, 619.000000)">
                              <g transform="translate(1.000000, 68.000000)">
                                <polygon transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)" points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </i>
                  </span>
                          </div>
                        </header>

                        <div class="js-custom-scroll g-height-500 g-pa-15 g-pa-0-30-25--md">
                          <table class="table table-responsive-sm w-100">
                            <thead>
                              <tr>
                                <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none g-pl-20">#</th>
                                <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Name</th>
                                <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Status</th>
                                <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Date</th>
                                <th class="text-right g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Price</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">1</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Business Cards</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
                                </td>
                                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Aug 12, 2016</td>
                                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$2045</td>
                              </tr>

                              <tr>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">2</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Advertising Outdoors</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightred-v2 g-bg-lightred-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">pending</span>
                                </td>
                                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Jun 6, 2016</td>
                                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$995</td>
                              </tr>

                              <tr>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">3</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Freelance Design</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">done</span>
                                </td>
                                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Sep 8, 2016</td>
                                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$1025</td>
                              </tr>

                              <tr>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">4</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Music Improvement</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
                                </td>
                                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Dec 20, 2016</td>
                                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$9562</td>
                              </tr>

                              <tr>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">5</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">Truck Advertising</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">
                                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">done</span>
                                </td>
                                <td class="g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">Dec 24, 2016</td>
                                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">$5470</td>
                              </tr>

                              <tr>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">6</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Business Cards</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
                                </td>
                                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Aug 12, 2016</td>
                                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$2045</td>
                              </tr>

                              <tr>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">7</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Advertising Outdoors</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightred-v2 g-bg-lightred-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">pending</span>
                                </td>
                                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Jun 6, 2016</td>
                                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$995</td>
                              </tr>

                              <tr>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">8</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Freelance Design</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">done</span>
                                </td>
                                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Sep 8, 2016</td>
                                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$1025</td>
                              </tr>

                              <tr>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">9</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Music Improvement</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
                                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
                                </td>
                                <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Dec 20, 2016</td>
                                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$9562</td>
                              </tr>

                              <tr>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">10</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">Truck Advertising</td>
                                <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">
                                  <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">done</span>
                                </td>
                                <td class="g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">Dec 24, 2016</td>
                                <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">$5470</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                        <div class="js-area-chart u-area-chart--v1 g-pos-rel g-line-height-0" data-height="100px" data-high="2420" data-low="0" data-offset-x="0" data-offset-y="0" data-postfix=" m" data-is-show-area="true" data-is-show-line="false" data-is-show-point="true"
                        data-is-full-width="true" data-is-stack-bars="true" data-is-show-axis-x="false" data-is-show-axis-y="false" data-is-show-tooltips="true" data-tooltip-description-position="left" data-tooltip-custom-class="u-tooltip--v2 g-font-weight-300 g-font-size-default g-color-gray-dark-v6"
                        data-align-text-axis-x="center" data-fill-opacity=".3" data-fill-colors='["#1cc9e4"]' data-stroke-width="2px" data-stroke-color="#1cc9e4" data-stroke-dash-array="0" data-text-size-x="14px" data-text-color-x="#000000" data-text-offset-top-x="0"
                        data-text-size-y="14px" data-text-color-y="#53585e" data-points-colors='["#1cc9e4"]' data-series='[
                    [
                      {"meta": "$", "value": 400},
                      {"meta": "$", "value": 2400},
                      {"meta": "$", "value": 700},
                      {"meta": "$", "value": 2750},
                      {"meta": "$", "value": 600},
                      {"meta": "$", "value": 1840},
                      {"meta": "$", "value": 320},
                      {"meta": "$", "value": 2720},
                      {"meta": "$", "value": 800}
                    ]
                  ]' data-labels='["2013", "2014", "2015", "2016", "2017"]'></div>
                      </div>
                      <!-- End Income Cards -->
                    </div>
                    <!-- End Income Card -->
                </div>
            </div>



            @include('layouts.private.includes.footer')
            
        </div>


    </div>


</main>

@endsection