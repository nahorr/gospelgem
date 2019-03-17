@extends('layouts.public.app')

@section('content')

@include('layouts.public.includes.nav-header')

<!-- Breadcrumbs -->
<section class="g-bg-gray-light-v5 g-py-50">
  <div class="container">
    <div class="d-sm-flex text-center d-flex justify-content-center">
      <div class="align-self-center">
        <h2 class="h3 g-font-weight-300 w-100 g-mb-10 g-mb-0--md g-brd-bottom g-brd-5 g-brd-primary">Pictures</h2>
        <p class="text-uppercase g-letter-spacing-3 g-font-size-12 g-theme-color-gray-light-v2 mb-0">View Gosgem event pictures below</p>
      </div>
    </div>
  </div>
</section>
<!-- End Breadcrumbs -->


<!-- Section Content -->
      <section id="topWorks" class="g-py-80">
        <div class="container">
          <div class="row">
            <div class="col-md-2 g-mb-40 g-mb-0--md">
              <h4 class="h6 text-uppercase g-mb-30">Categories</h4>

              <ul id="topWorksCubePortfolioFilter" class="nav d-block text-uppercase g-line-height-1_4 g-font-weight-700 g-font-size-11">
                <li class="cbp-filter-item nav-item g-mb-20 cbp-filter-item-active"
                    data-filter="*">
                  <span class="nav-link p-0"><span class="g-mr-10">01.</span> All</span>
                </li>
                @foreach($pictures as $key=>$pic)
                  
                    <li class="cbp-filter-item nav-item g-mb-20"
                        data-filter=".{{preg_replace('/\s+/', '', $pic->title)}}">
                      <span class="nav-link p-0"><span class="g-mr-10">0{{$key+1}}.</span> {{$pic->title}}<span style="color: #dcac10"> ({{count(json_decode($pic->filename))}} <i class="fa fa-file-picture-o"></i>)</span></span>
                    </li>
                  
                @endforeach
              </ul>
            </div>

            <div class="col-md-10">
              <div id="topWorksCubePortfolio" class="cbp"
                   data-controls="#topWorksCubePortfolioFilter"
                   data-layout="grid"
                   data-animation="slideLeft"
                   data-caption-animation="fadeIn"
                   data-x-gap="30"
                   data-y-gap="80"
                   data-media-queries='[
                     {"width": 800, "cols": 4},
                     {"width": 500, "cols": 3},
                     {"width": 320, "cols": 1}
                   ]'>
                @foreach($pictures as $pic)
                @for ($i = 0; $i < count(json_decode($pic->filename)); $i++)
                <div class="cbp-item g-width-280 g-width-170--md {{preg_replace('/\s+/', '', $pic->title)}}">
                 
                  <a class="cbp-caption cbp-lightbox info-v3-2 d-block g-parent g-mb-20" 
                  href="{{asset('uploads/pagepictures/'. json_decode($pic->filename)[$i] )}}"
                     data-title="{{$pic->description}}">
                  
                    <div class="cbp-caption-defaultWrap g-overflow-hidden">
                      <img class="g-transform-scale-1_2--parent-hover g-transition-0_2 g-transition--ease-in" src="{{asset('uploads/pagepictures/'. json_decode($pic->filename)[$i] )}}" alt="{{json_decode($pic->filename)[$i]}}">
                    </div>

                    <div class="cbp-caption-activeWrap g-theme-bg-blue-dark-v1-opacity-0_6">
                      <div class="cbp-l-caption-alignCenter g-pa-15">
                        <div class="cbp-l-caption-body g-brd-around g-brd-white-opacity-0_2">
                          <strong class="text-uppercase g-absolute-centered g-letter-spacing-0_5 g-font-weight-700 g-font-size-11 g-color-white">View photos</strong>
                        </div>
                      </div>
                    </div>
                  </a>
                  
                  <h4 class="text-uppercase g-font-weight-700 g-font-size-11">{{$pic->title}}
                    <span class="g-theme-color-gray-light-v2">({{count(json_decode($pic->filename))}} photos)</span></h4>
                </div>
                @endfor
                @endforeach
              </div>
              <hr>
              
            </div>
            
          </div>

        </div>
      </section>
      <!-- End Section Content -->

@include('layouts.public.includes.footer')

@endsection