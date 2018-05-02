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
              <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                  <i class="icon-communication-081 u-line-icon-pro"></i>
                </span>
              <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">Mentoring</h3>
              <p class="mb-0">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-px-40 g-mb-50 g-mb-0--lg">
            <!-- Icon Blocks -->
            <div class="text-center">
              <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                  <i class="icon-finance-086 u-line-icon-pro"></i>
                </span>
              <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">Competition</h3>
              <p class="mb-0">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-px-40">
            <!-- Icon Blocks -->
            <div class="text-center">
              <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                  <i class="icon-communication-057 u-line-icon-pro"></i>
                </span>
              <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">Events</h3>
              <p class="mb-0">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Icon Blocks -->

    <hr class="g-brd-gray-light-v4 my-0">



    <!-- Projects -->
    <section class="container g-py-100">
      <div class="text-center g-mb-50">
        <h2 class="h1 g-color-black g-font-weight-600">Featured Courses</h2>
        <p class="lead">This is where we begin to visualize your napkin sketches and make them into pixels.</p>
      </div>

      <div class="row no-gutters g-mx-minus-10">
        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-purple--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img-temp/425x250/img1.png')}}" alt="Image Description">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase">Mockups</span>
            <h3 class="h4 g-font-weight-600 mb-0">Kitchen Tools</h3>

            <a class="u-link-v2" href="#!"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-cyan--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img-temp/425x250/img2.png')}}" alt="Image Description">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase">Others</span>
            <h3 class="h4 g-font-weight-600 mb-0">Brochure</h3>

            <a class="u-link-v2" href="#!"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-teal--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img-temp/425x250/img3.png')}}" alt="Image Description">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase">Hi-Tech</span>
            <h3 class="h4 g-font-weight-600 mb-0">MacBook Pro</h3>

            <a class="u-link-v2" href="#!"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-lightred--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img-temp/425x250/img4.png')}}" alt="Image Description">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase">Hi-tech</span>
            <h3 class="h4 g-font-weight-600 mb-0">Latest VR product</h3>

            <a class="u-link-v2" href="#!"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img-temp/425x250/img5.png')}}" alt="Image Description">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase">Others</span>
            <h3 class="h4 g-font-weight-600 mb-0">Brochure</h3>

            <a class="u-link-v2" href="#!"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-pink--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img-temp/425x250/img6.png')}}" alt="Image Description">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase">Cosmetics</span>
            <h3 class="h4 g-font-weight-600 mb-0">Spa Cosmetics</h3>

            <a class="u-link-v2" href="#!"></a>
          </div>
          <!-- End Projects -->
        </div>
      </div>
    </section>
    <!-- End Projects -->

    <!-- Counters -->
    <section class="g-brd-top g-brd-bottom g-brd-gray-light-v4 g-pt-50">
      <div class="container">
        <div class="row text-center text-uppercase">
          <div class="col-lg-3 col-sm-6 g-brd-right g-brd-gray-light-v4 g-mb-50">
            <div class="js-counter g-color-gray-dark-v2 g-font-size-35 g-font-weight-300 g-mb-7">52147</div>
            <h4 class="h6 g-color-gray-dark-v5">Code Lines</h4>
          </div>

          <div class="col-lg-3 col-sm-6 g-brd-right--lg g-brd-gray-light-v4 g-mb-50">
            <div class="js-counter g-color-gray-dark-v2 g-font-size-35 g-font-weight-300 g-mb-7">24583</div>
            <h4 class="h6 g-color-gray-dark-v5">Projects</h4>
          </div>

          <div class="col-lg-3 col-sm-6 g-brd-right g-brd-gray-light-v4 g-mb-50">
            <div class="js-counter g-color-gray-dark-v2 g-font-size-35 g-font-weight-300 g-mb-7">7348</div>
            <h4 class="h6 g-color-gray-dark-v5">Working Hours</h4>
          </div>

          <div class="col-lg-3 col-sm-6 g-mb-50">
            <div class="js-counter g-color-gray-dark-v2 g-font-size-35 g-font-weight-300 g-mb-7">87904</div>
            <h4 class="h6 g-color-gray-dark-v5">Job Offers</h4>
          </div>
        </div>
      </div>
    </section>
    <!-- End Counters -->


    <!-- Call To Action -->
    <section class="g-bg-primary g-color-white g-pa-30" style="background-image: url({{asset('unify/assets/img/bg/pattern5.png);">
      <div class="d-md-flex justify-content-md-center text-center">
        <div class="align-self-md-center">
          <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">These courses will inspire you to become your best.</p>
        </div>
        <div class="align-self-md-center">
          <a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12" target="_blank" href="https://wrapbootstrap.com/theme/unify-responsive-website-template-WB0412697?ref=htmlstream">Register Now</a>
        </div>
      </div>
    </section>
    <!-- End Call To Action -->

    @include('layouts.public.includes.footer')

@endsection