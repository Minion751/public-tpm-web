{{-- Topbar --}}
<div class="topbar">

    {{-- Quick panel --}}
    @if (config('layout.header.topbar.quick-panel.display'))
        <div class="topbar-item">
            <div class="btn btn-icon btn-clean btn-lg mr-1" id="kt_quick_panel_toggle">
                {{ Metronic::getSVG("media/svg/icons/Layout/Layout-4-blocks.svg", "svg-icon-xl svg-icon-primary") }}
            </div>
        </div>
    @endif

    {{-- User --}}
    @if (config('layout.extras.user.display'))
        @if (config('layout.extras.user.layout') == 'offcanvas')
            <div class="topbar-item">
                <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>
                    <span class="symbol symbol-35 symbol-light-success">
                        <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                    </span>
                </div>
            </div>
        @else
            <div class="dropdown">
                {{-- Toggle --}}
                <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
                    <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2">
                        <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                        <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>
                        <span class="symbol symbol-35 symbol-light-success">
                            <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                        </span>
                    </div>
                </div>

                {{-- Dropdown --}}
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                    @include('layout.partials.extras.dropdown._user')
                </div>
            </div>
        @endif
    @endif
</div>
