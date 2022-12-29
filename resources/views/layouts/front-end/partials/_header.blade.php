<!--=====================================-->
<!--=        Header Area Start       	=-->
<!--=====================================-->
<header class="header axil-header header-style-1">
    <div id="axil-sticky-placeholder"></div>
    <div class="axil-mainmenu" style="background-color:var(--color-light)">
        <div class="container">
            <div class="header-navbar">
                <div class="header-logo">
                    @php($logo=\App\Model\Setting::where('key','logo')->first()->value)

                    <a href="{{route('home')}}"><img id="addImg" class="light-version-logo" src="{{asset('storage/company')}}/{{$logo}}"
                                                     onerror="this.src='{{asset('frontend/assets/media/footer.png')}}'"></a>
                    <a href="{{route('home')}}"><img id="addImg" class="sticky-logo" src="{{asset('storage/company')}}/{{$logo}}"
                                                     onerror="this.src='{{asset('frontend/assets/media/footer.png')}}'"></a><br>
                </div>
                <div class="header-main-nav">
                    <!-- Start Mainmanu Nav -->
                    <nav class="mainmenu-nav" id="mobilemenu-popup">
                        <div class="d-block d-lg-none">
                            <div class="mobile-nav-header">
                                <div class="mobile-nav-logo">
                                    <a href="{{route('home')}}">
                                        <a href="{{route('home')}}"><img id="addImg" class="light-version-logo" src="{{asset('storage/company')}}/{{$logo}}"
                                                                         onerror="this.src='{{asset('frontend/assets/media/footer.png')}}'"></a>
                                    </a>
                                </div>
                                <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <ul class="mainmenu">
                            <li><a href="{{route('home')}}" class="@yield('home')">Home</a></li>
                            <li><a href="{{route('about')}}" class="@yield('about')">About</a></li>
                            <li><a href="{{route('service')}}" class="@yield('service')">Service</a></li>
                            <li><a href="{{route('portfolio')}}" class="@yield('portfolio')">Portfolio</a></li>
                            <li><a href="{{route('team')}}" class="@yield('team')">Team</a></li>
                            <li><a href="{{route('client')}}" class="@yield('client')">Client</a></li>
                            <li><a href="{{route('findUs')}}" class="@yield('findUs')">Find Us</a></li>
                        </ul>

                    </nav>
                    <!-- End Mainmanu Nav -->
                </div>
                <div class="header-action">
                    <ul class="list-unstyled">
                        <li class="sidemenu-btn d-lg-block d-none">
                            <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenuRight">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </li>
                        <li class="mobile-menu-btn sidemenu-btn d-lg-none d-block">
                            <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#mobilemenu-popup">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
