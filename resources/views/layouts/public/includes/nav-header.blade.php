<!-- Header -->
    <header id="js-header" class="u-header u-header--static">
      <!-- Top Bar -->
      <div class="u-header__section u-header__section--hidden u-header__section--dark g-bg-black g-py-18">
        <div class="container">
          <div class="row flex-column flex-md-row align-items-center justify-content-between g-color-white">
            
            <div class="col-auto g-px-15">
              <i class="icon-phone g-font-size-24 g-valign-middle g-color-primary g-mr-10"></i>
              +23414543236
            </div>

            <div class="col-auto g-px-15">
              <i class="icon-location-pin g-font-size-24 g-valign-middle g-color-primary g-mr-10"></i>
              14 Chijioke Akwukwuma Street Bera Estate, Chevron Drive, Lagos.
            </div>

            <div class="col-auto g-px-15">
              <i class="icon-envelope g-font-size-24 g-valign-middle g-color-primary g-mr-15"></i>
              <a href="mailto:#" class="g-color-white g-color-primary--hover g-text-underline--none--hover">info@gosgem.com</a>
            </div>


            <div class="col-auto g-px-15">
              <i class="icon-user g-font-size-24 g-valign-middle g-color-primary g-mr-15"></i>
              <a href="{{url('login')}}" class="g-color-white g-color-primary--hover g-text-underline--none--hover">Login</a>
            </div>
          </div>
        </div>
      </div>
      <!-- End Top Bar -->
      <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
        <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal">
          <div class="container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <!-- Logo -->
            <a href="{{url('/')}}" class="navbar-brand d-flex">
              <svg width="86px" height="32px" viewBox="0 0 86 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-78.000000, -19.000000)">
                    <img id="logo" src="{{asset('unify/assets/img/logo/gospelgem.png')}}" alt="gospelgem">
                  </g>
                </g>
              </svg>
            </a>
            <!-- End Logo -->

            <!-- Navigation -->
            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
              <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">
               
                <!-- Home -->
                <li class="nav-item active g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut" data-max-width="60%" data-position="left">
                  <a id="mega-menu-home" class="nav-link g-py-7 g-px-0" href="{{url('/')}}" aria-haspopup="true" aria-expanded="false">Home</a>
                </li>
                <!-- End Home -->

                <!-- About -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-px-0" href="{{url('about')}}" aria-haspopup="true" aria-expanded="false">About</a>
                </li>
                <!-- End About -->
                <!-- Demos -->
                <li class="nav-item hs-has-sub-menu  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-demos" class="nav-link g-py-7 g-px-0" href="https://courses.gosgem.com/" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-demos" target="_blank">Mentorship</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu-demos" aria-labelledby="nav-link-demos">

                    <!-- Demos - Admin Template -->
                    <li class="dropdown-item ">
                      <a class="nav-link" href="../../../admin-template/dashboards/dashboard-v1.html" target="_blank">Register<span class="u-label g-rounded-3 g-font-size-10 g-bg-lightred g-py-3 g-pos-rel g-top-minus-1 g-ml-5"></a>
                    </li>
                    <!-- End Demos - Admin Template -->

                    <!-- Demos - University -->
                    <li class="dropdown-item ">
                      <a class="nav-link" href="https://courses.gosgem.com/" target="_blank">Courses <span class="g-opacity-0_5"></span></a>
                    </li>
                    <!-- End Demos - University -->

                    <!-- Demos - Marketing -->
                    <li class="dropdown-item ">
                      <a class="nav-link" href="../../../multipage/marketing/home-page-1.html" target="_blank">Live Classes <span class="g-opacity-0_5">(20 of 50 participants)</span></a>
                    </li>
                    <!-- End Demos - Marketing -->

                  </ul>
                </li>
                <!-- End Demos -->
                <!-- Demos -->
                <li class="nav-item hs-has-sub-menu  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-demos" class="nav-link g-py-7 g-px-0" href="{{url('competition')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-demos">Competition</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu-demos" aria-labelledby="nav-link-demos">

                    <!-- Demos - Admin Template -->
                    <li class="dropdown-item ">
                      <a class="nav-link" href="../../../admin-template/dashboards/dashboard-v1.html" target="_blank">Contestants Registration <span class="u-label g-rounded-3 g-font-size-10 g-bg-lightred g-py-3 g-pos-rel g-top-minus-1 g-ml-5">Coming Soon</span></a>
                    </li>
                    <!-- End Demos - Admin Template -->

                    <!-- Demos - E-Commerce -->
                    <li class="dropdown-item ">
                      <a class="nav-link" href="../../../e-commerce/home-page-1.html" target="_blank">Contestants <span class="g-opacity-0_5">(44 Contestants)</span></a>
                    </li>
                    <!-- End Demos - E-Commerce -->

                    <!-- Demos - University -->
                    <li class="dropdown-item ">
                      <a class="nav-link" href="../../../multipage/education/home-page-1.html" target="_blank">Audition <span class="g-opacity-0_5">(2 locations)</span></a>
                    </li>
                    <!-- End Demos - University -->

                    <!-- Demos - Marketing -->
                    <li class="dropdown-item ">
                      <a class="nav-link" href="../../../multipage/marketing/home-page-1.html" target="_blank">Judges <span class="g-opacity-0_5">(4 Judges)</span></a>
                    </li>
                    <!-- End Demos - Marketing -->

                  </ul>
                </li>
                <!-- End Demos -->

                <!-- Demos -->
                <li class="nav-item hs-has-sub-menu  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-demos" class="nav-link g-py-7 g-px-0" href="{{url('competition')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-demos">GALLERY</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu-demos" aria-labelledby="nav-link-demos">

                    <!-- Demos - Admin Template -->
                    <li class="dropdown-item ">
                      <a class="nav-link" href="../../../admin-template/dashboards/dashboard-v1.html" target="_blank">Videos <span class="u-label g-rounded-3 g-font-size-10 g-bg-lightred g-py-3 g-pos-rel g-top-minus-1 g-ml-5">Coming Soon</span></a>
                    </li>
                    <!-- End Demos - Admin Template -->

                    <!-- Demos - E-Commerce -->
                    <li class="dropdown-item ">
                      <a class="nav-link" href="../../../e-commerce/home-page-1.html" target="_blank">Pictures <span class="g-opacity-0_5">(44 Contestants)</span></a>
                    </li>
                    <!-- End Demos - E-Commerce -->
                  </ul>
                </li>
                <!-- End Demos -->

                <!-- End About -->

                <!-- About -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-px-0" href="{{url('contact')}}" aria-haspopup="true" aria-expanded="false">Contact</a>
                </li>
                <!-- End About -->

              </ul>
            </div>
            <!-- End Navigation -->

          </div>
        </nav>
      </div>
    </header>
    <!-- End Header -->