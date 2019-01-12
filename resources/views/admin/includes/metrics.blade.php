<!--Metrics-->
<div class="row">
    <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
      <!-- Panel -->
      <div class="card h-100 g-brd-gray-light-v7 g-rounded-3">
        <div class="card-block g-font-weight-300 g-pa-20">
          <div class="media">
            <div class="d-flex g-mr-15">
              <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-lightblue-v4 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                
                <i class="fa fa-users g-absolute-centered" aria-hidden="true"></i>
              </div>
            </div>

            <div class="media-body align-self-center">
              <div class="d-flex align-items-center g-mb-5">
                <span class="g-font-size-24 g-line-height-1 g-color-black">
                  Users
                </span>
              </div>

              <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">
                
                {{$users_all->count()}} users
              </h6>
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel -->
    </div>

    <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
      <!-- Panel -->
      <div class="card h-100 g-brd-gray-light-v7 g-rounded-3">
        <div class="card-block g-font-weight-300 g-pa-20">
          <div class="media">
            <div class="d-flex g-mr-15">
              <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-teal-v2 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                <i class="hs-admin-comments g-absolute-centered"></i>
              </div>
            </div>
            <a href="{{url('/gforum')}}">
            <div class="media-body align-self-center">
              <div class="d-flex align-items-center g-mb-5">
                <span class="g-font-size-24 g-line-height-1 g-color-black">GosYan</span>
                
              </div>

              <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">Forum Page</h6>
            </div>
            </a>
          </div>
        </div>
      </div>
      <!-- End Panel -->
    </div>

    <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
      <!-- Panel -->
      <div class="card h-100 g-brd-gray-light-v7 g-rounded-3">
        <div class="card-block g-font-weight-300 g-pa-20">
          <div class="media">
            <div class="d-flex g-mr-15">
              <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-darkblue-v2 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                <i class="hs-admin-book g-absolute-centered"></i>
              </div>
            </div>
            <a href="{{url('/courses')}}">
            <div class="media-body align-self-center">
              <div class="d-flex align-items-center g-mb-5">
                <span class="g-font-size-24 g-line-height-1 g-color-black">Courses</span>
                
              </div>

              <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">View Course</h6>
            </div>
            </a>
          </div>
        </div>
      </div>
      <!-- End Panel -->
    </div>

    <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
      <!-- Panel -->
      <div class="card h-100 g-brd-gray-light-v7 g-rounded-3">
        <div class="card-block g-font-weight-300 g-pa-20">
          <div class="media">
            <div class="d-flex g-mr-15">
              <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-lightred-v2 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                <a href="{{url('/')}}"><span style="color: white;"><i class="hs-admin-home g-absolute-centered"></i></span></a>
              </div>
            </div>
            <a href="{{url('/')}}">
              <span style="color: darkgreen;">
              <div class="media-body align-self-center">
                <div class="d-flex align-items-center g-mb-5">
                  <span class="g-font-size-24 g-line-height-1 g-color-black">Home</span>
               
                </div>

                <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">Gosgem Home</h6>
              </div>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- End Panel -->
    </div>
    
</div>