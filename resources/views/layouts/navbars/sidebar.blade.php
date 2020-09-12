<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('BISD-EVENTS') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'details' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('details') }}">
          <i class="material-icons">chrome_reader_mode</i>
          <p>{{ __('User details') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">content_paste</i>
          <p>{{ __('Tableaux') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('table') }}">
                <i class="material-icons">content_paste</i>
                  <p>{{ __('Table Catégories') }}</p>
              </a>
            </li>
          </ul>
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
              <a class="nav-link" href="{{ url('events/')}}">
                <i class="material-icons">content_paste</i>
                  <p>{{ __('Table Evenement') }}</p>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('profile.edit') }}">
          <i class="material-icons">perm_identity</i>
            <p>{{ __('User profile') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">chrome_reader_mode</i>
          <p>{{ __('Demandes') }}</p>
        </a>
      </li>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>

    </ul>
  </div>
</div>
