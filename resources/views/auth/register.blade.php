@extends('layouts.app')

@section('favicon')
  <link type="image/png" href="{{ asset('img/favicons/register.png') }}" rel="shortcut icon">
@endsection

@section('page')
  <div class="page page-center">
    <div class="container-tight container py-3">
      <div class="mb-4 text-center">
        <h2 class="h2 mb-2 text-center">Register your account</h2>
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
            <svg class="icon icon-tabler icons-tabler-outline icon-tabler-lock-plus" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M12.5 21h-5.5a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10a2 2 0 0 1 1.74 1.012" />
              <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
              <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
              <path d="M16 19h6" />
              <path d="M19 16v6" />
            </svg>
          </div>
        </div>
        <div class="card-body p-4">
          <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-2">
              <label class="form-label">{{ __('Email address') }}</label>
              <input class="form-control @error('email') is-invalid is-invalid-lite @enderror" name="email" type="text" value="{{ old('email') }}" placeholder="Email address">
              @error('email')
                {{-- <div class="invalid-feedback">{{ $message }}</div> --}}
              @enderror
            </div>
            <div class="mb-2">
              <label class="form-label">{{ __('Name') }}</label>
              <input class="form-control @error('name') is-invalid is-invalid-lite @enderror" name="name" type="text" value="{{ old('name') }}" placeholder="Name">
              @error('name')
                {{-- <div class="invalid-feedback">{{ $message }}</div> --}}
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">{{ __('Password') }}</label>
              <input class="form-control @error('password') is-invalid is-invalid-lite @enderror" id="password" name="password" type="password" value="{{ old('password') }}"
                placeholder="Chose your password" autocomplete="off">
              @error('password')
                {{-- <div class="invalid-feedback">{{ $message }}</div> --}}
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">{{ __('Password confirmation') }}</label>
              <input class="form-control @error('password') is-invalid is-invalid-lite @enderror" id="password_confirmation" name="password_confirmation" type="password"
                value="{{ old('password_confirmation') }}" placeholder="Confirm your password" autocomplete="off">
              @error('password_confirmation')
                {{-- <div class="invalid-feedback">{{ $message }}</div> --}}
              @enderror
            </div>
            <div class="mt-3">
              <label class="form-check">
                <input class="form-check-input" id="terms" name="terms" type="checkbox" onClick="check_agree(this.form)" />
                <span class="form-check-label">{{ __('Agree the') }} <a data-bs-toggle="modal" data-bs-target="#modal-terms" href="">{{ __('terms and policy') }}</a></span>
              </label>
            </div>
            <div class="form-footer">
              <button class="btn btn-primary w-100 text-uppercase" id="submitButton" type="submit" value="{{ __('Sign up') }}" disabled>{{ __('Sign up') }}</button>
            </div>
          </form>
        </div>
      </div>
      <div class="text-secondary mt-3 text-center">
        Already have account? <a href="{{ route('login') }}" tabindex="-1">Sign in</a>
      </div>
    </div>
  </div>
@endsection

@push('modals')
  <div class="modal modal-blur fade" id="modal-terms" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-info-lt">
          <h5 class="modal-title">{{ __('What personal data does the company process ?') }}</h5>
        </div>
        <div class="modal-body">
          <p class="text-justify">
            {{ __('The company can collect data about you that you yourself provide! Such personal data are, in particular, data that you enter in the completed registration form or that you communicate to the company.') }}
          </p>
        </div>
        <div class="modal-footer">
          <button class="btn float-right" data-bs-dismiss="modal" type="button">
            <svg class="icon icon-tabler icons-tabler-outline icon-tabler-check text-lime" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M5 12l5 5l10 -10" />
            </svg>
            {{ __('Understand') }}
          </button>
        </div>
      </div>
    </div>
  </div>
@endpush

@push('scripts')
  <script>
    function check_agree(form) {
      if (form.terms.checked) {
        form.submitButton.disabled = false;
      } else {
        form.submitButton.disabled = true;;
      }
    }
  </script>
@endpush
