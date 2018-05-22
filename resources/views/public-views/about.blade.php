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
        <span class="d-block g-font-weight-300 g-font-size-25 mb-3">Discover more about Gosgem</span>
        <h3 class="h1 text-uppercase mb-0">Learn From The Best So You can Become The Best</h3>
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

    <!-- Icon Blocks -->
    <section class="g-bg-gray-light-v5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 g-py-100 g-px-40--sm">
            <!-- Icon Blocks -->
            <div class="text-center">
              <span class="u-icon-v2 g-color-white g-bg-primary rounded-circle mb-4">
                <i class="icon-education-087 u-line-icon-pro"></i>
              </span>
              <h3 class="h5 g-color-black text-uppercase mb-3">Creative ideas</h3>
              <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant and ready to adapt.</p>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-py-100 g-px-40--sm">
            <!-- Icon Blocks -->
            <div class="text-center">
              <span class="u-icon-v2 g-color-white g-bg-primary rounded-circle mb-4">
                <i class="icon-education-035 u-line-icon-pro"></i>
              </span>
              <h3 class="h5 g-color-black text-uppercase mb-3">Excellent features</h3>
              <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant and ready to adapt.</p>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-py-100 g-px-40--sm">
            <!-- Icon Blocks -->
            <div class="text-center">
              <span class="u-icon-v2 g-color-white g-bg-primary rounded-circle mb-4">
                <i class="icon-education-141 u-line-icon-pro"></i>
              </span>
              <h3 class="h5 g-color-black text-uppercase mb-3">Fully responsive</h3>
              <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant and ready to adapt.</p>
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
            <h2 class="h3 g-color-black text-uppercase mb-2">Video intro</h2>
            <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
            <p class="mb-0">We are a creative studio focusing on culture, luxury, editorial &amp; art. Somewhere between sophistication and simplicity.</p>
          </div>
          <!-- End Heading -->
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-9">
          <!-- Article -->
          <article class="u-shadow-v21 g-bg-size-cover g-bg-pos-bottom-center text-center" style="background-image: url(/unify/assets/img-temp/900x600/img7.jpg);">
            <div class="g-pos-rel g-z-index-1 g-px-50 g-py-200">
              <a class="js-fancybox d-block" href="javascript:;" data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1" data-speed="350" data-caption="Single Image">
                <span class="u-icon-v3 u-icon-size--lg u-block-hover--scale g-bg-white g-color-black g-color-primary--hover g-font-size-18 g-rounded-50x g-cursor-pointer">
                    <i class="g-pos-rel g-left-2 fa fa-play"></i>
                  </span>
              </a>
            </div>
          </article>
          <!-- End Article -->
        </div>
      </div>
    </section>

    <section class="g-bg-gray-light-v5">
      <div class="container g-pt-100 g-pb-70">
        <div class="row justify-content-center g-mb-60">
          <div class="col-lg-7">
            <!-- Heading -->
            <div class="text-center">
              <h2 class="h3 g-color-black text-uppercase mb-2">What we are good at?</h2>
              <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
              <p class="mb-0">We are a creative studio focusing on culture, luxury, editorial &amp; art. Somewhere between sophistication and simplicity.</p>
            </div>
            <!-- End Heading -->
          </div>
        </div>

        <div class="row g-mb-30">
          <div class="col-lg-6 g-mb-30">
            <div class="mb-5">
              <p>As creatives, it's important that we strive to do work outside of obligation. This lets us stay ahead of the curve for our clients and internal projects.</p>
              <p>At the end of the day, it's important to not let being busy distract us from having fun. Smiling, laughing, and hanging helps us work together to achieve this. It’s important to stay detail oriented with every project we tackle.</p>
            </div>
            <a class="btn btn-md u-btn-outline-black g-font-size-default rounded-0 g-py-10 mr-2" href="#!">Explore More</a>
            <a class="btn btn-md u-btn-primary g-font-size-default rounded-0 g-py-10" href="#!">Purchase Now</a>
          </div>
          <div class="col-lg-6">
            <!-- End Progress Bar -->
            <div class="mb-4">
              <div class="d-flex justify-content-between">
                <h6>Web Design</h6>
                <span class="ml-auto">88%</span>
              </div>
              <div class="js-hr-progress-bar progress g-height-2 rounded-0">
                <div class="js-hr-progress-bar-indicator progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <!-- Progress Bar -->

            <!-- End Progress Bar -->
            <div class="mb-4">
              <div class="d-flex justify-content-between">
                <h6>PHP/WordPress</h6>
                <span class="ml-auto">76%</span>
              </div>
              <div class="js-hr-progress-bar progress g-height-2 rounded-0">
                <div class="js-hr-progress-bar-indicator progress-bar" role="progressbar" style="width: 76%;" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <!-- Progress Bar -->

            <!-- End Progress Bar -->
            <div class="mb-4">
              <div class="d-flex justify-content-between">
                <h6>HTML/CSS</h6>
                <span class="ml-auto">97%</span>
              </div>
              <div class="js-hr-progress-bar progress g-height-2 rounded-0">
                <div class="js-hr-progress-bar-indicator progress-bar" role="progressbar" style="width: 97%;" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <!-- Progress Bar -->

            <!-- End Progress Bar -->
            <div class="d-flex justify-content-between">
              <h6>Illustration</h6>
              <span class="ml-auto">69%</span>
            </div>
            <div class="js-hr-progress-bar progress g-height-2 rounded-0">
              <div class="js-hr-progress-bar-indicator progress-bar" role="progressbar" style="width: 69%;" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <!-- Progress Bar -->
          </div>
        </div>
      </div>
    </section>

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

    <!-- Testimonials -->
    <section class="g-bg-gray-light-v5 g-pt-100 g-pb-50">
      <div class="container">
        <div class="row justify-content-center g-mb-60">
          <div class="col-lg-7">
            <!-- Heading -->
            <div class="text-center">
              <h2 class="h3 g-color-black text-uppercase mb-2">What people say about Unify?</h2>
              <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
              <p class="mb-0">We are a creative studio focusing on culture, luxury, editorial &amp; art. Somewhere between sophistication and simplicity.</p>
            </div>
            <!-- End Heading -->
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 g-mb-50">
            <!-- Testimonials -->
            <blockquote class="lead u-blockquote-v1 rounded g-pl-60 g-pr-30 g-py-30 g-mb-40">Dear Htmlstream team, I just bought the Unify template some weeks ago. The template is really nice and offers quite a large set of options.</blockquote>
            <div class="media">
              <img class="d-flex align-self-center rounded-circle g-width-60 g-brd-around g-brd-3 g-brd-white mr-3" src="{{asset('unify/assets/img-temp/100x100/img16.jpg')}}" alt="Image Description">
              <div class="media-body align-self-center">
                <h4 class="h6 g-font-weight-700 g-mb-0">Alexandra Pottorf</h4>
                <em class="g-color-gray-dark-v4 g-font-style-normal">Web Developer</em>
              </div>
            </div>
            <!-- End Testimonials -->
          </div>

          <div class="col-md-6 g-mb-50">
            <!-- Testimonials -->
            <blockquote class="lead u-blockquote-v1 rounded g-pl-60 g-pr-30 g-py-30 g-mb-40">Hi there purchased a couple of days ago and the site looks great, big thanks to the htmlstream guys, they gave me some great help with some fiddly setup issues.</blockquote>
            <div class="media">
              <img class="d-flex align-self-center rounded-circle g-width-60 g-brd-around g-brd-3 g-brd-white mr-3" src="{{asset('unify/assets/img-temp/100x100/img14.jpg')}}" alt="Image Description">
              <div class="media-body align-self-center">
                <h4 class="h6 g-font-weight-700 g-mb-0">Bastien Rojanawisut</h4>
                <em class="g-color-gray-dark-v4 g-font-style-normal">UX/UI Designer</em>
              </div>
            </div>
            <!-- End Testimonials -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonials -->

	@include('layouts.public.includes.footer')

@endsection