@extends('layouts.app')

@section('favicon')
  <link type="image/png" href="{{ asset('img/favicons/login.png') }}" rel="shortcut icon">
@endsection

@section('page')
  <div class="page page-center">
    <div class="container-tight container py-3">
      <div class="mb-4 text-center">
        <h2 class="h2 mb-4 text-center">Login to your account</h2>
      </div>
      {{-- alert --}}
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
      <div class="card card-md shadow-sm">
        <div class="card-stamp">
          <div class="card-stamp-icon bg-blue">
            <svg class="icon icon-tabler icons-tabler-outline icon-tabler-login" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M15 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
              <path d="M21 12h-13l3 -3" />
              <path d="M11 15l-3 -3" />
            </svg>
          </div>
        </div>
        <div class="card-body p-4">
          <form action="{{ route('login') }}" method="POST" autocomplete="off">
            @csrf
            <div class="mb-2">
              <label class="form-label">{{ __('Email address') }}</label>
              <input class="form-control @error('email') is-invalid is-invalid-lite @enderror" name="email" type="text" value="{{ old('email') }}" placeholder="Email">
              @error('email')
                {{-- <div class="invalid-feedback">{{ $message }}</div> --}}
              @enderror
            </div>
            <div class="mb-2">
              <span class="form-label-description mb-1">
                <a href="{{ route('password.request') }}">{{ __('Forgot your password') }}</a>
              </span>
              <label class="form-label">
                {{ __('Password') }}
              </label>
              <input class="form-control @error('password') is-invalid is-invalid-lite @enderror" id="password" name="password" type="password" value="{{ old('password') }}"
                placeholder="{{ __('User password') }}" autocomplete="off">
              @error('password')
                {{-- <div class="invalid-feedback">{{ $message }}</div> --}}
              @enderror
            </div>
            <div class="mt-5">
              <label class="form-check">
                <input class="form-check-input" name="remember" type="checkbox" />
                <span class="form-check-label">{{ __('Remember me on this device') }}</span>
              </label>
            </div>
            <div class="form-footer">
              <button class="btn btn-blue w-100 text-uppercase hover-shadow mb-2" type="submit">{{ __('Sign in') }}</button>
            </div>
          </form>
        </div>
      </div>
      <div class="text-secondary mt-3 text-center">
        Don't have account yet? <a href="{{ route('register') }}" tabindex="-1">Sign up</a>
      </div>
    </div>
  </div>
@endsection
