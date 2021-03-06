@extends('layouts.public.app')

@section('content')

  @include('layouts.public.includes.nav-header')

  @include('layouts.public.includes.header')

    <!-- Icon Blocks -->
    <section class="g-py-100">
      <div class="container">
        <div class="row no-gutters">
         @foreach($site_pictures as $picture)
            @if($picture->picture_category->pic_category_name == 'Info Block - Home')
              <div class="col-lg-4 g-px-40 g-mb-50 g-mb-0--lg">
                <!-- Icon Blocks -->
                <div class="text-center">

                  <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/pictures/'.$picture->picture)}}" alt="gosgem Live Classes">
                  <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">{{$picture->picture_title}}</h3>
                  <p class="mb-0">{{$picture->picture_description}}</p>
                  <hr>
                  <a href="{{ $picture->picture_link }}" class="btn btn-md u-btn-inset u-btn-yellow g-mr-10 g-mb-15"><i class="fa fa-check-circle g-mr-3"></i>MORE INFORMATION</a>
                </div>
                <!-- End Icon Blocks -->
              </div>
          @endif
        @endforeach


        </div>
      </div>
    </section>
    <!-- End Icon Blocks -->

    <section class="container g-py-100">
      <!-- Recent Videos -->
       <div class="u-heading-v3-1 g-mb-30">
         <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">Featured Videos</h2>
       </div>

       <div class="row">
        @foreach($videos as $video)
         <!-- Article Video -->
         <div class="col-lg-6 col-sm-6 g-mb-30">
           <article>
             <figure class="u-shadow-v25 g-pos-rel g-mb-20">
               <iframe width="100%" height="400" src="{{ $video->video_link }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

               <figcaption class="g-pos-abs g-top-10 g-left-10">
                 <a class="btn btn-xs u-btn-primary text-uppercase rounded-0" href="#">{{ $video->video_title }}</a>
               </figcaption>
             </figure>

             <h3 class="g-font-size-16 g-mb-10">
               <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">{{ $video->video_title }}</a>
             </h3>
           </article>
         </div>
         <!-- End Article Video -->
        @endforeach                  
       </div>
       <!-- End Recent Videos -->
  </section>

  <hr class="g-brd-gray-light-v4 my-0">



    <!-- Call to Action --> 
    <div class="g-pos-rel"> 
      @foreach($site_pictures as $picture)
        @if($picture->picture_category->pic_category_name == 'SINACH MENTORS LIVE!')

          <div class="container text-center g-pt-50 g-pb-50">
           <img class="img-fluid img-thumbnail rounded-circle" src="{{asset('unify/assets/img/pictures/'.$picture->picture)}}" alt="{{$picture->picture_title}}">
            <!-- Heading -->
             <div class="g-max-width-645 mx-auto g-mb-40"> 
              <h2 class="h1 mb-3">{{$picture->picture_title}}</h2> 
              <p>{{$picture->picture_description}}</p> 
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

        @endif
      @endforeach
      <!-- SVG Background Shape --> 
      <svg class="g-pos-abs g-bottom-0 g-left-0 g-z-index-minus-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 323" enable-background="new 0 0 1920 323" xml:space="preserve"> 
        <polygon fill="#f0f2f8" points="0,323 1920,323 1920,0 "></polygon> 
        <polygon fill="#f5f6fa" points="-0.5,322.5 -0.5,131.5 658.3,212.3 "></polygon> 
      </svg> <!-- End SVG Background Shape --> 
    </div> <!-- End Call to Action -->

  <hr class="g-brd-gray-light-v4 my-0">

    <!-- Projects -->
    <section class="container g-py-100">
      <div class="text-center g-mb-50">
        <h2 class="h1 g-color-black g-font-weight-600">What We Do</h2>
        <p class="lead">We provide six core services:</p>
      </div>

      <div class="row no-gutters g-mx-minus-10">

        @foreach($site_pictures as $picture)
          @if($picture->picture_category->pic_category_name == 'What we do')

          <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
            <!-- Projects -->
            <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
              <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/pictures/'.$picture->picture)}}" alt="{{$picture->picture_title}}">
              <span class="g-font-weight-600 g-font-size-12 text-uppercase"></span>
              <h3 class="h4 g-font-weight-600 mb-0">{{$picture->picture_title}}</h3>

              <a class="u-link-v2" href="{{ $picture->picture_link }}"></a>
            </div>
            <!-- End Projects -->
          </div>

          @endif
        @endforeach

        

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