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
                  Total # of users
                </span>
              </div>

              <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">
                
                There are {{$users->count()}} users
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
                <i class="hs-admin-check-box g-absolute-centered"></i>
              </div>
            </div>

            <div class="media-body align-self-center">
              <div class="d-flex align-items-center g-mb-5">
                <span class="g-font-size-24 g-line-height-1 g-color-black">Number of Business Units</span>
                
              </div>

              <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">{{$posts->count()}} post so far</h6>
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
              <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-darkblue-v2 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                <i class="fa fa-envelope g-absolute-centered" aria-hidden="true"></i>
              </div>
            </div>

            <div class="media-body align-self-center">
              <div class="d-flex align-items-center g-mb-5">
                <span class="g-font-size-24 g-line-height-1 g-color-black">Contact Form Messages</span>
                
              </div>

              <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">{{$contactFormSubmissions->count()}} contact orm submissions</h6>
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
              <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-lightred-v2 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                <a href="{{url('gforum')}}"><span style="color: white;"><i class="hs-admin-home g-absolute-centered"></i></span></a>
              </div>
            </div>
            <a href="{{url('gforum')}}">
              <span style="color: darkgreen;">
              <div class="media-body align-self-center">
                <div class="d-flex align-items-center g-mb-5">
                  <span class="g-font-size-24 g-line-height-1 g-color-black">Visit GForum Home</span>
               
                </div>

                <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">GForum {{\App\Post::count()}} posts and counting...</h6>
              </div>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- End Panel -->
    </div>
    
</div>