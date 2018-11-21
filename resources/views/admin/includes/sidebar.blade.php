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
          <!-- <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{url('admin/categories')}}">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-package"></i>
              </span>
              <span class="media-body align-self-center">Categories</span>
            </a>
          </li> -->
          <!-- Category -->

          <!-- Posts-->
          <!-- <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{url('admin/posts')}}">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-check-box"></i>
              </span>
              <span class="media-body align-self-center">Posts</span>
            </a>
          </li> -->
          <!-- Posts -->

          <!-- Comments-->
          <!-- <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{url('admin/comments')}}">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-comment-alt"></i>
              </span>
              <span class="media-body align-self-center">Comments</span>
            </a>
          </li> -->
          <!-- Comments -->

          <!-- Replies-->
          <!-- <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{url('admin/replies')}}">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-comments"></i>
              </span>
              <span class="media-body align-self-center">Replies</span>
            </a>
          </li> -->
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

          <!--manage forum posts and categories-->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item u-side-nav-closed">
              <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu5">
                <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                  <i class="hs-admin-comments"></i>
                </span>
                  <span class="media-body align-self-center">Manage gForum</span>
                  <span class="d-flex align-self-center u-side-nav--control-icon">
                    <i class="hs-admin-angle-right"></i>
                  </span>
                <span class="u-side-nav--has-sub-menu__indicator"></span>
              </a>

              <!-- UI Components: Submenu -->
              <ul id="subMenu5" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0" style="display: none;">
                
                  <li>
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12 active" href="{{url('admin/categories')}}" >
                      <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                        <i class="hs-admin-package"></i>
                      </span>
                      <span class="media-body align-self-center">Forum Categories</span>
                    </a>
                  </li>
                  
                  <li>
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12 active" href="{{url('admin/posts')}}" >
                      <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                        <i class="hs-admin-check-box"></i>
                      </span>
                      <span class="media-body align-self-center">Posts</span>
                    </a>
                  </li>

                  <li>
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12 active" href="{{url('admin/comments')}}" >
                      <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                        <i class="hs-admin-comment-alt"></i>
                      </span>
                      <span class="media-body align-self-center">Comments</span>
                    </a>
                  </li>

                  <li>
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12 active" href="{{url('admin/replies')}}" >
                      <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                        <i class="hs-admin-comments"></i>
                      </span>
                      <span class="media-body align-self-center">Replies</span>
                    </a>
                  </li>

              </ul>
              <!-- End UI Components: Submenu -->
          </li>
            <!--End manage forum posts and categories-->

           <!-- Manage Pictures-->
          
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item u-side-nav-closed">
              <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu6">
                <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                  <i class="hs-admin-camera"></i>
                </span>
                  <span class="media-body align-self-center">Manage Pictures</span>
                  <span class="d-flex align-self-center u-side-nav--control-icon">
                    <i class="hs-admin-angle-right"></i>
                  </span>
                <span class="u-side-nav--has-sub-menu__indicator"></span>
              </a>

              <!-- UI Components: Submenu -->
              <ul id="subMenu6" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0" style="display: none;">
                <!-- Icons -->
                @foreach($pic_categories as $pic_category)
                  <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12 active" href="{{ url('admin/pictures/'.$pic_category->id) }}">
                      <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                        <i class="hs-admin-layout-sidebar-2"></i>
                      </span>
                      <span class="media-body align-self-center">{{$pic_category->pic_category_name}}</span>
                    </a>
                  </li>
                @endforeach
                  <li>
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12 active" href="{{ url('admin/pictures/categories') }}" >
                      <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                        <i class="hs-admin-camera"></i>
                      </span>
                      <span class="media-body align-self-center">New Category</span>
                    </a>
                  </li>
                <!-- End Icons -->

              </ul>
              <!-- End UI Components: Submenu -->
            </li>

          <!-- Manage pictures -->

          <!-- Manage Courses-->
          
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item u-side-nav-closed">
              <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu7">
                <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                  <i class="hs-admin-book"></i>
                </span>
                  <span class="media-body align-self-center">Manage Courses</span>
                  <span class="d-flex align-self-center u-side-nav--control-icon">
                    <i class="hs-admin-angle-right"></i>
                  </span>
                <span class="u-side-nav--has-sub-menu__indicator"></span>
              </a>

              <!-- UI Components: Submenu -->
              <ul id="subMenu7" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0" style="display: none;">
                
                  <li>
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12 active" href="{{url('admin/courses/categories')}}" >
                      <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                        <i class="hs-admin-package"></i>
                      </span>
                      <span class="media-body align-self-center">Course Categories</span>
                    </a>
                  </li>
                  <li>
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12 active" href="{{url('admin/courses/showcourses')}}" >
                      <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                        <i class="hs-admin-package"></i>
                      </span>
                      <span class="media-body align-self-center">Courses</span>
                    </a>
                  </li>
                  
                  
              </ul>
              <!-- End UI Components: Submenu -->
            </li>

          <!-- Manage pictures -->

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