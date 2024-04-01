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
@endsection

@section('page')
  <div class="row row-cards">
    <div class="col-12 col-xxl-8">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Users</h3>
        </div>
        <div class="card-body border-bottom p-2">
          <div class="d-flex">
            <div class="col-12">
              <form method="get" autocomplete="on">
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
            </div>
          </div>
        </div>
        <table class="card-table table-vcenter text-nowrap table" id="Table">
          <thead>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>email</th>
              <th>Updated</th>
              <th>Created</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
    </div>
    <div class="col-12 col-xxl-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Last commits</h3>
        </div>
        <div class="list-group list-group-flush list-group-hoverable">
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-auto"><span class="badge bg-red"></span></div>
              <div class="col-auto">
                <a href="#">
                  <span class="avatar" style="background-image: url(./static/avatars/000m.jpg)"></span>
                </a>
              </div>
              <div class="col text-truncate">
                <a class="text-reset d-block" href="#">Paweł Kuna</a>
                <div class="d-block text-secondary text-truncate mt-n1">Change deprecated html tags to text decoration classes (#29604)</div>
              </div>
              <div class="col-auto">
                <a class="list-group-item-actions" href="#"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                  <svg class="icon text-secondary" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-auto"><span class="badge bg-green"></span></div>
              <div class="col-auto">
                <a href="#">
                  <span class="avatar" style="background-image: url(./static/avatars/003m.jpg)"></span>
                </a>
              </div>
              <div class="col text-truncate">
                <a class="text-reset d-block" href="#">Dunn Slane</a>
                <div class="d-block text-secondary text-truncate mt-n1">Regenerate package-lock.json (#29730)</div>
              </div>
              <div class="col-auto">
                <a class="list-group-item-actions" href="#"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                  <svg class="icon text-secondary" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-auto"><span class="badge bg-red"></span></div>
              <div class="col-auto">
                <a href="#">
                  <span class="avatar" style="background-image: url(./static/avatars/000f.jpg)"></span>
                </a>
              </div>
              <div class="col text-truncate">
                <a class="text-reset d-block" href="#">Emmy Levet</a>
                <div class="d-block text-secondary text-truncate mt-n1">Some minor text tweaks</div>
              </div>
              <div class="col-auto">
                <a class="list-group-item-actions" href="#"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                  <svg class="icon text-secondary" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-auto"><span class="badge bg-yellow"></span></div>
              <div class="col-auto">
                <a href="#">
                  <span class="avatar" style="background-image: url(./static/avatars/001f.jpg)"></span>
                </a>
              </div>
              <div class="col text-truncate">
                <a class="text-reset d-block" href="#">Maryjo Lebarree</a>
                <div class="d-block text-secondary text-truncate mt-n1">Link to versioned docs</div>
              </div>
              <div class="col-auto">
                <a class="list-group-item-actions" href="#"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                  <svg class="icon text-secondary" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-auto"><span class="badge"></span></div>
              <div class="col-auto">
                <a href="#">
                  <span class="avatar">EP</span>
                </a>
              </div>
              <div class="col text-truncate">
                <a class="text-reset d-block" href="#">Egan Poetz</a>
                <div class="d-block text-secondary text-truncate mt-n1">Copywriting edits</div>
              </div>
              <div class="col-auto">
                <a class="list-group-item-actions" href="#"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                  <svg class="icon text-secondary" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-auto"><span class="badge bg-yellow"></span></div>
              <div class="col-auto">
                <a href="#">
                  <span class="avatar" style="background-image: url(./static/avatars/002f.jpg)"></span>
                </a>
              </div>
              <div class="col text-truncate">
                <a class="text-reset d-block" href="#">Kellie Skingley</a>
                <div class="d-block text-secondary text-truncate mt-n1">Enable RFS for font resizing</div>
              </div>
              <div class="col-auto">
                <a class="list-group-item-actions" href="#"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                  <svg class="icon text-secondary" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
  <script>
    // Datatable
    var myTable = new DataTable('#Table', {
      dom: 'lrt',
      paging: true,
      serverSide: true,
      processing: true,
      stateSave: true,
      pageSave: true,
      pageLength: -1,
      lengthChange: false,
      responsive: true,
      scrollY: 394,
      deferRender: true,
      searchHighlight: true,
      scroller: false,
      language: {
        url: "{{ asset('libs/datatables/js/cs.json') }}",
      },
      order: [
        [0, "desc"]
      ],
      ajax: {
        type: "GET",
        url: "{{ route('useri') }}",
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: "json",
        contentType: 'application/json; charset=utf-8',
        data: function(data) {},
        complete: function(response) {}
      },
      columns: [{
          data: 'id',
          "className": 'text-yellow',
          'width': '1%',
        },
        {
          data: 'name',
          "className": 'text-yellow',
          'width': '75%',
        },
        {
          data: 'email',
          "className": 'text-lime',
          'width': '5%'
        },
        {
          data: 'created_at',
          'width': '8%',
          render: function(data, type, full, meta) {
            return moment(data).locale($('html').attr('lang')).format('DD.MMMM.YYYY')
          }
        },
        {
          data: 'updated_at',
          'width': '8%',
          render: function(data, type, full, meta) {
            return moment(data).locale($('html').attr('lang')).format('DD.MMMM.YYYY')
          }
        }
      ]
    });

    // Edit form after click datatable row
    myTable.on('click', 'tbody tr', function() {
      var data = myTable.row(this).data();
      alert(data.name)
    });

    // Datatable custom search box
    $('#searchBox').on('keyup', function() {
      myTable.search($(this).val()).draw()
    });
  </script>
@endpush
