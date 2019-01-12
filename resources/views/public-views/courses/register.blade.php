@extends('layouts.public.app')

@section('content')

@include('layouts.public.includes.nav-header')

    <!-- Signup -->
    <section class="g-bg-secondary">
      <div class="container g-pt-100 g-pb-20">
        @include('flash::message')
        @if (count($errors) > 0)
                             
         <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
         </div>
        @endif
        <div class="row justify-content-between">
          <div class="col-md-6 col-lg-5 flex-md-unordered align-self-center g-mb-80">
            <div class="u-shadow-v21 g-bg-white rounded g-pa-50">
              <header class="text-center mb-4">
                <h2 class="h2 g-color-black g-font-weight-600">{{$course->course_name}} Registration</h2>
              </header>


              <!-- Form -->
              <form class="g-py-15" method="POST" action="{{ url('/courses/register/'.$course->id) }}">
                {{ csrf_field() }}

                <input type="hidden" name="course_id" value="{{ $course->id }}">

                <div class="row">
                  <div class="col g-mb-20">
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="First name" name="first_name" required="">
                  </div>

                  <div class="col g-mb-20">
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Last name" name="last_name" required="">
                  </div>
                </div>


                <div class="g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Phone Number" name="phone" required="">
                </div>

                <div class="g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="email" placeholder="Email address" name="email" required="">
                </div>


                <div class="mb-1">
                  <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-2">
                    
                    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                      <input type="checkbox" name="agree" value="1" required="">
                    </div>
                    I accept the <a href="{{ url('termsofuse') }} " target="_blank">Terms and Conditions</a>
                  </label>
                </div>

                <div class="g-mb-20">
                  <div class="g-recaptcha" data-sitekey="{{env('RE_CAPTCHA_SITEKEY')}}"></div>
                </div>

                <button class="btn btn-block u-btn-primary rounded g-py-13" type="submit">Register</button>
              </form>
              <!-- End Form -->
            </div>
          </div>

          <div class="col-md-6 flex-md-first align-self-center g-mb-80">
            <div class="mb-5">
              <h1 class="h3 g-font-weight-600 mb-3">Course: {{ $course->course_name }}<br>Instructor: {{ $course->course_mentor }}</h1>
              <p class="g-color-gray-dark-v5 g-font-size-12 text-uppercase">Start Date: {{$course->start_date->toFormattedDateString()}}</p>
            </div>

            <div class="row">
              <div class="col-md-11 col-lg-9">
                <!-- Icon Blocks -->
                <div class="media mb-4">
                  <div class="d-flex mr-4">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">

                      <i class="fa fa-calendar-check-o"></i>

                    </span>
                  </div>

                  <div class="media-body align-self-center">
                    <p class="g-color-gray-dark-v5 mb-0"><strong>Start Date:</strong> {{$course->start_date->toFormattedDateString()}}
                    <span>
                    <a class="u-tags-v1 g-color-pink g-brd-around g-brd-pink g-bg-pink--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#!">
                        <i class="fa fa-clock-o mr-1"></i>{{ date('h:i A', strtotime($course->start_time)) }}
                      </a>
                  </span>
                  </div>

                </div>
                <!-- End Icon Blocks -->

                <!-- Icon Blocks -->
                <div class="media mb-4">
                  <div class="d-flex mr-4">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">

                      <i class="icon-education-127 u-line-icon-pro"></i>

                    </span>
                  </div>

                  <div class="media-body align-self-center">
                    <p class="g-color-gray-dark-v5 mb-0"><strong>Venue:</strong> {{ $course->course_venue }}
                     @if($course->course_moodle_link != null)
                     
                    <a href="{{ $course->course_moodle_link }}" class="btn btn-sm u-btn-outline-lightred u-btn-hover-v2-1 g-font-weight-600 g-letter-spacing-0_5 text-uppercase g-brd-2 rounded-0 g-mr-10 g-mb-15" target="_blank">
                      <i class="fa fa-book g-mr-3"></i>View Course
                    </a>

                  @endif
                    </p>
                  </div>
                  
                </div>
                <!-- End Icon Blocks -->

                <!-- Icon Blocks -->
                <div class="media mb-5">
                  <div class="d-flex mr-4">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">

                      <i class="icon-finance-193 u-line-icon-pro"></i>

                    </span>
                  </div>
                  <div class="media-body align-self-center">
                    <p class="g-color-gray-dark-v5 mb-0">
                      <strong>Cost/Participant:</strong> 
                      @if($course->price == null)
                      {{$course->currency}}
                      @else
                      ${{$course->price}}
                      @endif
                    </p>
                  </div>
                </div>
                <!-- End Icon Blocks -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Signup -->

     <!-- Heading -->
     <section class="g-bg-secondary">
        <div class="text-center">
          <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
          <p class="lead mb-0">Please do contact us if you have any questions. We will be happy to help you.</p><hr>
          <p>
            <a href="{{url('contact')}}" class="btn btn-md u-btn-inset u-btn-yellow g-mr-10 g-mb-15">CONTACT US</a>
          </p>
        </div>
        <!-- End Heading -->
      </div>
    </section>
    <!-- End Icon Blocks -->

@include('layouts.public.includes.footer')

@endsection