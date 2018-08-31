      <!-- Sidebar Nav -->
      <div id="sideNav" class="col-auto u-sidebar-navigation-v1 u-sidebar-navigation--dark">
        <ul id="sideNavMenu" class="u-sidebar-navigation-v1-menu u-side-nav--top-level-menu g-min-height-100vh mb-0">
         
          <!-- Dashboard -->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{url('admin/home')}}">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-blackboard"></i>
              </span>
              <span class="media-body align-self-center">Admin Dashboard</span>
            </a>
          </li>
          <!-- End Dashboard -->

          <!-- Category-->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{url('admin/categories')}}">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-package"></i>
              </span>
              <span class="media-body align-self-center">Categories</span>
            </a>
          </li>
          <!-- Category -->

          <!-- Posts-->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{url('admin/posts')}}">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-check-box"></i>
              </span>
              <span class="media-body align-self-center">Posts</span>
            </a>
          </li>
          <!-- Posts -->

          <!-- Comments-->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{url('admin/comments')}}">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-comment-alt"></i>
              </span>
              <span class="media-body align-self-center">Comments</span>
            </a>
          </li>
          <!-- Comments -->

          <!-- Replies-->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{url('admin/replies')}}">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-comments"></i>
              </span>
              <span class="media-body align-self-center">Replies</span>
            </a>
          </li>
          <!-- Comments -->



          <!-- Business Units-->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{url('admin/business/units')}}">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-view-list-alt"></i>
              </span>
              <span class="media-body align-self-center">Business Units</span>
            </a>
          </li>
          <!-- End Business Units -->

          <!-- Contact Form-->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{url('admin/contactform/submissions')}}">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-email"></i>
              </span>
              <span class="media-body align-self-center">Contact Form</span>
            </a>
          </li>
          <!-- End Contact Form -->

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