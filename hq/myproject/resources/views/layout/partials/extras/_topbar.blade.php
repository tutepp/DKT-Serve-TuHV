{{-- Topbar --}}
<div class="topbar">

    {{-- Languages --}}
    @if (config('layout.extras.languages.display'))
        <div class="dropdown">
            <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                    <img class="h-20px w-20px rounded-sm" src="{{ asset('media/svg/flags/226-united-states.svg') }}" alt=""/>
                </div>
            </div>

            <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                <ul class="navi navi-hover py-4">
                    {{-- Item --}}
                    <li class="navi-item">
                        <a href="#" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="{{ asset('media/svg/flags/226-united-states.svg') }}" alt=""/>
            </span>
                            <span class="navi-text">English</span>
                        </a>
                    </li>

                    {{-- Item --}}
                    <li class="navi-item active">
                        <a href="#" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="{{ asset('media/svg/flags/128-spain.svg') }}" alt=""/>
            </span>
                            <span class="navi-text">Spanish</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    @endif

    {{-- User --}}
    @if (config('layout.extras.user.display'))
        @if (config('layout.extras.user.layout') == 'offcanvas')
            <div class="topbar-item">
                <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Chào,</span>
                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{Auth::user()->name}}</span>
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
                        <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Chào,</span>
                        <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{Auth::user()->name}}</span>
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
