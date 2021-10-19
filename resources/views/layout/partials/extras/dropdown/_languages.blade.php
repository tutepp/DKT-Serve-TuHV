{{-- Nav --}}
<ul class="navi navi-hover py-4">
    {{-- Item --}}
    <li class="navi-item">
        <a href="{{url('lang/vi')}}" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="{{ asset('media/svg/flags/220-vietnam.svg') }}" alt=""/>
            </span>
            <span class="navi-text">Việt Nam</span>
        </a>
    </li>

    {{-- Item --}}
    <li class="navi-item active">
        <a href="{{url('lang/en')}}" class="navi-link">
            <span class="symbol symbol-20 mr-3">

                <img src="{{ asset('media/svg/flags/226-united-states.svg') }}" alt=""/>
            </span>
            <span class="navi-text">English</span>
        </a>
    </li>
</ul>