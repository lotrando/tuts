@extends('layouts.app')

@section('favicon')
  <link type="image/png" href="{{ asset('img/obnovheslo.png') }}" rel="shortcut icon">
@endsection

@section('page')
  <div class="page page-center">
    <div class="container-tight container py-5">
      <h2 class="h2 mb-4 text-center">{{ __('Forgot password') }}</h2>
      <div class="card shadow-sm">
        <div class="card-stamp">
          <div class="card-stamp-icon bg-blue">
            <svg class="icon icon-tabler icons-tabler-outline icon-tabler-lock-question" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M15 21h-8a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10c.265 0 .518 .052 .75 .145" />
              <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
              <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
              <path d="M19 22v.01" />
              <path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
            </svg>
          </div>
        </div>
        <form action="{{ route('password.email') }}" method="POST" autocomplete="off" novalidate="">
          @csrf
          <div class="card-body">
            {{-- Alert --}}
            @if ($errors->any())
              <div class="alert alert-danger alert-dismissible shadow-sm" role="alert">
                <div class="d-flex">
                  <div>
                    @foreach ($errors->all() as $error)
                      <i class="icon ti ti-exclamation-circle me-1"></i>
                      {{ $error }}<br>
                    @endforeach
                  </div>
                </div>
                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
              </div>
            @elseif (session('status'))
              <div class="alert alert-success alert-dismissible shadow-sm" role="alert">
                <div class="d-flex">
                  <div>
                    <i class="icon ti ti-check me-1"></i>
                  </div>
                  <div>
                    {{ session('status') }}
                  </div>
                </div>
                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
              </div>
            @endif
            {{-- Alert end --}}
            <p class="text-secondary mb-4 text-center">{{ __('Enter your email address. We\'ll be send password reset link.') }}</p>
            <div class="mb-3">
              <input class="form-control" name="email" type="email" value="{{ old('email') }}" placeholder="{{ __('Email address') }}">
            </div>
            <div class="form-footer">
              <button class="btn btn-primary w-100" type="submit">
                <i class="icon ti ti-mail-forward"></i>
                {{ __('Send me password reset link') }}
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="text-secondary mt-3 text-center">
        Forget it, send me <a href="{{ route('login') }}">back</a> to the sign in screen
      </div>
    </div>
  </div>
@endsection
