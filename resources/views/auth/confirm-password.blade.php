@extends('layouts.app')

@section('favicon')
  <link type="image/png" href="{{ asset('img/email.png') }}" rel="shortcut icon">
@endsection

@section('page')
  <div class="page page-center">
    <div class="container-tight container my-5">
      <div class="mb-4 text-center">
      </div>
      <div class="text-center">
        <div class="my-5">
          <h2 class="h1">Confirm password</h2>
        </div>
        <form action="{{ route('password.confirm') }}" method="POST" autocomplete="off" novalidate="">
          @csrf
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
          <div class="card card-body shadow-sm">
            <div class="mb-2">
              <label class="form-label">{{ __('Password') }}</label>
              <input class="form-control @error('password') is-invalid is-invalid-lite @enderror" name="password" type="password" value="{{ old('password') }}"
                placeholder="Password">
              @error('password')
                {{-- <div class="invalid-feedback">{{ $message }}</div> --}}
              @enderror
            </div>
            <button class="btn btn-primary w-100" type="submit">
              <i class="icon ti ti-check"></i>
              {{ __('Confirm password') }}
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
