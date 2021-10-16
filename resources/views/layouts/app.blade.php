<!DOCTYPE html>
<!-- saved from url=(0105)# -->
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title') | APP </title>
  <link rel="apple-touch-icon"
    href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/favicon/apple-touch-icon-152x152.png">
  <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/favicon/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/materialize.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/style.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/app-file-manager.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('public/plugins/sweet-alert/sweetalert.css')}}">


  <!-- END: Page Level CSS-->
  <!-- BEGIN: Custom CSS-->
  
  <!-- END: Custom CSS-->
  <style type="text/css">

    .swal-footer {
      text-align: center;
    }
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

    .modal .modal-content {
      padding: 24px;
      height: 100%;
      display: flex;
      flex-direction: column;
    }
    .error {
      font-size: 13px;
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script src="{{URL::asset('public/js/mzbox.min.js')}}"></script>

  <script src="{{URL::asset('public/plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
  <script src="{{URL::asset('public/plugins/jquery-validation/dist/localization/messages_es.js')}}"></script>
  <script src="{{URL::asset('public/plugins/sweet-alert/sweetalert.min.js')}}"></script>

  <script>

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
      },
      error: function (err) {

        if (err.status == 401) {
          bootbox.dialog({
            title: 'Alerta',
            message: "<h4>¡" + err.responseJSON + "!</h4>",
            buttons: {
              ok: {
                label: "ACEPTAR",
                className: 'btn-info',
                callback: function () {

                }
              }
            }
          });
        }
      }
    });

    function htmlToElement(html) {
      var template = document.createElement('template');
      html = html.trim(); // Never return a text node of whitespace as the result
      template.innerHTML = html;
      return template.content.firstChild;
    }
    function format_numeric(value) {
      return /^\d*[.]?\d{0,2}$/.test(value);
    }

    function format_digits(value) {
      return /^\d*?$/.test(value);
    }

    function format_text(value) {
      return /^[áéíóúñÁÉÍÓÚÑa-zA-Z ]*\s*$/.test(value);
    }

    function format_digits_sometext(value) {
      return /^[cCxXkK0-9]*\s*$/.test(value);
    }

    function format_text_digits(value) {
      return /^[a-zA-Z0-9-_]*\s*$/.test(value);
    }

    /* Format input allow
          ------------------ */
    (function ($) {
      $.fn.inputFilter = function (inputFilter) {
        return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function () {
          if (inputFilter(this.value)) {
            this.oldValue = this.value;
            this.oldSelectionStart = this.selectionStart;
            this.oldSelectionEnd = this.selectionEnd;
          } else if (this.hasOwnProperty("oldValue")) {
            this.value = this.oldValue;
            this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
          }
        });
      };
    }(jQuery));

    /*Numeros con decimal*/
    $(".input-numeric").inputFilter(function (value) {
      return format_numeric(value);
    });

    $(".input-document-number").inputFilter(function (value) {
      return format_numeric(value) && value.length <= 8;
    });

    /*Numeros sin decimal*/
    $(".input-digits").inputFilter(function (value) {
      return format_digits(value);
    });
    /*Solo letras*/
    $(".input-text").inputFilter(function (value) {
      return format_text(value);
    });

    /*Solo letras y numeros para código de reclamo*/
    $(".input-text-digits").inputFilter(function (value) {
      return format_text_digits(value);
    });

    /*Solo numeros y algunas letras para nro de servicio y cuentas*/
    $(".input-digits-sometext").inputFilter(function (value) {
      return format_digits_sometext(value);
    });

    /* Jquery Validation extends methods
       --------------------------------- */
    jQuery.validator.setDefaults({
      debug: true
    });

    jQuery.validator.addMethod("length", function (value, element, params) {
      return $(element).val().length == params;
    }, "Por favor, ingresar un valor de {0} de longitud.");

    jQuery.validator.addMethod("alphanumeric", function (value, element) {
      return this.optional(element) || /^[\w]+$/i.test(value);
    }, "Por favor, ingresar solo letras y números.");

    jQuery.validator.addMethod("emailCustomize", function (value, element) {
      return this.optional(element) || /^([a-zA-Z0-9_Ññ.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/i.test(value);
    }, "Por favor, ingresar una dirección de correo válida.");

    jQuery.validator.addMethod("celular", function (value, element) {
      return this.optional(element) || /^[9][0-9]{8}$/i.test(value);
    }, "Por favor, ingresar un número de celular valido de 9 digitos y que empiece con 9.");

    jQuery.validator.addMethod("decimal", function (value, element) {
      return this.optional(element) || /^\d*[.]?\d{0,2}$/.test(value);
    }, "Por favor, ingresar un número valido hasta 2 decimales (9.99).");


  </script>
  @stack('scripts')
  
</body>

</html>
