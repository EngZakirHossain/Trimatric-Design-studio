@extends('layouts.front-end.app')
@section('service')active @endsection
@section('title') Service @endsection
@section('content')
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                <h1 class="title h3">Best solutions for your <strong style="color: #E31C26">Business</strong> </h1>
                <p>Give your business a unique logo to stand out from crowd. We’ll create logo specifically for your company.</p>
            </div>
            <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                <img class="paralax-image" src="{{asset('frontend/assets/media/breadcrumb/service.png')}}" alt="Illustration">
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{asset('frontend/assets/media/others/bubble-21.png')}}" alt="Bubble">
            </li>
        </ul>
    </div>
    <!--=====================================-->
    <!--=        Service Area Start         =-->
    <!--=====================================-->
    <div class="service-scroll-navigation-area">
        <!-- Service Nav -->
        <nav id="onepagenav" class="service-scroll-nav navbar onepagefixed">
            <div class="container">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="#Graphics">Graphics Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Event">Event Activation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Digital">Digital Marketing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Production">Production</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#3D">3D</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Web_Design">Web Design & Development</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Design Service -->
        <div class="section section-padding" id="Graphics">
            <div class="container">
                <div class="section-heading heading-left">
                    <h3 class="title">Graphics Design</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-29.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('logoBanding')}}">Logo &amp; Branding</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-47.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('iconDesign')}}">Custom Icon Design</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-27.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('StaticGraphicsDesign')}}">Static Graphics Design</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-28.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('DynamicGraphicsDesign')}}">Dynamic Graphics Design</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-4.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('GraphicsPrint')}}">Graphics / Print Design</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Service -->
        <div class="section section-padding bg-color-light" id="Event">
            <div class="container">
                <div class="section-heading heading-left">
                    <h3 class="title">Event Activation</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-31.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('corporateEvent')}}">Corporate Event</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-32.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('socialEvent')}}">Social Event</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-33.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('culturalEvent')}}">Cultural Event</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Online Marketing Service -->
        <div class="section section-padding" id="Digital">
            <div class="container">
                <div class="section-heading heading-left">
                    <h3 class="title">Digital Marketing</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-34.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('marketingPlanning')}}">Marketing Planning</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-35.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('facebook')}}">Facebook Marketing</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-36.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('youtube')}}">Youtube marketing</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-37.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('influential')}}">Influential Marketing</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-38.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('googleAds')}}">Google Ads</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-38.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('seo')}}">SEO</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Production Services -->
        <div class="section section-padding bg-color-light" id="Production">
            <div class="container">
                <div class="section-heading heading-left">
                    <h3 class="title">Production</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-39.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('tvc')}}">TVC / OVC / RDC / Av</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-40.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('photography')}}">Photography </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-41.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('printProduction')}}">Print Production</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 3D Services -->
        <div class="section section-padding" id="3D">
            <div class="container">
                <div class="section-heading heading-left">
                    <h3 class="title">3D</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-43.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('modeling')}}">3D modeling</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-43.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('vfx')}}">CG / VFX</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-44.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('animation')}}">Animation</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-44.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('architectural')}}">Architectural Design</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-44.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('interior')}}">Interior Design</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-44.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('landscape')}}">Landscape Design</a></h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--  Web_Design Services -->
        <div class="section section-padding bg-color-light" id="Web_Design">
            <div class="container">
                <div class="section-heading heading-left">
                    <h3 class="title">Web Design & Development</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-45.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('domainHosting')}}">Domain & Hosting</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-46.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('web')}}">Web Design & Development</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{asset('frontend/assets/media/icon/icon-47.png')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="{{route('app')}}">App Design & Development</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
{{--    @include('web-views.partials._together')--}}
@endsection
