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

        <!-- Products Block -->
        <div class="row">
          @foreach($courses as $course)
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

                    <a class="g-color-main g-color-primary--hover g-text-underline--none--hover" href="{{ url('/showcoursedetails/'.$course->id) }}">{{ $course->course_name }} <p> <span style="color: #C70039">Mentor:</span> <span style="color: #F39C12">{{ $course->course_mentor }}</span></p></a>

                  </h3>
                  <p>{{$course->course_description}}</p>
                </div>

                <div class="d-flex justify-content-start">
                  <div class="align-self-center g-width-70 g-mr-15">
                    <!-- Chart Pie -->
                    <div class="js-pie g-color-black" data-circles-value="{{ $course->start_date->diffInDays($today) }}" data-circles-max-value="50" data-circles-bg-color="#dedede" data-circles-fg-color="#72c02c" data-circles-radius="40" data-circles-stroke-width="4" data-circles-font-size="12" data-circles-font-weight="500" data-circles-additional-text=" days left" data-circles-duration="2000" data-circles-scroll-animate="true"></div>
                    <!-- End Chart Pie -->
                  </div>
                  <div class="align-self-center g-font-size-13 text-center">
                    @if($course->price == null)
                    <strong>{{ $course->currency }}</strong>
                    @else
                    <span class="g-color-black g-font-weight-700"><strong>{{$course->currency}}</strong>{{ $course->price/100 }}</span>
                    @endif
                    <em class="d-block g-font-style-normal">Starts {{ $course->start_date->format('d M') }}</em>
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
          @endforeach
        </div>
        <!-- End Products Block -->

       

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