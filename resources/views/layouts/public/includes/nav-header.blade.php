<!-- Header -->
    <header id="js-header" class="u-header u-header--static u-header--show-hide u-header--change-appearance u-header--has-hidden-element" data-header-fix-moment="500" data-header-fix-effect="slide">
      <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-15" data-header-fix-moment-exclude="g-py-15" data-header-fix-moment-classes="u-shadow-v18 g-py-7">
        <div class="container">
          <div class="d-lg-flex flex-md-row align-items-center g-pos-rel">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-hidden-lg-up g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->
            <!-- Logo -->
            <a href="{{url('/')}}" class="navbar-brand">
              <img src="{{asset('unify/assets/img/logo/gospelgem.png')}}" alt="Image Description">
            </a>
            <!-- End Logo -->

            <div class="col g-mt-10 g-mt-0--lg g-px-0">
              <div class="row flex-row align-items-start align-items-lg-center justify-content-lg-end text-uppercase g-font-weight-600 u-header--hidden-element g-color-gray-dark-v2 g-font-size-13 text-lg-right g-mt-minus-10 g-mb-20">
                <div class="col-auto g-px-15 g-mt-10">
                  <i class="fa fa-phone g-font-size-14 g-mr-3"></i>
                  +23414543236
                </div>
                <div class="col-auto g-px-15 g-mt-10">
                  <i class="fa fa-user g-font-size-14 g-mr-3"></i>
                  <a href="{{url('login')}}" class="g-color-black g-color-primary--hover g-text-underline--none--hover">Login</a>
                </div>


              
                <div class="col-auto g-px-15 g-mt-10">
                  <ul class="list-inline mb-0 g-mx-minus-3">
                    <li class="list-inline-item g-valign-middle g-mx-3">
                      <a class="d-block u-icon-v3 u-icon-size--xs u-shadow-v17 g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-primary--hover g-text-underline--none--hover" href="#!">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item g-valign-middle g-mx-3">
                      <a class="d-block u-icon-v3 u-icon-size--xs u-shadow-v17 g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-primary--hover g-text-underline--none--hover" href="#!">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item g-valign-middle g-mx-3">
                      <a class="d-block u-icon-v3 u-icon-size--xs u-shadow-v17 g-rounded-50x g-bg-white g-color-gray-dark-v1 g-color-primary--hover g-text-underline--none--hover" href="#!">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <nav class="navbar navbar-expand-lg p-0">
                <!-- Navigation -->
                <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--sm" id="navBar">
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

              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header -->
    <!-- End Header -->