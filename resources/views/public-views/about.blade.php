@extends('layouts.public.app')

@section('content')

	@include('layouts.public.includes.nav-header')

 	    <!-- Promo Block -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
      <!-- Parallax Image -->
      <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-pos-center g-bg-black-opacity-0_2--after" style="height: 140%; background-image: url(/unify/assets/img-temp/1920x800/about-us.jpg);"></div>
      <!-- End Parallax Image -->

      <!-- Promo Block Content -->
      <div class="container g-color-white text-center g-py-150">
        <span class="d-block g-font-weight-300 g-font-size-25 mb-3">We are GosGem!</span>
        <h3 class="h1 text-uppercase mb-0">Discover more about Gosgem</h3>
      </div>
      <!-- Promo Block Content -->
    </section>
    <!-- End Promo Block -->
    <section class="container g-pt-100 g-pb-50">
      <div class="u-heading-v6-2 text-center g-mb-60">
          <span class="d-block g-color-gray-dark-v4 g-font-weight-600 g-font-size-13 text-uppercase">What is</span>
          <h2 class="h1 u-heading-v6__title g-brd-black g-color-black g-font-weight-600 mb-0">GosGem</h2>
        </div>
      <div class="g-pos-rel">
      <!-- Info Blocks -->
        <div class="row align-items-stretch no-gutters">
          <div class="col-lg-6">
            <!-- Article -->
            <article class="h-100 text-left text-lg-right u-block-hover g-flex-middle g-color-white--hover g-bg-gray-dark-v1 g-transition-0_3 g-py-70 g-px-30 g-pr-150--lg">
              <div class="u-block-hover__additional--fade g-bg-size-cover g-bg-cover g-bg-primary-opacity-0_8--after g-pos-abs" data-bg-img-src="{{asset('unify/assets/img-temp/900x400/img1.jpg')}}">
              </div>
              <div class="g-flex-middle-item g-pos-rel g-z-index-1">
                <h3 class="h5 g-color-white g-font-weight-700 text-uppercase g-mb-12">The Initiative</h3>
                <p class="g-color-white-opacity-0_7 mb-0"> GosGEM is an initiative to harness the gifts of talented Christian artists around the world, by providing a platform where they can be mentored by very successful Christian singers and also taught by professionals in the music industry today.</p>
              </div>
            </article>
            <!-- End Article -->
          </div>

          <div class="col-lg-6">
            <!-- Article -->
            <article class="h-100 u-block-hover g-flex-middle g-color-white--hover g-bg-black g-transition-0_3 g-py-70 g-px-30 g-pl-150--lg">
              <div class="u-block-hover__additional--fade g-bg-size-cover g-bg-cover g-bg-primary-opacity-0_8--after g-pos-abs" data-bg-img-src="{{asset('unify/assets/img-temp/900x400/img2.jpg')}}">
              </div>
              <div class="g-flex-middle-item g-pos-rel g-z-index-1">
                <h3 class="h5 g-color-white g-font-weight-700 text-uppercase g-mb-12">Our Purpose</h3>
                <p class="g-color-white-opacity-0_7 mb-0">Our Purpose at GosGem is to provide students with the opportunity to meet, interact and learn from our accomplished music minister and experienced instructors from the comfort of their homes.</p>
              </div>
            </article>
            <!-- End Article -->
          </div>
        </div>

        <div class="row align-items-stretch no-gutters">
          <div class="col-lg-6">
            <!-- Article -->
            <article class="h-100 text-left text-lg-right u-block-hover g-flex-middle g-color-white--hover g-bg-black g-transition-0_3 g-py-70 g-px-30 g-pr-150--lg">
              <div class="u-block-hover__additional--fade g-bg-size-cover g-bg-cover g-bg-primary-opacity-0_8--after g-pos-abs" data-bg-img-src="{{asset('unify/assets/img-temp/900x400/img3.jpg')}}">
              </div>
              <div class="g-flex-middle-item g-pos-rel g-z-index-1">
                <h3 class="h5 g-color-white g-font-weight-700 text-uppercase g-mb-12">Mentorship Program</h3>
                <p class="g-color-white-opacity-0_7 mb-0">The Online mentorship program is one of our platform to fulfill our purpose; where we can serve a global audience of Christian artists, who wish to kickstart their musical career through quality mentorship and trainings.</p>
              </div>
            </article>
            <!-- End Article -->
          </div>

          <div class="col-lg-6">
            <!-- Article -->
            <article class="h-100 u-block-hover g-flex-middle g-color-white--hover g-bg-gray-dark-v1 g-transition-0_3 g-py-70 g-px-30 g-pl-150--lg">
              <div class="u-block-hover__additional--fade g-bg-size-cover g-bg-cover g-bg-primary-opacity-0_8--after g-pos-abs" data-bg-img-src="{{asset('unify/assets/img-temp/900x400/img4.jpg')}}">
              </div>
              <div class="g-flex-middle-item g-pos-rel g-z-index-1">
                <h3 class="h5 g-color-white g-font-weight-700 text-uppercase g-mb-12">Bridging The Gap</h3>
                <p class="g-color-white-opacity-0_7 mb-0">GosGem is hereby interested in bridging this gap through a beautifully built, robust and interactive online training platform. </p>
              </div>
            </article>
            <!-- End Article -->
          </div>
        </div>

        <img class="g-hidden-md-down g-width-200 g-height-200 g-absolute-centered" src="{{asset('unify/assets/img-temp/230x230/img1.jpg')}}" alt="Image Description">
      <!-- End Info Blocks -->
    </div>
    </section>

        <!-- About Us -->
    <section class="g-py-100">
      <div class="container">
        <header class="text-center g-width-60x--md mx-auto g-mb-60">
          <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
            <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600">WHO NEEDS GOSGEM</h2>
          </div>
         
        </header>

        <div class="row">
          <div class="col-lg-6 align-self-center">
            <img class="img-fluid" src="{{asset('unify/assets/img-temp/600x330/img1.png')}}" alt="Image description">
          </div>

          <div class="col-lg-6 align-self-center g-pl-30--lg g-mb-50 g-mb-0--lg">
            <p class="g-mb-30">Every <strong>gifted</strong> individual whose interest is to:</p>

            <div class="row">
              <div class="col-sm-6">
                <ul class="list-unstyled g-color-gray-dark-v4 g-mb-30 g-mb-0--sm">
                  <li class="d-flex g-mb-10">
                    <i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i> gain sharper focus on what is needed to grow professionally in music
                  </li>
                  <li class="d-flex g-mb-10">
                    <i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i> Complement ongoing formal study and development activities
                  </li>
                  <li class="d-flex g-mb-10">
                    <i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i> Get assistance with ideas and honest feedback 
                  </li>
                  <li class="d-flex g-mb-10">
                    <i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i> Improve ability to express expectations, goals, and concerns 
                  </li>
                </ul>
              </div>

              <div class="col-sm-6">
                <ul class="list-unstyled g-color-gray-dark-v4">
                  <li class="d-flex g-mb-10">
                    <i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i> Gain capacity to translate values and strategies into productive actions 
                  </li>
                  <li class="d-flex g-mb-10">
                    <i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i> Gain career development opportunities
                  </li>
                  <li class="d-flex g-mb-10">
                    <i class="icon-arrow-right-circle g-color-primary g-mt-5 g-mr-10"></i> Increase career networks and receives greater industry exposure 
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Us -->

    <!-- Black Call To Action -->
    <div class="g-mb-50">
      <div id="shortcode32">
        <div class="shortcode-html">
          <div class="g-bg-img-hero" style="background-image: url(/unify/assets/include/svg/svg-bg3.svg);">
            <div class="container g-pt-60 g-pb-30">
              <div class="row justify-content-lg-center align-items-md-center">
                <div class="col-md-9 col-lg-7 g-mb-30">
                  <!-- Media -->
                  <div class="media align-items-center g-pr-15--lg">
                    <div class="d-flex mr-5">
                      <span class="u-icon-v3 u-icon-size--lg g-color-primary g-bg-primary-opacity-0_1 rounded-circle">
                        <i class="material-icons">toys</i>
                      </span>
                    </div>

                    <div class="media-body">
                      <h3 class="h2">Join our mentorship program</h3>
                      <p>Do you wish to meet, interact and learn from accomplished music ministers and experienced instructors from the comfort of your home? If yes, join our mentorship program now.</p>
                    </div>
                  </div>
                  <!-- End Media -->
                </div>

                <div class="col-5 col-md-3 col-lg-2 mx-auto g-mx-0--lg g-mb-30">
                  <button class="btn btn-block u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-25 g-py-13" type="button">Register Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- End Black Call To Action -->


    <!-- Team Blocks -->
    <section class="container g-pt-100 g-pb-70">
      <div class="row justify-content-center g-mb-60">
        <div class="col-lg-7">
          <!-- Heading -->
          <div class="text-center">
            <h2 class="h3 g-color-black text-uppercase mb-2">Meet your creative team</h2>
            <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
            <p class="mb-0">We are a creative studio focusing on culture, luxury, editorial &amp; art. Somewhere between sophistication and simplicity.</p>
          </div>
          <!-- End Heading -->
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-sm-6 g-mb-30">
          <div class="text-center u-block-hover">
            <!-- Figure -->
            <figure class="u-block-hover g-mb-25">
              <!-- Figure Image -->
              <img class="w-100" src="{{asset('unify/assets/img-temp/400x550/img1.jpg')}}" alt="Image Description">
              <!-- End Figure Image -->

              <!-- Figure Caption -->
              <figcaption class="u-block-hover__additional--fade g-bg-primary-opacity-0_9 g-flex-middle g-px-10">
                <q class="u-quote-v1 g-flex-middle-item g-color-white g-font-weight-700 g-font-size-16 text-uppercase">changing your mind and changing world</q>

                <!-- Figure Social Icons -->
                <ul class="list-inline g-flex-middle-item--bottom g-mb-30 mt-0">
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
                <!-- End Figure Social Icons -->
              </figcaption>
              <!-- End Figure Caption -->
            </figure>
            <!-- End Figure -->

            <!-- Figure Info -->
            <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5">Photographer</em>
            <h4 class="h5 g-color-black g-mb-5">Katalina Watson</h4>
            <p class="g-font-size-13">head photographer</p>
            <!-- End Figure Info-->
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 g-mb-30">
          <div class="text-center u-block-hover">
            <!-- Figure -->
            <figure class="u-block-hover g-mb-25">
              <!-- Figure Image -->
              <img class="w-100" src="{{asset('unify/assets/img-temp/400x550/img2.jpg')}}" alt="Image Description">
              <!-- End Figure Image -->

              <!-- Figure Caption -->
              <figcaption class="u-block-hover__additional--fade g-bg-primary-opacity-0_9 g-flex-middle g-px-10">
                <q class="u-quote-v1 g-flex-middle-item g-color-white g-font-weight-700 g-font-size-16 text-uppercase">changing your mind and changing world</q>

                <!-- Figure Social Icons -->
                <ul class="list-inline g-flex-middle-item--bottom g-mb-30 mt-0">
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
                <!-- End Figure Social Icons -->
              </figcaption>
              <!-- End Figure Caption -->
            </figure>
            <!-- End Figure -->

            <!-- Figure Info -->
            <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5">Designer</em>
            <h4 class="h5 g-color-black g-mb-5">Tina Krueger</h4>
            <p class="g-font-size-12">art director</p>
            <!-- End Figure Info-->
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 g-mb-30">
          <div class="text-center u-block-hover">
            <!-- Figure -->
            <figure class="u-block-hover g-mb-25">
              <!-- Figure Image -->
              <img class="w-100" src="{{asset('unify/assets/img-temp/400x550/img3.jpg')}}" alt="Image Description">
              <!-- End Figure Image -->

              <!-- Figure Caption -->
              <figcaption class="u-block-hover__additional--fade g-bg-primary-opacity-0_9 g-flex-middle g-px-10">
                <q class="u-quote-v1 g-flex-middle-item g-color-white g-font-weight-700 g-font-size-16 text-uppercase">changing your mind and changing world</q>

                <!-- Figure Social Icons -->
                <ul class="list-inline g-flex-middle-item--bottom g-mb-30 mt-0">
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
                <!-- End Figure Social Icons -->
              </figcaption>
              <!-- End Figure Caption -->
            </figure>
            <!-- End Figure -->

            <!-- Figure Info -->
            <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5">Co-Founder</em>
            <h4 class="h5 g-color-black g-mb-5">David Olsson</h4>
            <p class="g-font-size-12">creative director</p>
            <!-- End Figure Info-->
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 g-mb-30">
          <div class="text-center u-block-hover">
            <!-- Figure -->
            <figure class="u-block-hover g-mb-25">
              <!-- Figure Image -->
              <img class="w-100" src="{{asset('unify/assets/img-temp/400x550/img4.jpg')}}" alt="Image Description">
              <!-- End Figure Image -->

              <!-- Figure Caption -->
              <figcaption class="u-block-hover__additional--fade g-bg-primary-opacity-0_9 g-flex-middle g-px-10">
                <q class="u-quote-v1 g-flex-middle-item g-color-white g-font-weight-700 g-font-size-16 text-uppercase">changing your mind and changing world</q>

                <!-- Figure Social Icons -->
                <ul class="list-inline g-flex-middle-item--bottom g-mb-30 mt-0">
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
                <!-- End Figure Social Icons -->
              </figcaption>
              <!-- End Figure Caption -->
            </figure>
            <!-- End Figure -->

            <!-- Figure Info -->
            <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5">Co-Founder</em>
            <h4 class="h5 g-color-black g-mb-5">Sara Lisbon</h4>
            <p class="g-font-size-12">marketing director</p>
            <!-- End Figure Info-->
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Blocks -->

	@include('layouts.public.includes.footer')

@endsection