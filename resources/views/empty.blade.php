@extends('layouts.app')

@section('page-header')
  <div class="page-header d-print-none">
    <div class="container-fluid">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle">
            Page
          </div>
          <h2 class="page-title text-blue h2">
            Empty
          </h2>
        </div>
        <div class="d-print-none col-auto ms-auto">
          <div class="btn-list">
            <div class="btn-list">
              <button class="btn d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#logoutModal">
                <i class="icon nav-link-icon d-sm-inline-block ti ti-trash"></i>
                New viev
              </button>
              <button class="btn d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#logoutModal" aria-label="Create new report">
                <i class="icon nav-link-icon d-md-none d-lg-inline-block ti ti-trash"></i>
              </button>
              <button class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#reportModal">
                <i class="icon nav-link-icon d-lg-inline-block ti ti-check"></i>
                Create new report
              </button>
              <button class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#reportModal" aria-label="Create new report">
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
  <div class="modal modal-blur fade" id="reportModal" role="dialog" aria-modal="true" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">New report</h5>
          <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input class="form-control" name="example-text-input" type="text" placeholder="Your report name">
          </div>
          <label class="form-label">Report type</label>
          <div class="form-selectgroup-boxes row mb-3">
            <div class="col-lg-6">
              <label class="form-selectgroup-item">
                <input class="form-selectgroup-input" name="report-type" type="radio" value="1" checked="">
                <span class="form-selectgroup-label d-flex align-items-center p-3">
                  <span class="me-3">
                    <span class="form-selectgroup-check"></span>
                  </span>
                  <span class="form-selectgroup-label-content">
                    <span class="form-selectgroup-title strong mb-1">Simple</span>
                    <span class="d-block text-secondary">Provide only basic data needed for the report</span>
                  </span>
                </span>
              </label>
            </div>
            <div class="col-lg-6">
              <label class="form-selectgroup-item">
                <input class="form-selectgroup-input" name="report-type" type="radio" value="1">
                <span class="form-selectgroup-label d-flex align-items-center p-3">
                  <span class="me-3">
                    <span class="form-selectgroup-check"></span>
                  </span>
                  <span class="form-selectgroup-label-content">
                    <span class="form-selectgroup-title strong mb-1">Advanced</span>
                    <span class="d-block text-secondary">Insert charts and additional advanced analyses to be inserted in the report</span>
                  </span>
                </span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="mb-3">
                <label class="form-label">Report url</label>
                <div class="input-group input-group-flat">
                  <span class="input-group-text">
                    https://tabler.io/reports/
                  </span>
                  <input class="form-control ps-0" type="text" value="report-01" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="mb-3">
                <label class="form-label">Visibility</label>
                <select class="form-select">
                  <option value="1" selected="">Private</option>
                  <option value="2">Public</option>
                  <option value="3">Hidden</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Client name</label>
                <input class="form-control" type="text">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Reporting period</label>
                <input class="form-control" type="date">
              </div>
            </div>
            <div class="col-lg-12">
              <div>
                <label class="form-label">Additional information</label>
                <textarea class="form-control" rows="3"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-link link-secondary" data-bs-dismiss="modal" href="#">
            Cancel
          </a>
          <a class="btn btn-primary ms-auto" data-bs-dismiss="modal" href="#">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
              stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M12 5l0 14"></path>
              <path d="M5 12l14 0"></path>
            </svg>
            Create new report
          </a>
        </div>
      </div>
    </div>
  </div>
@endpush

@push('scripts')
@endpush
