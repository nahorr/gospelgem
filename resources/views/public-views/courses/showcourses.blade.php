@extends('layouts.public.app')

@section('content')

	@include('layouts.public.includes.nav-header')


    <!-- Icon Blocks -->
    <section class="g-bg-secondary">
      <div class="container g-py-100">
        <div class="row justify-content-center g-mb-60">
          <div class="col-lg-7">
            <!-- Heading -->
            <div class="text-center">
              <h2 class="h3 g-color-black text-uppercase mb-2">Courses</h2>
              <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
              <p class="lead mb-0">The Online mentorship program is one of our platform to fulfill our purpose; where we can serve a global audience of Christian artists, who wish to kickstart their musical career through quality mentorship and trainings.</p><hr>
            </div>
            <!-- End Heading -->
          </div>
        </div>

        <!-- Online Course -->
        <div class="text-center g-my-30">
          <h2 class="h3 g-color-black text-uppercase mb-2">Online Courses</h2>
          <div class="u-divider u-divider-solid u-divider-center g-brd-pink g-my-40">
           <i class="u-divider__icon g-bg-pink g-color-white rounded-circle">{{ $courses->where('course_moodle_link', !null)->count() }}</i>
         </div>
        </div>
        <div class="row">
          @foreach($courses as $course)
          @if($course->course_moodle_link) 
            <div class="col-md-6 col-lg-4 g-mb-30">
              <!-- Article -->
              <article>
                <!-- Article Image -->
                <img class="w-100 h-10" src="{{asset('unify/assets/img/coursepictures/'.$course->course_picture)}}" alt="{{$course->course_name}}">
                <!-- End Article Image -->

                <!-- Article Content -->
                <div class="u-shadow-v24 g-pa-30">
                  <div class="g-mb-30">
                    <h3 class="h4 g-color-black g-font-weight-600 mb-3">
                     
                        <a class="g-color-main g-color-primary--hover g-text-underline--none--hover" data-toggle="tooltip" data-placement="top" title="{{ $course->course_name}}" href="{{ url('courses/register/'.$course->id) }}">
                          {{ str_limit($course->course_name, 20) }}
                        </a>
                        <p data-toggle="tooltip" data-placement="top" title="{{ $course->course_mentor}}">
                          <span style="color: #C70039">Mentor:</span>
                          <span style="color: #F39C12">{{ str_limit($course->course_mentor, 20) }}</span>
                        </p>
                      
                    </h3>
                    <p data-toggle="tooltip" data-placement="top" title="{{ $course->course_description }}">
                      @if(strlen($course->course_description) < 43)
                        {{ $course->course_description }}&nbsp;{{ str_repeat("&nbsp;", 42) }}
                      @else
                        {{ str_limit($course->course_description, 75) }}
                      @endif
                    </p>
                    <div class="align-self-center g-font-size-13 text-center">
                      @if($course->price == null)
                        <span class="g-color-black g-font-weight-700"><strong>{{ $course->currency }}</strong>
                        </span>
                      @else
                        <span class="g-color-black g-font-weight-700"><strong>{{$course->currency}}</strong>
                          {{ $course->price/100 }}
                        </span>
                      @endif
                      <em class="d-block g-font-style-normal">Starts {{ $course->start_date->format('d M') }}</em>
                    </div>
                  </div>

                  <div class="">
                    <div class="align-self-center">
                      @if(\Auth::check() && $course_registrations->where('email',\Auth::user()->email)->where('course_id', $course->id)->count() == !null)
                          <!-- Online Courses -->
                          <a class="btn btn-md btn-danger btn-block g-font-weight-600 g-font-size-11 text-uppercase" data-toggle="tooltip" data-placement="top" title="click the button to begin or continue this course" href="{{$course->course_moodle_link }}">Go to Course
                          </a>
                          
                          <!-- End Online Courses -->
                      @else
                        <a class="btn btn-md btn-success btn-block g-font-weight-600 g-font-size-11 text-uppercase" href="{{ url('/showcoursedetails/'.$course->id) }}">Enrol Now</a>
                      @endif
                    </div>
                  </div>
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>
          @endif
          @endforeach
        </div>
        <!-- End Online Courses -->
       
        <!-- OnSite Course -->
        <div class="text-center g-my-30">
         <h2 class="h3 g-color-black text-uppercase mb-2">Onsite Courses</h2>
         <div class="u-divider u-divider-solid u-divider-center g-brd-cyan g-my-40">
          <i class="u-divider__icon g-bg-cyan g-color-white rounded-circle">{{ $courses->where('course_moodle_link', null)->count() }}</i>
        </div>
       </div>
        <div class="row">
          @foreach($courses as $course)
          @if(!$course->course_moodle_link)
          
            <div class="col-md-6 col-lg-4 g-mb-30">
              <!-- Article -->
              <article>
                <!-- Article Image -->
                <img class="w-100" src="{{asset('unify/assets/img/coursepictures/'.$course->course_picture)}}" alt="{{$course->course_name}}">
                <!-- End Article Image -->
                <!-- Article Content -->
                <div class="u-shadow-v24 g-pa-30">
                  <div class="g-mb-30">
                    <h3 class="h4 g-color-black g-font-weight-600 mb-3">
                     
                        <a class="g-color-main g-color-primary--hover g-text-underline--none--hover" data-toggle="tooltip" data-placement="top" title="{{ $course->course_name }}" href="{{ url('courses/register/'.$course->id) }}">{{ str_limit($course->course_name, 20) }}
                        </a>
                        <p data-toggle="tooltip" data-placement="top" title="{{ $course->course_mentor}}">
                          <span style="color: #C70039">Mentor:</span>
                          <span style="color: #F39C12">{{ str_limit($course->course_mentor, 20) }}</span>
                        </p>                    
                    </h3>
                    <p data-toggle="tooltip" data-placement="top" title="{{ $course->course_description }}">
                      @if(strlen($course->course_description) < 43)
                        {{ $course->course_description }}&nbsp;{{ str_repeat("&nbsp;", 42)}}
                      @else
                        {{ str_limit($course->course_description, 75) }}
                      @endif
                    </p>
                    <div class="align-self-center g-font-size-13 text-center">
                      @if($course->price == null)
                      <span class="g-color-black g-font-weight-700"><strong>{{ $course->currency }}</strong></span>
                      @else
                      <span class="g-color-black g-font-weight-700"><strong>{{$course->currency}}</strong>{{ $course->price/100 }}</span>
                      @endif
                      <em class="d-block g-font-style-normal">Starts {{ $course->start_date->format('d M') }}</em>
                    </div>
                  </div>

                  <div class="">
                    <div class="align-self-center">
                      @if(\Auth::check() && $course_registrations->where('email',\Auth::user()->email)->where('course_id', $course->id)->count() == !null)
                        <!-- Venue Info -->
                        <a class="btn btn-md btn-primary btn-block g-font-weight-600 g-font-size-11 text-uppercase" data-toggle="tooltip" data-placement="top" title="{{ $course->course_venue }}" href="#">
                          <i class="fa fa-map-pin"></i> Venue Info
                        </a>
                      <!-- End Venue Info -->
                      @else
                        <a class="btn btn-md btn-success btn-block g-font-weight-600 g-font-size-11 text-uppercase" href="{{ url('/showcoursedetails/'.$course->id) }}">Enrol Now</a>
                      @endif
                    </div> 

                  </div>
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>
          @endif
          @endforeach
        </div>
        <!-- End OnStie Courses -->
        <!-- Heading -->
        <div class="text-center">
          <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
          <p class="lead mb-0">The Online mentorship program is one of our platform to fulfill our purpose; where we can serve a global audience of Christian artists, who wish to kickstart their musical career through quality mentorship and trainings.</p><hr>
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