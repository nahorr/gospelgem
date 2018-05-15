@extends('layouts.public.app')

@section('content')

	@include('layouts.public.includes.nav-header')

	    <!-- Promo Block -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall " data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
      <!-- Parallax Image -->
      <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-black-opacity-0_4--after" style="height: 140%; background-image: url(../../assets/img-temp/1920x800/img6.jpg);"></div>
      <!-- End Parallax Image -->

      <!-- Promo Block Content -->
      <div class="container g-color-white text-center g-py-150">
        <h1 class="h2 g-font-weight-300">It is good to meet you</h1>
        <h2 class="display-2 g-font-weight-600 text-uppercase g-letter-spacing-1 mb-0">Contact us</h2>
      </div>
      <!-- Promo Block Content -->
    </section>
    <!-- End Promo Block -->

    <section class="container g-pt-100 g-pb-40">
      <div class="row justify-content-between">
        <div class="col-lg-7 g-mb-60">
          <h2 class="h3">Contact us</h2>
          <p class="g-color-gray-dark-v3 g-font-size-16">We are a creative studio focusing on culture, luxury, editorial &amp; art. Somewhere between sophistication and simplicity.</p>

          <hr class="g-my-40">

          <!-- Contact Form -->
          <form>
            <div class="g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Your name: <span class="g-color-red">*</span>
              </label>
              <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-primary--focus g-brd-gray-light-v4 rounded-3 g-py-13 g-px-15" type="text">
            </div>

            <div class="g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Your email: <span class="g-color-red">*</span>
              </label>
              <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-primary--focus g-brd-gray-light-v4 rounded-3 g-py-13 g-px-15" type="email">
            </div>

            <div class="g-mb-40">
              <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Your message: <span class="g-color-red">*</span>
              </label>
              <textarea class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-primary--focus g-brd-gray-light-v4 g-resize-none rounded-3 g-py-13 g-px-15" rows="7"></textarea>
            </div>

            <button class="btn btn-lg u-btn-primary g-font-weight-600 g-font-size-default rounded-3 text-uppercase g-py-15 g-px-30" type="submit" role="button">Send Enquiry</button>
          </form>
          <!-- End Contact Form -->
        </div>

        <div class="col-lg-4 g-mb-60">
          <!-- Google Map -->
          <div id="GMapCustomized-light" class="js-g-map embed-responsive embed-responsive-21by9 g-height-300" data-type="custom" data-lat="40.674" data-lng="-73.946" data-zoom="12" data-title="Agency" data-styles='[["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]], ["", "labels", [{"visibility":"on"}]], ["water", "", [{"color":"#bac6cb"}]] ]'
          data-pin="true" data-pin-icon="../../assets/img/icons/pin/green.png">
          </div>
          <!-- End Google Map -->

          <hr class="g-my-40">

          <!-- Contact Info -->
          <h2 class="h3 mb-4">Contact info</h2>
          <div class="media mb-2">
            <i class="d-flex g-color-gray-dark-v5 mt-1 mr-3 icon-hotel-restaurant-235 u-line-icon-pro"></i>
            <div class="media-body">
              <p class="g-color-gray-dark-v3 mb-2">Unit 25 Suite 3, 925 Prospect PI
                <br>New York Avenue,
                <br>United States</p>
            </div>
          </div>
          <div class="media mb-2">
            <i class="d-flex g-color-gray-dark-v5 mt-1 mr-3 icon-communication-062 u-line-icon-pro"></i>
            <div class="media-body">
              <p class="g-color-gray-dark-v3 mb-2">Email: <a class="g-color-gray-dark-v4" href="#!">htmlstream@support.com</a>
              </p>
            </div>
          </div>
          <div class="media mb-2">
            <i class="d-flex g-color-gray-dark-v5 mt-1 mr-3 icon-communication-033 u-line-icon-pro"></i>
            <div class="media-body">
              <p class="g-color-gray-dark-v3">Call: <span class="g-color-gray-dark-v4">+32 333 444 555</span>
              </p>
            </div>
          </div>
          <!-- End Contact Info -->

          <hr class="g-my-40">

          <a class="g-color-main g-color-black--hover g-text-underline--none--hover" href="#!">
            <span class="align-middle u-icon-v2 u-icon-size--sm g-color-white g-bg-primary rounded-circle mr-3">
                <i class="g-font-size-default icon-finance-206 u-line-icon-pro"></i>
              </span>
            <span class="g-font-weight-600 g-font-size-18">Live chat</span>
          </a>
        </div>
      </div>
    </section>

 

	@include('layouts.public.includes.footer')

@endsection