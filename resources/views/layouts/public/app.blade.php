<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Gosgem | Home </title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="og:image" content="{{asset('unify/assets/img/logo/gospelgem.png')}}" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('unify/favicon.ico')}}">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/bootstrap/bootstrap.min.css')}}">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/icon-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/icon-line/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/icon-etlinefont/style.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/icon-line-pro/style.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/icon-hs/style.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/dzsparallaxer/dzsparallaxer.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/dzsparallaxer/dzsscroller/scroller.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/dzsparallaxer/advancedscroller/plugin.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/hs-bg-video/hs-bg-video.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/hamburgers/hamburgers.min.css')}}">

  <!-- Show Code -->
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/prism/themes/prism.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/custombox/custombox.min.css')}}">

  <link rel="stylesheet" href="{{asset('unify/assets/vendor/animate.css')}}">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="{{asset('unify/assets/css/unify-core.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/css/unify-components.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/css/unify-globals.css')}}">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="{{asset('unify/assets/css/custom.css')}}">
</head>

<body>
  <main>

    @yield('content')



  </main>

  <div class="u-outer-spaces-helper"></div>


 <!-- JS Global Compulsory -->
  <script src="{{asset('unify/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/popper.min.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>


  <!-- JS Implementing Plugins -->
  <script src="{{asset('unify/assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/dzsparallaxer/dzsparallaxer.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/dzsparallaxer/dzsscroller/scroller.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/dzsparallaxer/advancedscroller/plugin.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/appear.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/masonry/dist/masonry.pkgd.min.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/slick-carousel/slick/slick.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/hs-bg-video/hs-bg-video.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/hs-bg-video/vendor/player.min.js')}}"></script>

  <!-- JS Unify -->
  <script src="{{asset('unify/assets/js/hs.core.js')}}"></script>
  <script src="{{asset('unify/assets/js/components/hs.header.js')}}"></script>
  <script src="{{asset('unify/assets/js/helpers/hs.hamburgers.js')}}"></script>
  <script src="{{asset('unify/assets/js/components/hs.carousel.js')}}"></script>
  <script src="{{asset('unify/assets/js/helpers/hs.bg-video.js')}}"></script>
  <script src="{{asset('unify/assets/js/components/hs.onscroll-animation.js')}}"></script>
  <script src="{{asset('unify/assets/js/helpers/hs.height-calc.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).ready(function () {
      // initialization of carousel
      $.HSCore.components.HSCarousel.init('.js-carousel');

      // initialization of masonry
      $('.masonry-grid').imagesLoaded().then(function () {
        $('.masonry-grid').masonry({
          columnWidth: '.masonry-grid-sizer',
          itemSelector: '.masonry-grid-item',
          percentPosition: true
        });
      });

      // initialization of video on background
      $.HSCore.helpers.HSBgVideo.init('.js-bg-video');

      // initialization of scroll animation
      $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

      // initialization of header's height equal offset
      $.HSCore.helpers.HSHeightCalc.init();
    });

    $(window).on('load', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#js-header'));
      $.HSCore.helpers.HSHamburgers.init('.hamburger');

      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991
      });
    });
  </script>
</body>

</html>
