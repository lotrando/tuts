@extends('layouts.app')

@section('page-header')
  <div class="page-header d-print-none">
    <div class="container-fluid">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title text-blue h2">
            {{ $pageinfo['title'] }}
          </h2>
          <div class="page-pretitle">
            {{ $pageinfo['subtitle'] }}
          </div>
        </div>
        <div class="d-print-none col-auto ms-auto">
          <div class="btn-list">
            <div class="btn-list">
              <button class="btn btn-red d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#logoutModal">
                <i class="icon nav-link-icon d-sm-inline-block ti ti-trash"></i>
                Delete
              </button>
              <button class="btn d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#logoutModal" aria-label="Create new report">
                <i class="icon nav-link-icon d-md-none d-lg-inline-block ti ti-trash"></i>
              </button>
              <button class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#newModal">
                <i class="icon nav-link-icon d-lg-inline-block ti ti-plus"></i>
                New
              </button>
              <button class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#newModal" aria-label="Create new report">
                <i class="icon nav-link-icon d-lg-inline-block ti ti-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('page')
@endsection

@push('modals')
  {{-- Modal --}}
  <div class="modal modal-blur fade" id="newModal" aria-hidden="true" tabindex="-1" style="display: none;">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add a new team</h5>
          <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row align-items-end mb-3">
            <div class="col-auto">
              <a class="avatar avatar-upload rounded" href="#">
                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M12 5l0 14"></path>
                  <path d="M5 12l14 0"></path>
                </svg>
                <span class="avatar-upload-text">Add</span>
              </a>
            </div>
            <div class="col">
              <label class="form-label">Name</label>
              <input class="form-control" type="text">
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Pick your team color</label>
            <div class="row g-2">
              <div class="col-auto">
                <label class="form-colorinput">
                  <input class="form-colorinput-input" name="color" type="radio" value="dark">
                  <span class="form-colorinput-color bg-dark"></span>
                </label>
              </div>
              <div class="col-auto">
                <label class="form-colorinput form-colorinput-light">
                  <input class="form-colorinput-input" name="color" type="radio" value="white" checked="">
                  <span class="form-colorinput-color bg-white"></span>
                </label>
              </div>
              <div class="col-auto">
                <label class="form-colorinput">
                  <input class="form-colorinput-input" name="color" type="radio" value="blue">
                  <span class="form-colorinput-color bg-blue"></span>
                </label>
              </div>
              <div class="col-auto">
                <label class="form-colorinput">
                  <input class="form-colorinput-input" name="color" type="radio" value="azure">
                  <span class="form-colorinput-color bg-azure"></span>
                </label>
              </div>
              <div class="col-auto">
                <label class="form-colorinput">
                  <input class="form-colorinput-input" name="color" type="radio" value="indigo">
                  <span class="form-colorinput-color bg-indigo"></span>
                </label>
              </div>
              <div class="col-auto">
                <label class="form-colorinput">
                  <input class="form-colorinput-input" name="color" type="radio" value="purple">
                  <span class="form-colorinput-color bg-purple"></span>
                </label>
              </div>
              <div class="col-auto">
                <label class="form-colorinput">
                  <input class="form-colorinput-input" name="color" type="radio" value="pink">
                  <span class="form-colorinput-color bg-pink"></span>
                </label>
              </div>
              <div class="col-auto">
                <label class="form-colorinput">
                  <input class="form-colorinput-input" name="color" type="radio" value="red">
                  <span class="form-colorinput-color bg-red"></span>
                </label>
              </div>
              <div class="col-auto">
                <label class="form-colorinput">
                  <input class="form-colorinput-input" name="color" type="radio" value="orange">
                  <span class="form-colorinput-color bg-orange"></span>
                </label>
              </div>
              <div class="col-auto">
                <label class="form-colorinput">
                  <input class="form-colorinput-input" name="color" type="radio" value="yellow">
                  <span class="form-colorinput-color bg-yellow"></span>
                </label>
              </div>
              <div class="col-auto">
                <label class="form-colorinput">
                  <input class="form-colorinput-input" name="color" type="radio" value="lime">
                  <span class="form-colorinput-color bg-lime"></span>
                </label>
              </div>
            </div>
          </div>
          <div>
            <label class="form-label">Additional info</label>
            <textarea class="form-control"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn me-auto" data-bs-dismiss="modal" type="button">Close</button>
          <button class="btn btn-primary" data-bs-dismiss="modal" type="button">Add Team</button>
        </div>
      </div>
    </div>
  </div>
@endpush

@push('scripts')
@endpush
