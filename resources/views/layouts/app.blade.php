<!DOCTYPE html>
<!-- saved from url=(0105)# -->
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description"
    content="Materialize is a Material Design Admin Template,It&#39;s modern, responsive and based on Material Design by Google.">
  <meta name="keywords"
    content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
  <meta name="author" content="ThemeSelect">
  <title>@yield('title') | APP </title>
  <link rel="apple-touch-icon"
    href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/favicon/apple-touch-icon-152x152.png">
  <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/favicon/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/materialize.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/style.min.css')}}">
  
  <!-- END: Page Level CSS-->
  <!-- BEGIN: Custom CSS-->
  
  <!-- END: Custom CSS-->
  <style type="text/css">
    /* Chart.js */
    @keyframes chartjs-render-animation {
      from {
        opacity: .99
      }

      to {
        opacity: 1
      }
    }

    .chartjs-render-monitor {
      animation: chartjs-render-animation 1ms
    }

    .chartjs-size-monitor,
    .chartjs-size-monitor-expand,
    .chartjs-size-monitor-shrink {
      position: absolute;
      direction: ltr;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      overflow: hidden;
      pointer-events: none;
      visibility: hidden;
      z-index: -1
    }

    .chartjs-size-monitor-expand>div {
      position: absolute;
      width: 1000000px;
      height: 1000000px;
      left: 0;
      top: 0
    }

    .chartjs-size-monitor-shrink>div {
      position: absolute;
      width: 200%;
      height: 200%;
      left: 0;
      top: 0
    }
  </style>

@stack('styles')

</head>
<!-- END: Head-->

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns"
  data-open="click" data-menu="vertical-modern-menu" data-col="2-columns" style="overflow: hidden;">

  <!-- BEGIN: Header-->
  @include('layouts.partials.header')
  <!-- END: Header-->
  <ul class="display-none" id="default-search-main">
    <li class="auto-suggestion-title"><a class="collection-item"
        href="#">
        <h6 class="search-title">FILES</h6>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item"
        href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img
                src="public/images/pdf-image.png" width="24"
                height="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">Two new item
                submitted</span><small class="grey-text">Marketing Manager</small></div>
          </div>
          <div class="status"><small class="grey-text">17kb</small></div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item"
        href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img
                src="public/images/doc-image.png" width="24"
                height="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file
                Generator</span><small class="grey-text">FontEnd Developer</small></div>
          </div>
          <div class="status"><small class="grey-text">550kb</small></div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item"
        href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img
                src="public/images/xls-image.png" width="24"
                height="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small
                class="grey-text">Digital Marketing Manager</small></div>
          </div>
          <div class="status"><small class="grey-text">20kb</small></div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item"
        href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img
                src="public/images/jpg-image.png" width="24"
                height="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small
                class="grey-text">Web Designer</small></div>
          </div>
          <div class="status"><small class="grey-text">37kb</small></div>
        </div>
      </a></li>
    <li class="auto-suggestion-title"><a class="collection-item"
        href="#">
        <h6 class="search-title">MEMBERS</h6>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item"
        href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img class="circle"
                src="public/images/avatar-7.png" width="30"
                alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small
                class="grey-text">UI designer</small></div>
          </div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item"
        href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img class="circle"
                src="public/images/avatar-8.png" width="30"
                alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small
                class="grey-text">FontEnd Developer</small></div>
          </div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item"
        href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img class="circle"
                src="public/images/avatar-10.png" width="30"
                alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small
                class="grey-text">Digital Marketing</small></div>
          </div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item"
        href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img class="circle"
                src="public/images/avatar-12.png" width="30"
                alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small
                class="grey-text">Web Designer</small></div>
          </div>
        </div>
      </a></li>
  </ul>
  <ul class="display-none" id="page-search-title">
    <li class="auto-suggestion-title">
        <a class="collection-item" href="#"><h6 class="search-title">PAGES</h6></a>
    </li>
  </ul>
  <ul class="display-none" id="search-not-found">
    <li class="auto-suggestion"><a class="collection-item display-flex align-items-center"
        href="#"><span
          class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
  </ul>



  @include('layouts.partials.sidebar')

  <!-- BEGIN: Page Main-->
  <div id="main">
    <div class="row">
     @yield('content')
    </div>
  </div>
  <!-- END: Page Main-->

  <!-- Theme Customizer -->


  <footer
    class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
    <div class="footer-copyright">
      <div class="container"></div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{URL::asset('public/js/vendors.min.js')}}"></script>
  <script src="{{URL::asset('public/js/plugins.min.js')}}"></script>
  
  @stack('scripts')
  
</body>

</html>