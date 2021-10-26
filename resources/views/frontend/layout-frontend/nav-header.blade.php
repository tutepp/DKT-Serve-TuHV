<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{route('page.index')}}" class="logo d-flex align-items-center">
            <img src="{{asset('FlexStart/assets/img/LogoDKT-G-Black.png')}}" alt="">

        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{route('page.index')}}">{{__('Trang chủ')}}</a></li>
                <li><a class="nav-link scrollto" href="{{route('blog.index')}}">{{__('Tin tức')}}</a></li>
                <li><a class="nav-link scrollto" href="#services">{{__('Dự án')}}</a></li>
                <li><a class="nav-link scrollto" href="#services">{{__('Tuyển dụng')}}</a></li>
                <li><a class="nav-link scrollto" href="#portfolio">{{__('Về chúng tôi')}}</a></li>
                <li class="dropdown">
                    <a href="#">
                        <img  style="max-height: 20px" src="
                        @if(Session::get('website_language') == 'vi')
                            https://vectorflags.s3.amazonaws.com/flags/vn-button-01.png
                        @elseif(Session::get('website_language') == 'en')
                            https://icon-library.com/images/flag-usa-icon/flag-usa-icon-18.jpg
                        @else
                            https://vectorflags.s3.amazonaws.com/flags/vn-button-01.png
                        @endif
                            "alt=" "/>
                    </a>
                        <ul>
                            <li class="navi-item">
                                <a href="{!! route('user.change-language', 'vi') !!}" class="navi-link">
                                    <span>
                                      <img style="max-height:20px" src="https://vectorflags.s3.amazonaws.com/flags/vn-button-01.png" alt=""/>
                                    </span>
                                    <span style="margin-right: 55px">Việt Nam</span>
                                </a>
                            </li>
                            <li class="navi-item active">
                                <a href="{!! route('user.change-language', 'en') !!}" class="navi-link">
                                    <span>
                                         <img style="max-height:20px" src="https://icon-library.com/images/flag-usa-icon/flag-usa-icon-18.jpg" alt=""/>
                                    </span>
                                     <span style="margin-right: 70px">English</span>
                                </a>
                            </li>
                        </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>
<!-- End Header -->
