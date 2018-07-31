  <!-- Header -->
  <header id="js-header" class="u-header u-header--sticky-top">
    <div class="u-header__section u-header__section--admin-dark g-min-height-65">
      <nav class="navbar no-gutters g-pa-0">
        <div class="col-auto d-flex flex-nowrap u-header-logo-toggler g-py-12">
          <!-- Logo -->
          <a href="{{url('/home')}}" class="navbar-brand d-flex align-self-center g-hidden-xs-down g-line-height-1 py-0 g-mt-5">
            <img id="logo" src="{{asset('unify/assets/img/logo/dashboard_gosgem_logo.png')}}" alt="gospelgem">
          </a>
          <!-- End Logo -->

          <!-- Sidebar Toggler -->
          <a class="js-side-nav u-header__nav-toggler d-flex align-self-center ml-auto" href="#!" data-hssm-class="u-side-nav--mini u-sidebar-navigation-v1--mini" data-hssm-body-class="u-side-nav-mini" data-hssm-is-close-all-except-this="true" data-hssm-target="#sideNav">
            <i class="hs-admin-align-left"></i>
          </a>
          <!-- End Sidebar Toggler -->
        </div>

        
        <div class="col-auto d-flex g-py-12 g-pl-40--lg ml-auto">
        
                    
          <!-- Top User -->
          <div class="col-auto d-flex g-pt-5 g-pt-0--sm g-pl-10 g-pl-20--sm">
            <div class="g-pos-rel g-px-10--lg">
              <a id="profileMenuInvoker" class="d-block" href="#!" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#profileMenu" data-dropdown-type="css-animation" data-dropdown-duration="300"
              data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                <span class="g-pos-rel">
                  <span class="u-badge-v2--xs u-badge--top-right g-hidden-sm-up g-bg-lightblue-v5 g-mr-5"></span>
                  <img class="g-width-30 g-width-40--md g-height-30 g-height-40--md rounded-circle g-mr-10--sm" src="{{asset('uploads/avatars/'.Auth::user()->avatar)}}" alt="User picture">
                </span>
                <span class="g-pos-rel g-top-2">
                  <span class="g-hidden-sm-down">{{ \Auth::user()->name }}</span>
                  <i class="hs-admin-angle-down g-pos-rel g-top-2 g-ml-10"></i>
                </span>
              </a>

              <!-- Top User Menu -->
              <ul id="profileMenu" class="g-pos-abs g-left-0 g-width-100x--lg g-nowrap g-font-size-14 g-py-20 g-mt-17 rounded" aria-labelledby="profileMenuInvoker">

                @if(Auth::user()->is_admin == 1)
                  <li class="g-mb-10">
                    <a class="media g-color-lightred-v2--hover g-py-5 g-px-20" href="{{url('admin/home')}}">
                      <span class="d-flex align-self-center g-mr-12">
                        <i class="hs-admin-settings"></i>
                      </span>
                      <span class="media-body align-self-center">Administrator</span>
                    </a>
                  </li>
                @endif
                
                <li class="g-mb-10">
                  <a class="media g-color-lightred-v2--hover g-py-5 g-px-20" href="{{url('users/profile')}}">
                    <span class="d-flex align-self-center g-mr-12">
                      <i class="hs-admin-user"></i>
                    </span>
                    <span class="media-body align-self-center">My Profile</span>
                  </a>
                </li>
                
                <li class="mb-0">
                  <a class="media g-color-lightred-v2--hover g-py-5 g-px-20" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                    <span class="d-flex align-self-center g-mr-12">
                      <i class="hs-admin-power-off"></i>
                    </span>
                    <span class="media-body align-self-center">Sign Out</span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>

                </li>
              </ul>
              <!-- End Top User Menu -->
            </div>
          </div>
          <!-- End Top User -->
        </div>
        <!-- End Messages/Notifications/Top Search Bar/Top User -->

 
    </div>
  </header>
  <!-- End Header -->