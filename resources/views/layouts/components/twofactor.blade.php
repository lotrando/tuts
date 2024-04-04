  {{-- 2FA Modal --}}
  <div class="modal modal-blur fade" id="twofaModal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content shadow-lg">
        <div class="modal-status bg-primary"></div>
        <div class="modal-body py-4 text-center">
          <svg class="icon icon-tabler icon-lg icons-tabler-outline icon-tabler-fingerprint text-blue" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M18.9 7a8 8 0 0 1 1.1 5v1a6 6 0 0 0 .8 3" />
            <path d="M8 11a4 4 0 0 1 8 0v1a10 10 0 0 0 2 6" />
            <path d="M12 11v2a14 14 0 0 0 2.5 8" />
            <path d="M8 15a18 18 0 0 0 1.8 6" />
            <path d="M4.9 19a22 22 0 0 1 -.9 -7v-1a8 8 0 0 1 12 -6.95" />
          </svg>
          @auth
            @if (auth()->user()->two_factor_secret)
              <h3>{{ __('Two factor authentication is') }}</h3>
              <p class="text-lime text-uppercase mb-2">{{ __('Enabled') }}</p>
              <h3>QR for authenticator applications</h3>
              <div class="mx-5 mb-2 bg-white pb-5 pt-5">
                {!! auth()->user()->twoFactorQrCodeSvg() !!}
              </div>
              <h3>Recovery codes</h3>
              <div class="recovery-code text-yellow">
                @foreach (auth()->user()->recoveryCodes() as $code)
                  {{ $code }}<br>
                @endforeach
              </div>
            @else
              <h3>{{ __('Two factor authentication') }}</h3>
              <div class="text-red text-uppercase">{{ __('Disabled') }}</div>
            @endif
          @endauth
        </div>
        <div class="modal-footer">
          <div class="w-100">
            <div class="row">
              <div class="col"><a class="btn w-100" data-bs-dismiss="modal" href="#">
                  {{ __('Cancel') }}
                </a></div>
              <div class="col">
                <form method="POST" action="{{ route('two-factor.enable') }}">
                  @csrf
                  @auth
                    @if (auth()->user()->two_factor_secret)
                      @method('DELETE')
                      <button class="btn btn-red w-100" type="submit" type="button">
                        {{ __('Disable') }}
                      </button>
                    @else
                      <button class="btn btn-lime w-100" type="submit" type="button">
                        {{ __('Enable') }}
                      </button>
                    @endif
                  @endauth
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- 2FA Modal End --}}
