@auth
  <div class="sticky-top">
    <header class="navbar-expand-md">
      <div class="navbar-collapse collapse" id="navbar-menu">
        <div class="navbar">
          <div class="container-fluid">
            <ul class="navbar-nav">
              <li class="nav-item {{ request()->segment(1) == 'home' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block {{ request()->segment(1) == 'home' ? 'text-azure' : '' }}">
                    <i class="icon d-inline-block ti ti-home"></i>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Home') }}
                  </span>
                </a>
              </li>
              <li class="nav-item {{ request()->segment(1) == 'routes' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('routes') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block {{ request()->segment(1) == 'routes' ? 'text-lime' : '' }}">
                    <i class="icon d-inline-block ti ti-route-2"></i>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Routes') }}
                  </span>
                </a>
              </li>
              <li class="nav-item {{ request()->segment(1) == 'models' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('models') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block {{ request()->segment(1) == 'models' ? 'text-red' : '' }}">
                    <i class="icon d-inline-block ti ti-box"></i>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Models') }}
                  </span>
                </a>
              </li>
              <li class="nav-item {{ request()->segment(1) == 'controllers' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('controllers') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block {{ request()->segment(1) == 'controllers' ? 'text-yellow' : '' }}">
                    <i class="icon d-inline-block ti ti-adjustments-alt"></i>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Controllers') }}
                  </span>
                </a>
              </li>
              <li class="nav-item dropdown {{ request()->segment(1) == 'packages' ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" role="button" aria-expanded="false">
                  <i class="icon nav-link-icon d-inline-block ti ti-package-import"></i>
                  <span class="nav-link-title">
                    Packages
                  </span>
                </a>
                <div class="dropdown-menu">
                  <div class="dropdown-menu-column">
                    <div class="dropend">
                      <a class="dropdown-item {{ request()->segment(2) == 'authorization' ? 'active' : '' }} dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        href="#" role="button" aria-expanded="false">
                        <i class="icon nav-link-icon d-inline-block ti ti-lock text-azure"></i>
                        <span class="nav-link-title">
                          Authorization
                        </span>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item {{ request()->segment(3) == 'fortify' ? 'active' : '' }}" href="{{ route('fortify') }}">
                          <i class="icon nav-link-icon d-inline-block ti ti-brand-laravel {{ request()->segment(3) == 'fortify' ? 'text-red' : '' }}"></i>
                          <span class="nav-link-title">
                            {{ __('Laravel / Fortify') }}
                          </span>
                        </a>
                        <a class="dropdown-item {{ request()->segment(3) == 'spatie' ? 'active' : '' }}" href="{{ route('permissions') }}">
                          <i class="icon nav-link-icon d-inline-block ti ti-letter-s text-blue"></i>
                          <span class="nav-link-title">
                            {{ __('Spatie / Laravel Permissions') }}
                          </span>
                        </a>
                      </div>
                    </div>

                    <div class="dropend">
                      <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" role="button" aria-expanded="false">
                        <i class="icon nav-link-icon d-inline-block ti ti-file-type-pdf text-red"></i>
                        <span class="nav-link-title">
                          PDF
                        </span>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item {{ request()->segment(1) == 'roles' ? 'active' : '' }}" href="{{ route('roles') }}">
                          <i class="icon nav-link-icon d-inline-block ti ti-pdf text-red"></i>
                          <span class="nav-link-title">
                            {{ __('domPDF') }}
                          </span>
                        </a>
                        <a class="dropdown-item {{ request()->segment(1) == 'permissions' ? 'active' : '' }}" href="{{ route('permissions') }}">
                          <i class="icon nav-link-icon d-inline-block ti ti-pdf text-red"></i>
                          <span class="nav-link-title">
                            {{ __('PDF Merger') }}
                          </span>
                        </a>
                      </div>
                    </div>

                  </div>
                </div>
              </li>
              {{-- Optional Dropdown menu --}}
              <li class="nav-item dropdown {{ request()->segment(1) == 'administration' ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" role="button" aria-expanded="false">
                  <i class="icon nav-link-icon d-inline-block ti ti-settings {{ request()->segment(1) == 'administration' ? 'text-teal' : '' }}"></i>
                  <span class="nav-link-title">
                    Administration
                  </span>
                </a>
                <div class="dropdown-menu">
                  <div class="dropdown-menu-column">
                    {{-- <div class="hr-text text-muted my-3">Roles / permissions</div> --}}
                    <div class="dropend">
                      <a class="dropdown-item {{ request()->segment(2) == 'user-rights' ? 'active' : '' }} dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        href="#" role="button" aria-expanded="false">
                        <i class="icon nav-link-icon d-inline-block ti ti-users-group text-azure"></i>
                        <span class="nav-link-title">
                          User rights
                        </span>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item {{ request()->segment(3) == 'users' ? 'active' : '' }}" href="{{ route('users') }}">
                          <i class="icon nav-link-icon d-inline-block ti ti-users text-lime"></i>
                          <span class="nav-link-title">
                            {{ __('Users') }}
                          </span>
                        </a>
                        <a class="dropdown-item {{ request()->segment(3) == 'roles' ? 'active' : '' }}" href="{{ route('roles') }}">
                          <i class="icon nav-link-icon d-inline-block ti ti-shirt text-red"></i>
                          <span class="nav-link-title">
                            {{ __('Roles') }}
                          </span>
                        </a>
                        <a class="dropdown-item {{ request()->segment(3) == 'permissions' ? 'active' : '' }}" href="{{ route('permissions') }}">
                          <i class="icon nav-link-icon d-inline-block ti ti-list-check text-yellow"></i>
                          <span class="nav-link-title">
                            {{ __('Permissions') }}
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            {{-- <div class="d-block col-3 mb-1">
              <form method="get" autocomplete="off" novalidate="">
                <div class="input-icon">
                  <span class="input-icon-addon">
                    <svg class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                      <path d="M21 21l-6 -6"></path>
                    </svg>
                  </span>
                  <input class="form-control" id="searchBox" name="searchbox" type="text" value="" aria-label="Search on page" placeholder="{{ __('Search…') }}">
                </div>
              </form>
            </div> --}}
          </div>
        </div>
      </div>
    </header>
  </div>
@endauth
