@extends('layouts.public.app')

@section('content')

  @include('layouts.public.includes.nav-header')

  @include('layouts.public.includes.header')

    <!-- Icon Blocks -->
    <section class="g-py-100">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-4 g-px-40 g-mb-50 g-mb-0--lg">
            <!-- Icon Blocks -->
            <div class="text-center">
              <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/welcome/august_2018_program.png')}}" alt="gosgem Live Classes">
              <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">August 2018 Program</h3>
              <p class="mb-0">Register Now for the SINACH Mentorship Session commencing August 2018.</p>
              <hr>
              <a href="{{url('mentorship')}}" class="btn btn-md u-btn-inset u-btn-yellow g-mr-10 g-mb-15">
               
                  <i class="fa fa-check-circle g-mr-3"></i>
                  MORE INFORMATION
              
              </a>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-px-40 g-mb-50 g-mb-0--lg">
            <!-- Icon Blocks -->
            <div class="text-center">
              <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/welcome/who_needs_gosgem.png')}}" alt="gosgem Live Classes">
              <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">Who Needs GosGem</h3>
              <p class="mb-0">New artists, and all interested in learning about behind the scene operations.</p>
              <hr>
              <a href="{{url('about')}}" class="btn btn-md u-btn-inset u-btn-yellow g-mr-10 g-mb-15">
                
                  <i class="fa fa-check-circle g-mr-3"></i>
                  READ MORE
                
              </a>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-px-40">
            <!-- Icon Blocks -->
            <div class="text-center">
              <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/welcome/about_gosgem.png')}}" alt="gosgem Live Classes">
              <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">About GosGem</h3>
              <p class="mb-0">Gosgem is an online platform bridging the gap between a minister and the fanbase.</p>
              <hr>
              <a href="{{url('about')}}" class="btn btn-md u-btn-inset u-btn-yellow g-mr-10 g-mb-15">
                
                  <i class="fa fa-check-circle g-mr-3"></i>
                  READ ABOUT GOSGEM
               
              </a>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Icon Blocks -->

    <section class="container g-py-100">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <!-- Heading -->
          <div class="text-center g-mb-60">
            <h2 class="h3 g-color-black text-uppercase mb-2">GOSGEM MENTORING INTRO</h2>
            <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
            <!--<p class="mb-0">We are a creative studio focusing on culture, luxury, editorial &amp; art. Somewhere between sophistication and simplicity.</p>-->
          </div>
          <!-- End Heading -->
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-9">
          <!-- Article -->
          <article class="u-shadow-v21 g-bg-size-cover g-bg-pos-bottom-center text-center">
            
              <iframe width="100%" height="500" src="https://www.youtube.com/embed/rcebP75T_EA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
           
          </article>
          <!-- End Article -->
        </div>
      </div>
    </section>

    <hr class="g-brd-gray-light-v4 my-0">



    <!-- Call to Action --> 
    <div class="g-pos-rel"> 
      <div class="container text-center g-pt-50 g-pb-50">
       <img class="img-fluid img-thumbnail rounded-circle" src="{{asset('unify/assets/img/sinach_mic.jpg')}}" alt="Sinach">
        <!-- Heading -->
         <div class="g-max-width-645 mx-auto g-mb-40"> 
          <h2 class="h1 mb-3">SINACH MENTORS LIVE!</h2> 
          <p>Sinach Mentors, Live! Is an online mentorship program holding this August, 2018 by Sinach, and hosted by Gospel Music start up mentorship platform, GosGEM, where for the first time arranged in an organized curricula, Sinach will opening the digital doors to release vital trainings, and information to spark up Gospel Music Talents to make and break records in the music industry.</p> 
        </div> 
        <!-- End Heading --> 
        <a class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-35 g-py-13" href="{{url('register')}}">Register Now</a> 
        <!-- SVG Shape --> 
        <svg class="d-inline-block g-width-35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 1" enable-background="new 0 0 37 1" xml:space="preserve"> 
          <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="0" y1="0.5" x2="37" y2="0.5"> 
            <stop offset="0" style="stop-color:#f5f6fa"></stop> <stop offset="1" style="stop-color:#b5b8cb"></stop> 
          </linearGradient> 
          <line fill="none" stroke="url(#SVGID_5_)" stroke-miterlimit="10" x1="37" y1="0.5" x2="0" y2="0.5"></line> 
        </svg> <!-- End SVG Shape --> 
        <span class="align-middle g-color-primary mx-1">or</span> 
        <!-- SVG Shape --> 
        <svg class="d-inline-block g-width-35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 1" enable-background="new 0 0 37 1" xml:space="preserve"> 
          <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="-10" y1="-1.5" x2="27" y2="-1.5" gradientTransform="matrix(-1 0 0 -1 27 -1)"> 
            <stop offset="0" style="stop-color:#f5f6fa"></stop> 
            <stop offset="1" style="stop-color:#b5b8cb"></stop> 
          </linearGradient> 
          <line fill="none" stroke="url(#SVGID_6_)" stroke-miterlimit="10" x1="0" y1="0.5" x2="37" y2="0.5"></line> 
        </svg> <!-- End SVG Shape --> 
        <a class="btn u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-main--hover g-rounded-30 g-px-35 g-py-13" href="{{url('contact')}}">Contact Us</a> 
      </div> 
      <!-- SVG Background Shape --> 
      <svg class="g-pos-abs g-bottom-0 g-left-0 g-z-index-minus-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 323" enable-background="new 0 0 1920 323" xml:space="preserve"> 
        <polygon fill="#f0f2f8" points="0,323 1920,323 1920,0 "></polygon> 
        <polygon fill="#f5f6fa" points="-0.5,322.5 -0.5,131.5 658.3,212.3 "></polygon> 
      </svg> <!-- End SVG Background Shape --> </div> <!-- End Call to Action -->

  <hr class="g-brd-gray-light-v4 my-0">

    <!-- Projects -->
    <section class="container g-py-100">
      <div class="text-center g-mb-50">
        <h2 class="h1 g-color-black g-font-weight-600">What We Do</h2>
        <p class="lead">We provide six core services:</p>
      </div>

      <div class="row no-gutters g-mx-minus-10">
        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/what-we-do/vocals.png')}}" alt="vocals">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase"></span>
            <h3 class="h4 g-font-weight-600 mb-0">Vocals</h3>

            <a class="u-link-v2" href="{{url('mentorship')}}"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/what-we-do/music_production.png')}}" alt="gosgem">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase"></span>
            <h3 class="h4 g-font-weight-600 mb-0">Music Production</h3>

            <a class="u-link-v2" href="{{url('coming-soon')}}"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/what-we-do/goscompetition.png')}}" alt="gosgem">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase"></span>
            <h3 class="h4 g-font-weight-600 mb-0">Gosgem Music Competition</h3>

            <a class="u-link-v2" href="{{url('coming-soon')}}"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/what-we-do/GOSBUSINESS.png')}}" alt="gosgem">
            <!--<span class="g-font-weight-600 g-font-size-12 text-uppercase">Hi-tech</span>-->
            <h3 class="h4 g-font-weight-600 mb-0">Gosbusiness</h3>

            <a class="u-link-v2" href="{{url('coming-soon')}}"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/what-we-do/gos_mentoring.png')}}" alt="gos_mentoring">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase"></span>
            <h3 class="h4 g-font-weight-600 mb-0">Gosgem Mentoring</h3>

            <a class="u-link-v2" href="{{url('coming-soon')}}"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/what-we-do/GOSBRANDING.png')}}" alt="gosgem">
            <h3 class="h5 g-font-weight-600 mb-0">Gosgem Products and Services/Brand Development</h3>

            <a class="u-link-v2" href="{{url('coming-soon')}}"></a>
          </div>
          <!-- End Projects -->
        </div>
      </div>
    </section>
    <!-- End Projects -->


    <!-- Call To Action -->
    <section class="g-bg-primary g-color-white g-pa-30" style="background-image: url(/unify/assets/img/bg/pattern5.png);">
      <div class="d-md-flex justify-content-md-center text-center">
        <div class="align-self-md-center">
          <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">Learn from the best and become the best. Join our mentorship program</p>
        </div>
        <div class="align-self-md-center">
          <a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12" target="_blank" href="{{url('mentorship')}}">More Information</a>
        </div>
      </div>
    </section>
    <!-- End Call To Action -->

    @include('layouts.public.includes.footer')

@endsection