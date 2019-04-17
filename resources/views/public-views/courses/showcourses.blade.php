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
           <i class="u-divider__icon g-bg-pink g-color-white rounded-circle">{{ $courses->where('course_moodle_link', null)->count() }}</i>
         </div>
        </div>
        <div class="row">
          @foreach($courses as $course)
          @if($course->course_moodle_link)
          
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
                      @if($course->price == null)
                        <a class="g-color-main g-color-primary--hover g-text-underline--none--hover" href="{{ url('courses/register/'.$course->id) }}">{{ $course->course_name }} <p> <span style="color: #C70039">Mentor:</span> <span style="color: #F39C12">{{ $course->course_mentor }}</span></p></a>
                      @else
                        <a class="g-color-main g-color-primary--hover g-text-underline--none--hover" href="{{ url('/showcoursedetails/'.$course->id) }}">{{ $course->course_name }} <p> <span style="color: #C70039">Mentor:</span> <span style="color: #F39C12">{{ $course->course_mentor }}</span></p></a>
                      @endif
                    </h3>
                    <p>{{$course->course_description}}</p>
                    <div class="align-self-center g-font-size-13 text-center">
                      @if($course->price == null)
                      <strong>{{ $course->currency }}</strong>
                      @else
                      <span class="g-color-black g-font-weight-700"><strong>{{$course->currency}}</strong>{{ $course->price/100 }}</span>
                      @endif
                      <em class="d-block g-font-style-normal">Starts {{ $course->start_date->format('d M') }}</em>
                    </div>
                  </div>

                  <div class="d-flex justify-content-start">
                    <div class="align-self-center g-width-70 g-mr-15">
                      <!-- Chart Pie -->
                      @if($course->course_moodle_link)
                      <a class="btn btn-md btn-danger g-font-weight-600 g-font-size-11 text-uppercase data-toggle="tooltip" data-placement="top" title="click the button to begin or continue this course" href="{{$course->course_moodle_link }}">Go to Course</a>
                      @else
                      <a class="btn btn-md btn-light g-font-weight-600 g-font-size-11 text-uppercase data-toggle="tooltip" data-placement="top" title="{{ $course->course_venue }}" href="#"><i class="fa fa-map-pin"></i> Venue Info</a>
                      @endif

                      <!-- End Chart Pie -->
                    </div>
                    
                    <div class="d-block align-self-center ml-auto text-center">
                      @if($course->price == null)
                      <a class="btn btn-md btn-success g-font-weight-600 g-font-size-11 text-uppercase" href="{{ url('courses/register/'.$course->id) }}">Enrol Now</a>
                      @else
                      <a class="btn btn-md btn-success g-font-weight-600 g-font-size-11 text-uppercase" href="{{ url('/showcoursedetails/'.$course->id) }}">Enrol Now</a>
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
          <i class="u-divider__icon g-bg-cyan g-color-white rounded-circle">{{ $courses->where('course_moodle_link', !null)->count() }}</i>
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
                      @if($course->price == null)
                        <a class="g-color-main g-color-primary--hover g-text-underline--none--hover" href="{{ url('courses/register/'.$course->id) }}">{{ $course->course_name }} <p> <span style="color: #C70039">Mentor:</span> <span style="color: #F39C12">{{ $course->course_mentor }}</span></p></a>
                      @else
                        <a class="g-color-main g-color-primary--hover g-text-underline--none--hover" href="{{ url('/showcoursedetails/'.$course->id) }}">{{ $course->course_name }} <p> <span style="color: #C70039">Mentor:</span> <span style="color: #F39C12">{{ $course->course_mentor }}</span></p></a>
                      @endif
                    </h3>
                    <p>{{$course->course_description}}</p>
                    <div class="align-self-center g-font-size-13 text-center">
                      @if($course->price == null)
                      <strong>{{ $course->currency }}</strong>
                      @else
                      <span class="g-color-black g-font-weight-700"><strong>{{$course->currency}}</strong>{{ $course->price/100 }}</span>
                      @endif
                      <em class="d-block g-font-style-normal">Starts {{ $course->start_date->format('d M') }}</em>
                    </div>
                  </div>

                  <div class="d-flex justify-content-start">
                    <div class="align-self-center g-width-70 g-mr-15">
                      <!-- Chart Pie -->
                      @if($course->course_moodle_link)
                      <a class="btn btn-md btn-danger g-font-weight-600 g-font-size-11 text-uppercase data-toggle="tooltip" data-placement="top" title="click the button to begin or continue this course" href="{{$course->course_moodle_link }}">Go to Course</a>
                      @else
                      <a class="btn btn-md btn-light g-font-weight-600 g-font-size-11 text-uppercase data-toggle="tooltip" data-placement="top" title="{{ $course->course_venue }}" href="#"><i class="fa fa-map-pin"></i> Venue Info</a>
                      @endif

                      <!-- End Chart Pie -->
                    </div>
                    
                    <div class="d-block align-self-center ml-auto text-center">
                      @if($course->price == null)
                      <a class="btn btn-md btn-success g-font-weight-600 g-font-size-11 text-uppercase" href="{{ url('courses/register/'.$course->id) }}">Enrol Now</a>
                      @else
                      <a class="btn btn-md btn-success g-font-weight-600 g-font-size-11 text-uppercase" href="{{ url('/showcoursedetails/'.$course->id) }}">Enrol Now</a>
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