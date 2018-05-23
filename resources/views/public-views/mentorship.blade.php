@extends('layouts.public.app')

@section('content')

	@include('layouts.public.includes.nav-header')

 	    <!-- Promo Block -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
      <!-- Parallax Image -->
      <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-pos-center g-bg-black-opacity-0_2--after" style="height: 140%; background-image: url(/unify/assets/img-temp/1920x800/mentorship.jpg);"></div>
      <!-- End Parallax Image -->

      <!-- Promo Block Content -->
      <div class="container g-color-white text-center g-py-150">
        <span class="d-block g-font-weight-300 g-font-size-25 mb-3">MENTORSHIP PROGRAM</span>
        <h3 class="h1 text-uppercase mb-0">Learn From The Best So You can Become The Best.</h3>
      </div>
      <!-- Promo Block Content -->
    </section>

    <!-- Icon Blocks -->
    <section class="g-bg-secondary">
      <div class="container g-py-100">
        <div class="row justify-content-center g-mb-60">
          <div class="col-lg-7">
            <!-- Heading -->
            <div class="text-center">
              <h2 class="h3 g-color-black text-uppercase mb-2">MENTORSHIP PROGRAM</h2>
              <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
              <p class="lead mb-0">The Mentorship Program is our flagship platform; a forum where we create a digital relationship between you, and our headlined mentor for the program in an academic structure.</p><hr>
              <p>
                <a href="{{url('register')}}" class="btn btn-md u-btn-inset u-btn-yellow g-mr-10 g-mb-15">JOIN OUR MENTORSHIP PROGRAM</a>
                <span class="align-middle g-color-primary mx-1">or</span>
                <a href="https://courses.gosgem.com/" target="_blank" class="btn btn-md u-btn-inset u-btn-deeporange g-mr-10 g-mb-15">Login to View Courses</a>
              </p>
            </div>
            <!-- End Heading -->
          </div>
        </div>

        <!-- Icon Blocks -->
        <div class="row">
          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-communication-170 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Live Classes</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Enrolled for live classes </p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-communication-165 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Interaction with Mentors</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Have the opportunity for live interaction with the Mentor</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
        <!-- End Icon Blocks -->

        <!-- Icon Blocks -->
        <div class="row">
          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-communication-018 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Live Q and A</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">You can ask questions live, and receive answers</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-communication-168 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Assignments</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">You are given assignments</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
        <!-- End Icon Blocks -->

        <!-- Icon Blocks -->
        <div class="row">
          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-communication-171 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Collaboration</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Collaboration with our students in teams and groups</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-media-065 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Certificates</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Given certificates of Participation upon completion of the program</p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
        <!-- End Icon Blocks -->

        <!-- Heading -->
        <div class="text-center">
          <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
          <p class="lead mb-0">The Online mentorship program is one of our platform to fulfill our purpose; where we can serve a global audience of Christian artists, who wish to kickstart their musical career through quality mentorship and trainings.</p><hr>
          <p>
            <a href="{{url('register')}}" class="btn btn-md u-btn-inset u-btn-yellow g-mr-10 g-mb-15">JOIN OUR MENTORSHIP PROGRAM</a>
            <span class="align-middle g-color-primary mx-1">or</span>
            <a href="https://courses.gosgem.com/" target="_blank" class="btn btn-md u-btn-inset u-btn-deeporange g-mr-10 g-mb-15">Login to View Courses</a>
          </p>
        </div>
        <!-- End Heading -->
      </div>
    </section>
    <!-- End Icon Blocks -->

	@include('layouts.public.includes.footer')

@endsection