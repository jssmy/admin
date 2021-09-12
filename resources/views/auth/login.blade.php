
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Iniciar sesión</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/login.css')}}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    
    <style>
        .login-bg {
            background-image: url("{{URL::asset('public/images/flat-bg.jpg')}}");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
    <div class="row">
      <div class="col s12">
        <div class="container"><div id="login-page" class="row">
  <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
    <form class="login-form" method="POST" action="{{ route('login') }}">
      @csrf
      <div class="row">
        <div class="input-field col s12">
          <h5 class="ml-4">Iniciar sesión</h5>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="user_name" name="user_name" type="text" class="@error('user_name') is-invalid @enderror">
          @error('user_name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          <label for="user_name" class="center-align">Usuario</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="password" name="password" class="@error('password') is-invalid @enderror" type="password">
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          <label for="password">Contraseña</label>
        </div>
      </div>
      <!---
      <div class="row">
        <div class="col s12 m12 l12 ml-2 mt-1">
          <p>
            <label>
              <input type="checkbox" />
              <span>Remember Me</span>
            </label>
          </p>
        </div>
      </div>
      --->
      <div class="row">
        <div class="input-field col s12">
          <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Entrar </button>
        </div>
      </div>
      <!--
      <div class="row">
        <div class="input-field col s6 m6 l6">
          <p class="margin medium-small"><a href="user-register.html">Register Now!</a></p>
        </div>
        <div class="input-field col s6 m6 l6">
          <p class="margin right-align medium-small"><a href="user-forgot-password.html">Forgot password ?</a></p>
        </div>
      </div>
      --->
    </form>
  </div>
</div>
        </div>
        <div class="content-overlay"></div>
      </div>
    </div>
    <script src="{{URL::asset('public/js/vendors.min.js')}}"></script>
    <script src="{{URL::asset('public/js/plugins.min.js')}}"></script>
    
  </body>
</html>