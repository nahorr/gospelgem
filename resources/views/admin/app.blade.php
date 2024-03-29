<!-- set bodyTheme = "u-card-v1" -->



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Gosgem Admin | Dashboard </title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('unify/favicon_private.png')}}">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
  <!-- to get bootstrap modal to work -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>-->
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/bootstrap/bootstrap.min.css')}}"> 
  
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/icon-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/icon-line/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/icon-etlinefont/style.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/icon-line-pro/style.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/icon-hs/style.css')}}">

  <link rel="stylesheet" href="{{asset('unify/admin-assets/vendor/hs-admin-icons/hs-admin-icons.css')}}">

  <link rel="stylesheet" href="{{asset('unify/assets/vendor/animate.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css')}}">

  <link rel="stylesheet" href="{{asset('unify/admin-assets/vendor/flatpickr/dist/css/flatpickr.min.css')}}">
  <link rel="stylesheet" href="{{asset('unify/admin-assets/vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
  <link rel="stylesheet" href="{{asset('unify/admin-assets/vendor/flatpickr/dist/css/flatpickr.min.css')}}">
  <link rel="stylesheet" href="{{asset('unify/admin-assets/vendor/chartist-js/chartist.min.css')}}">
  <link rel="stylesheet" href="{{asset('unify/admin-assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/fancybox/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" href="{{asset('unify/assets/vendor/hamburgers/hamburgers.min.css')}}">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="{{asset('unify/admin-assets/css/unify-admin.css')}}">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="{{asset('unify/assets/css/custom.css')}}">
</head>

<body>

  @yield('content')

 <!-- JS Global Compulsory -->
  <script src="{{asset('unify/admin-assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('unify/admin-assets/vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>

  <script src="{{asset('unify/assets/vendor/popper.min.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

  <script src="{{asset('unify/assets/vendor/cookiejs/jquery.cookie.js')}}"></script>


  <!-- jQuery UI Core -->
  <script src="{{asset('unify/assets/vendor/jquery-ui/ui/widget.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/jquery-ui/ui/version.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/jquery-ui/ui/keycode.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/jquery-ui/ui/position.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/jquery-ui/ui/unique-id.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/jquery-ui/ui/safe-active-element.js')}}"></script>

  <!-- jQuery UI Helpers -->
  <script src="{{asset('unify/assets/vendor/jquery-ui/ui/widgets/menu.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/jquery-ui/ui/widgets/mouse.js')}}"></script>

  <!-- jQuery UI Widgets -->
  <script src="{{asset('unify/assets/vendor/jquery-ui/ui/widgets/datepicker.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script src="{{asset('unify/assets/vendor/appear.js')}}"></script>
  <script src="{{asset('unify/admin-assets/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
  <script src="{{asset('unify/admin-assets/vendor/flatpickr/dist/js/flatpickr.min.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <script src="{{asset('unify/admin-assets/vendor/chartist-js/chartist.min.js')}}"></script>
  <script src="{{asset('unify/admin-assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.js')}}"></script>
  <script src="{{asset('unify/admin-assets/vendor/fancybox/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('unify/admin-assets/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('unify/admin-assets/vendor/datatables/media/js/dataTables.select.js')}}"></script>
  <script src="{{asset('unify/admin-assets/vendor/table-edits/build/table-edits.min.js')}}"></script>
  

  <!-- JS Unify -->
  <script src="{{asset('unify/assets/js/hs.core.js')}}"></script>
  <script src="{{asset('unify/admin-assets/js/components/hs.side-nav.js')}}"></script>
  <script src="{{asset('unify/assets/js/helpers/hs.hamburgers.js')}}"></script>
  <script src="{{asset('unify/admin-assets/js/components/hs.range-datepicker.js')}}"></script>
  <script src="{{asset('unify/assets/js/components/hs.datepicker.js')}}"></script>
  <script src="{{asset('unify/assets/js/components/hs.dropdown.js')}}"></script>
  <script src="{{asset('unify/assets/js/components/hs.scrollbar.js')}}"></script>
  <script src="{{asset('unify/admin-assets/js/components/hs.area-chart.js')}}"></script>
  <script src="{{asset('unify/admin-assets/js/components/hs.donut-chart.js')}}"></script>
  <script src="{{asset('unify/admin-assets/js/components/hs.bar-chart.js')}}"></script>
  <script src="{{asset('unify/assets/js/helpers/hs.focus-state.js')}}"></script>
  <script src="{{asset('unify/admin-assets/js/components/hs.popup.js')}}"></script>
  <script src="{{asset('unify/admin-assets/js/components/hs.datatables.js')}}"></script>

  <!-- JS Custom -->
  <script src="{{asset('unify/assets/js/custom.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of custom select
      $('.js-select').selectpicker();
  
      // initialization of hamburger
      $.HSCore.helpers.HSHamburgers.init('.hamburger');
  
      // initialization of charts
      $.HSCore.components.HSAreaChart.init('.js-area-chart');
      $.HSCore.components.HSDonutChart.init('.js-donut-chart');
      $.HSCore.components.HSBarChart.init('.js-bar-chart');
  
      // initialization of sidebar navigation component
      $.HSCore.components.HSSideNav.init('.js-side-nav', {
        afterOpen: function() {
          setTimeout(function() {
            $.HSCore.components.HSAreaChart.init('.js-area-chart');
            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
            $.HSCore.components.HSBarChart.init('.js-bar-chart');
          }, 400);
        },
        afterClose: function() {
          setTimeout(function() {
            $.HSCore.components.HSAreaChart.init('.js-area-chart');
            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
            $.HSCore.components.HSBarChart.init('.js-bar-chart');
          }, 400);
        }
      });
  
      // initialization of range datepicker
      $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');
  
  
      // initialization of HSDropdown component
      $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});
  
      // initialization of custom scrollbar
      $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));
  
      // initialization of popups
      $.HSCore.components.HSPopup.init('.js-fancybox', {
        btnTpl: {
          smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v3 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
        }
      });
      // initialization of editable table
      $('.js-editable-table tr').editable({
        keyboard: true,
        dblclick: true,
        button: true,
        buttonSelector: '.js-edit',
        maintainWidth: true,
        edit: function (values) {
          $('.js-edit i', this).removeClass('hs-admin-pencil').addClass('hs-admin-check g-color-secondary');
        },
        save: function (values) {
          $('.js-edit i', this).removeClass('hs-admin-check g-color-secondary').addClass('hs-admin-pencil');
        }
      });
      // initialization of datatables
      $.HSCore.components.HSDatatables.init('.js-datatable');
    });
  </script>
</body>

</html>
