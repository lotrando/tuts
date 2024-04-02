@extends('layouts.app')

@section('favicon')
  <link type="image/png" href="{{ asset('img/favicons/register.png') }}" rel="shortcut icon">
@endsection

@section('page')
  <div class="page page-center">
    <div class="container-tight container py-3">
      <div class="text-center">
        <div class="navbar-brand">
          <h1 class="h1 mb-3 text-center">Password reset</h1>
        </div>
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
            <svg class="icon icon-tabler icons-tabler-outline icon-tabler-password" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M12 10v4" />
              <path d="M10 13l4 -2" />
              <path d="M10 11l4 2" />
              <path d="M5 10v4" />
              <path d="M3 13l4 -2" />
              <path d="M3 11l4 2" />
              <path d="M19 10v4" />
              <path d="M17 13l4 -2" />
              <path d="M17 11l4 2" />
            </svg>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <div class="mb-2">
              <label class="form-label">{{ __('Email address') }}</label>
              <input class="form-control @error('email') is-invalid is-invalid-lite @enderror" name="email" type="text" value="{{ old('email', $request->email) }}"
                placeholder="Email">
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">{{ __('New Password') }}</label>
              <input class="form-control @error('password') is-invalid is-invalid-lite @enderror" id="password" name="password" data-bs-container="body" data-bs-toggle="popover"
                data-bs-placement="top" data-bs-content="{{ __('Password must be at least 8 characters') }}" type="password" value="{{ old('password') }}"
                placeholder="Zvolte si své heslo" autocomplete="off">
              @error('password')
                {{-- <div class="invalid-feedback">{{ $message }}</div> --}}
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">{{ __('New Password confirmation') }}</label>
              <input class="form-control @error('password') is-invalid is-invalid-lite @enderror" id="password_confirmation" name="password_confirmation" type="password"
                value="{{ old('password_confirmation') }}" placeholder="Potvrďte vámi zvolené heslo" autocomplete="off">
              @error('password_confirmation')
                {{-- <div class="invalid-feedback">{{ $message }}</div> --}}
              @enderror
            </div>
            <div class="form-footer">
              <input name="token" type="hidden" value="{{ request()->route('token') }}">
              <button class="btn btn-primary w-100 text-uppercase" id="submitButton" type="submit">{{ __('Reset Password') }}</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('modals')
@endsection

@push('scripts')
@endpush
