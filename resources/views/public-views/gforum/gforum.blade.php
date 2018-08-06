  @extends('layouts.public.app')

  @section('content')

  @include('layouts.public.includes.nav-header')

    <!-- Popular Jobs -->
    <section class="g-py-100">
      <div class="container">
        <header class="text-center g-width-60x--md mx-auto g-mb-50">
          <h2 class="h1 g-color-gray-dark-v1 g-font-weight-300">Introducing GForum</h2>
          <p class="lead">GForum is a Good News Forum. It is a place to share beautiful, inspiring, and uplifting stories with gem friends around the world. </p>
        </header>

        <div class="row g-mb-30">
          <div class="col-lg-4 g-mb-40 g-mb-0--lg">
            <ul class="list-unstyled mb-0">
              <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                <div class="d-flex align-self-center g-mt-3 g-mr-15">
                  <img class="g-width-40 g-height-40" src="../../assets/img-temp/logos/img1.png" alt="Image Description">
                </div>
                <div class="media-body">
                  <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Junior UX Designer</a>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> London, UK
                    </span>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Airbnb
                    </span>
                </div>
              </li>

              <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                <div class="d-flex align-self-center g-mt-3 g-mr-15">
                  <img class="g-width-40 g-height-40" src="../../assets/img-temp/logos/img2.png" alt="Image Description">
                </div>
                <div class="media-body">
                  <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Frontend Developer</a>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> San Francisco, CA
                    </span>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Github Inc.
                    </span>
                </div>
              </li>

              <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                <div class="d-flex align-self-center g-mt-3 g-mr-15">
                  <img class="g-width-40 g-height-40" src="../../assets/img-temp/logos/img3.png" alt="Image Description">
                </div>
                <div class="media-body">
                  <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">AngularJS Developer</a>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> New York, NY
                    </span>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Medium.
                    </span>
                </div>
              </li>

              <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                <div class="d-flex align-self-center g-mt-3 g-mr-15">
                  <img class="g-width-40 g-height-40" src="../../assets/img-temp/logos/img4.png" alt="Image Description">
                </div>
                <div class="media-body">
                  <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Full Stack Developer</a>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Vancouver, BC
                    </span>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Snapchat Inc.
                    </span>
                </div>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 g-mb-40 g-mb-0--lg">
            <ul class="list-unstyled mb-0">
              <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                <div class="d-flex align-self-center g-mt-3 g-mr-15">
                  <img class="g-width-40 g-height-40" src="../../assets/img-temp/logos/img5.png" alt="Image Description">
                </div>
                <div class="media-body">
                  <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Junior UX Designer</a>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> London, UK
                    </span>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Airbnb
                    </span>
                </div>
              </li>

              <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                <div class="d-flex align-self-center g-mt-3 g-mr-15">
                  <img class="g-width-40 g-height-40" src="../../assets/img-temp/logos/img6.png" alt="Image Description">
                </div>
                <div class="media-body">
                  <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Frontend Developer</a>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> San Francisco, CA
                    </span>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Github Inc.
                  </span>
                </div>
              </li>

              <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                <div class="d-flex align-self-center g-mt-3 g-mr-15">
                  <img class="g-width-40 g-height-40" src="../../assets/img-temp/logos/img5.png" alt="Image Description">
                </div>
                <div class="media-body">
                  <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">AngularJS Developer</a>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> New York, NY
                    </span>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Medium.
                    </span>
                </div>
              </li>

              <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                <div class="d-flex align-self-center g-mt-3 g-mr-15">
                  <img class="g-width-40 g-height-40" src="../../assets/img-temp/logos/img4.png" alt="Image Description">
                </div>
                <div class="media-body">
                  <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Full Stack Developer</a>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Vancouver, BC
                    </span>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Snapchat Inc.
                    </span>
                </div>
              </li>
            </ul>
          </div>

          <div class="col-lg-4">
            <ul class="list-unstyled mb-0">
              <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                <div class="d-flex align-self-center g-mt-3 g-mr-15">
                  <img class="g-width-40 g-height-40" src="../../assets/img-temp/logos/img3.png" alt="Image Description">
                </div>
                <div class="media-body">
                  <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Junior UX Designer</a>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> London, UK
                    </span>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Airbnb
                    </span>
                </div>
              </li>

              <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                <div class="d-flex align-self-center g-mt-3 g-mr-15">
                  <img class="g-width-40 g-height-40" src="../../assets/img-temp/logos/img2.png" alt="Image Description">
                </div>
                <div class="media-body">
                  <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Frontend Developer</a>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> San Francisco, CA
                    </span>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Github Inc.
                    </span>
                </div>
              </li>

              <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                <div class="d-flex align-self-center g-mt-3 g-mr-15">
                  <img class="g-width-40 g-height-40" src="../../assets/img-temp/logos/img1.png" alt="Image Description">
                </div>
                <div class="media-body">
                  <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">AngularJS Developer</a>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> New York, NY
                    </span>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Medium.
                    </span>
                </div>
              </li>

              <li class="media u-shadow-v11 rounded g-pa-20 g-mb-10">
                <div class="d-flex align-self-center g-mt-3 g-mr-15">
                  <img class="g-width-40 g-height-40" src="../../assets/img-temp/logos/img5.png" alt="Image Description">
                </div>
                <div class="media-body">
                  <a class="d-block u-link-v5 g-color-main g-color-primary--hover g-font-weight-600 g-mb-3" href="">Full Stack Developer</a>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Vancouver, BC
                    </span>
                  <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                      <i class="icon-directions g-pos-rel g-top-1 mr-1"></i> Snapchat Inc.
                    </span>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="text-center">
          <a class="btn btn-xl u-btn-outline-primary text-uppercase g-font-weight-600 g-font-size-12" href="#!">View More Jobs</a>
        </div>
      </div>
    </section>
    <!-- End Popular Jobs -->

    <!--Basic Table-->
  <section class="g-py-100">
    <div class="container">
      <a href="{{url('gforum/addpost')}}" class="btn btn-md u-btn-darkpurple g-mr-10 g-mb-15">Add a Post</a>
    <div class="table-responsive">
      <table class="table table-bordered u-table--v2 container">
        <thead class="text-uppercase g-letter-spacing-1">
          <tr>
            <th class="g-font-weight-300 g-color-black">Posted By</th>
            <th class="g-font-weight-300 g-color-black g-min-width-200 text-center">Post Title</th>
            <th class="g-font-weight-300 g-color-black text-center">Stats</th>
            
          </tr>
        </thead>

        <tbody>
          @foreach($posts as $key => $post)
            @foreach($users as $user)
             @if($post->user_id == $user->id)
                <tr>
                  <td class="align-middle text-nowrap">
                    <div class="media">
                      <img class="d-flex g-width-40 g-height-40 rounded-circle g-mr-10" src="{{asset('uploads/avatars/'.$user->avatar)}}" alt="{{$user->name}}">
                      <div class="media-body align-self-center">
                        <h5 class="h6 align-self-center g-font-weight-600 g-color-purple mb-0">{{$user->name}}</h5>
                        <span class="g-font-size-12">{{$user->role}}</span>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-center">{{$post->post_title}}</td>
                  <td class="align-middle text-center">
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                        <i class="align-middle g-font-size-default mr-1 icon-finance-206 u-line-icon-pro"></i> 10 comments
                      </span>
                    <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                        <i class="align-middle g-font-size-default mr-1 icon-medical-022 u-line-icon-pro"></i> 20 likes
                    </span>
                  </td>
           
                </tr>
              @endif
            @endforeach
          @endforeach

        </tbody>
      </table>
    </div>
  </div>
  </section>
    <!--End Basic Table-->

  
  </script>
  @include('layouts.public.includes.footer')

  @endsection