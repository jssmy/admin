
<li class="bold open"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"
      tabindex="0"><i class="material-icons">settings_input_svideo</i><span class="menu-title">{{$menu->description}}</span></a>
    <div class="collapsible-body" style="display: none;">
      <ul class="collapsible collapsible-sub" data-collapsible="accordion">
          @foreach ( $menu->sub_menus as $sub )
          <li class="{{$sub->name == request()->route()->getName() ? 'active': ''}}">
                <a class="{{$sub->name == request()->route()->getName() ? 'active': ''}}" href="{{route($sub->name)}}">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Modern">{{$sub->description}}</span>
                </a>
            </li>          
          @endforeach
      </ul>
    </div>
  </li>