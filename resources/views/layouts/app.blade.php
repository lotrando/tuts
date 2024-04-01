<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <link href="{{ asset('libs/datatables/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tabler.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-flags.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-payments.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-vendors.css') }}" rel="stylesheet" />
    <link href="{{ asset('libs/toastr/css/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('libs/highlightjs/styles/atom-one-dark-reasonable.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link type="image/png" href="{{ asset('img/favicons/home.png') }}" rel="shortcut icon">
    <title>{{ env('APP_NAME' ?? 'Laravel') }}</title>

    <style>

    </style>
  </head>

  <body>
    <script src="{{ asset('js/theme.min.js') }}"></script>

    <div class="page">
      @include('layouts.components.topbar')
      @include('layouts.components.navbar')
      <div class="page-wrapper">
        @yield('page-header')
        <div class="page-body">
          <div class="container-fluid">
            @yield('page')
          </div>
        </div>
        @include('layouts.components.footer')
      </div>
    </div>

    @include('layouts.components.logout')

    @stack('modals')
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('js/demo.min.js') }}" defer></script>
    <script src="{{ asset('libs/toastr/js/toastr.min.js') }}"></script>
    <script src="{{ asset('libs/moment/moment-with-locales.min.js') }}"></script>
    <script src="{{ asset('libs/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('libs/datatables/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('libs/highlightjs/highlight.min.js') }}"></script>
    @stack('scripts')
  </body>

</html>
