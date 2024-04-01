<!-- Topbar -->
@php
  function initials()
  {
      preg_match('/(?:\w+\. )?(\w+).*?(\w+)(?: \w+\.)?$/', Auth::user()->name, $result);
      return strtoupper($result[1][0] . $result[2][0]);
  }
@endphp
<header class="navbar navbar-expand-md d-print-none">
  <div class="container-fluid">
    @auth
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-menu" type="button" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    @endauth
    <h1 class="navbar-brand d-none-navbar-horizontal pe-md-3 pe-0">
      <a href="{{ route('index') }}">
        <img class="navbar-brand-image" src="{{ asset('img/logo.png') }}" alt="Laravel logo">
      </a>
    </h1>
    <div class="navbar-nav order-md-last flex-row">
      <div class="nav-item d-flex">
        <div class="btn-list">
          <div class="d-inline-block d-flex">
            <a class="nav-link hide-theme-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" href="?theme=dark" title="{{ __('Dark Mode') }}">
              <i class="icon d-inline-block ti text-muted ti-moon"></i>
            </a>
            <a class="nav-link hide-theme-light" data-bs-toggle="tooltip" data-bs-placement="bottom" href="?theme=light" title="{{ __('Light Mode') }}">
              <i class="icon d-inline-block ti ti-sun"></i>
            </a>
          </div>
          @guest
            <a class="nav-link" href="{{ route('register') }}">
              <span class="nav-item">
                <i class="icon nav-link-icon d-inline-block ti ti-user-plus {{ request()->segment(2) == 'register' ? 'text-lime' : '' }}"></i>
              </span>
              <span class="nav-link-title d-none d-md-flex">
                {{ __('Register') }}
              </span>
            </a>
            <a class="nav-link" href="{{ route('login') }}">
              <span class="nav-item">
                <i class="icon nav-link-icon d-inline-block ti ti-login {{ request()->segment(2) == 'login' ? 'text-lime' : '' }}"></i>
              </span>
              <span class="nav-link-title d-none d-md-flex">
                {{ __('login') }}
              </span>
            </a>
          @endguest
        </div>
      </div>
      @auth
        <div class="nav-item dropdown m-1">
          <a class="nav-link d-flex text-reset p-0" data-bs-toggle="dropdown" href="#" aria-label="Open user menu">
            <div class="d-none d-xl-block ps-1">
              <div>{{ Auth::user()->name ?? '' }}</div>
              <div class="small text-muted">{{ Auth::user()->email }}</div>
            </div>
            <span class="avatar avatar-sm ms-2">
              {{ initials() }}
            </span>
          </a>
          {{-- User Dropdown Menu --}}
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal" href="#">
              <svg class="icon dropdown-item-icon text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
              </svg>
              {{ __('Logout') }}
            </a>
          </div>
        </div>
      @endauth
    </div>
  </div>
</header>
<!-- topbar End -->
