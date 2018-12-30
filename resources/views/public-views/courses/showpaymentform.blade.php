@extends('layouts.public.app')

@section('content')

@include('layouts.public.includes.nav-header')

<!-- Our Pricing -->
    <section class="g-bg-secondary g-py-100">
      <div class="container">
        <header class="text-center g-width-60x--md mx-auto g-mb-60">
          <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
            <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600">{{ $course->course_name }}</h2>
          </div>
          <p class="lead">{{ $course->course_description }}</p>
        </header>

        <div class="row align-items-lg-center">
          <div class="col-lg-8 col-md-7">
            <!-- Row -->
            <div class="row g-mr-20--md g-mb-30--lg">
              <div class="col-lg-6 g-mb-40">
                <i class="icon-education-197 u-line-icon-pro d-block g-font-size-55 g-line-height-1 g-color-primary g-mb-15"></i>
                <h4 class="h4 g-color-gray-dark-v2 g-mb-10">Instructor</h4>
                <p class="mb-0">Curabitur sit amet fringilla mi. Etiam ac massa sit amet nulla eleifend rutrum vitae non sem.</p>
              </div>

              <div class="col-lg-6 g-mb-40">
                <i class="icon-education-127 u-line-icon-pro d-block g-font-size-55 g-line-height-1 g-color-primary g-mb-15"></i>
                <h4 class="h4 g-color-gray-dark-v2 g-mb-10">Venue</h4>
                <p class="mb-0">Aenean volutpat erat quis mollis accumsan. Mauris at cursus ipsum. Praesent molestie imperdiet.</p>
              </div>
            </div>
            <!-- End Row -->

            <!-- Row -->
            <div class="row g-mr-20--md">
              <div class="col-lg-6 g-mb-40 g-mb-0--lg">
                <i class="icon-finance-035 u-line-icon-pro d-block g-font-size-55 g-line-height-1 g-color-primary g-mb-15"></i>
                <h4 class="h4 g-color-gray-dark-v2 g-mb-10">Date and Time</h4>
                <p class="mb-0">Curabitur sit amet fringilla mi. Etiam ac massa sit amet nulla eleifend rutrum vitae non sem.</p>
              </div>

              <div class="col-lg-6 g-mb-40 g-mb-0--lg">
                <i class="icon-finance-114 u-line-icon-pro d-block g-font-size-55 g-line-height-1 g-color-primary g-mb-15"></i>
                <h4 class="h4 g-color-gray-dark-v2 g-mb-10">Cost</h4>
                <p class="mb-0">Aenean volutpat erat quis mollis accumsan. Mauris at cursus ipsum. Praesent molestie imperdiet.</p>
              </div>
            </div>
            <!-- End Row -->
          </div>

          <div class="col-lg-4 col-md-5">
            <!-- Article -->
                <article class="text-center u-block-hover u-block-hover__additional--jump g-brd-around g-bg-gray-light-v5 g-brd-gray-light-v4 g-color-gray-dark-v5">
                  

                  <!-- Article Image -->
                  <img class="w-100" src="{{asset('unify/assets/img/coursepictures/'.$course->course_picture)}}" alt="{{$course->course_name}}">
                  <!-- End Article Image -->

                  <!-- Article Content -->
                  <div class="g-pa-40">
                    <div class="g-mb-10">
                     <strong class="d-block g-color-primary g-font-size-24 g-mt-5">${{ $course->price }}</strong>
                    </div>

                    <p class="g-mb-30">Course starting soon. Order now to reserve your seat. </p>
                    <a class="btn text-uppercase u-btn-primary g-rounded-50 g-font-size-12 g-font-weight-700 g-pa-15-30" href="https://paystack.com/pay/yr9c4o6l2y">Order Now</a>
                  </div>
                  <!-- End Article Content -->
                </article>
                <!-- End Article -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Our Pricing -->

@include('layouts.public.includes.footer')

@endsection