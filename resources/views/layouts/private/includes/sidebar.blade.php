      <!-- Sidebar Nav -->
      <div id="sideNav" class="col-auto u-sidebar-navigation-v1 u-sidebar-navigation--dark">
        <ul id="sideNavMenu" class="u-sidebar-navigation-v1-menu u-side-nav--top-level-menu g-min-height-100vh mb-0">
         
          <!-- Dashboard -->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{url('home')}}">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-blackboard"></i>
              </span>
              <span class="media-body align-self-center">Dashboard</span>
            </a>
          </li>
          <!-- End Dashboard -->

           <!-- Posts -->
          <!-- <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{url('gforum/viewposts')}}">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-list"></i>
              </span>
              <span class="media-body align-self-center">Add Posts</span>
            </a>
          </li> -->
          <!-- End Posts -->

           <!-- Comments -->
          <!-- <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{url('gforum/comments/viewcomments')}}">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-comments"></i>
              </span>
              <span class="media-body align-self-center">My Comments</span>
            </a>
          </li> -->
          <!-- End Comments -->

          <!-- User Profile-->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{url('users/profile')}}">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-user"></i>
              </span>
              <span class="media-body align-self-center">User Profile</span>
            </a>
          </li>
          <!-- End User Profile -->


          <!-- Logout -->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <span class="d-flex align-self-center g-font-size-18 g-mr-18">
                <i class="hs-admin-power-off"></i>
              </span>
              <span class="media-body align-self-center">Sign out</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </li>
          <!-- End Logout -->

        </ul>
      </div>
      <!-- End Sidebar Nav -->