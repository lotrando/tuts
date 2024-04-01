<!-- Footer -->
<footer class="footer footer-transparent d-print-none py-2">
  <div class="container-fluid">
    <div class="row align-items-center flex-row-reverse text-center">
      <div class="col-lg-auto ms-lg-auto">
        <ul class="list-inline list-inline-dots mb-0">
          <li class="list-inline-item">
            <span>
              <i class="icon d-inline-block ti ti-brand-laravel text-red"></i>
              Laravel version {{ App::VERSION() }}
              <i class="icon d-inline-block ti ti-brand-php text-blue"></i>
              PHP version {{ phpversion() }}
            </span>
          </li>
        </ul>
      </div>
      <div class="col-12 col-lg-auto mt-lg-0 mt-3">
        <ul class="list-inline list-inline-dots mb-0">
          <li class="list-inline-item">
            <span>
              <i class="icon d-inline-block ti ti-brand-tabler text-blue"></i>
              <a class="link-secondary" href=".">Tabler</a>
              Copyright &copy; 2023-{{ date('Y') }}. All rights reserved. With<i class="icon d-inline-block ti ti-heart text-red mx-1"></i>programed by Lotrando
              {{ date('Y') }}
            </span>
          </li>
        </ul>
      </div>
    </div>

  </div>
</footer>
<!-- Footer End -->
