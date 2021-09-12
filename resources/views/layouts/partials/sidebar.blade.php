<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
      <h1 class="logo-wrapper"><a class="brand-logo darken-1"
          href="{{route('home')}}"><img
            class="hide-on-med-and-down"
            src="public/images/materialize-logo-color.png"
            alt="materialize logo"><img class="show-on-medium-and-down hide-on-med-and-up"
            src="public/images/materialize-logo.png"
            alt="materialize logo"><span class="logo-text hide-on-med-and-down">App</span></a><a
          class="navbar-toggler"
          href="#"><i
            class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow ps ps--active-y"
      id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion" style="transform: translateX(0px);">
     
      @each('layouts.partials.menu', $menus, 'menu', 'layouts.partials.none')
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
      </div>
      <div class="ps__rail-y" style="top: 0px; height: 853px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 404px;"></div>
      </div>
    </ul>
    <div class="navigation-background"></div><a
      class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
      href="#"
      data-target="slide-out"><i class="material-icons">menu</i></a>
  </aside>
  <!-- END: SideNav-->