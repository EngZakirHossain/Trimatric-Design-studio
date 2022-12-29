@extends('layouts.front-end.app')
@section('about')active @endsection
@section('title') About @endsection
@section('content')
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                <h1 class="title h2">One of the <strong style="color: #E31C26">FASTEST GROWING</strong> Agency</h1>
                <p style="text-align:justify!important">
                    TDS is a solution for resolving clients' critical and complex problems. Our primary focus is on innovation, meritocracy, and the proper application of modern technology.
                    We offer private, public, and third-party connections to the market and startups.
                </p>
            </div>
            <div class="banner-thumbnail thumbnail-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                <img src="{{asset('frontend/assets/media/breadcrumb/about.png')}}" alt="Illustration">
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{asset('frontend/assets/media/others/bubble-9.png')}}" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{asset('frontend/assets/media/others/bubble-22.png')}}" alt="Bubble">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="{{asset('frontend/assets/media/others/line-4.png')}}" alt="Line">
            </li>
        </ul>
    </div>
    <!--=====================================-->
    <!--=       About  Area Start        =-->
    <!--=====================================-->
    <section class="section section-padding case-study-featured-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="case-study-featured-thumb text-start">
                        <img src="{{asset('frontend/assets/media/about/who.gif')}}" alt="travel">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="case-study-featured">
                        <div class="section-heading heading-left">
                            <span class="subtitle">Who we are</span>
                            <h2 class="title">We're <strong style="color: #E31C26">Creative</strong>, <strong style="color: #E31C26">Expert</strong> and <strong style="color: #E31C26">Experienced</strong></h2>
                            <p>
                                Our skill and experience include a bunch of business expertise, that are used to look at the business from different and creative angles, using the right tools to assess it and develop a solid plan.
                            </p>
                            <p>
                                We look forward to every marketing challenges in the web world with great passion.
                            </p>
                            <a href="{{route('findUs')}}" class="axil-btn btn-fill-primary btn-large">Contract Us</a>
                        </div>
                        <div class="case-study-counterup">
                            <div class="single-counterup">
                                <h2 class="count-number">
                                    <span class="number count">10</span>
                                    <span class="symbol">+</span>
                                </h2>
                                <span class="counter-title">Years on the market</span>
                            </div>
                            <div class="single-counterup">
                                <h2 class="count-number">
                                    <span class="number count">100</span>
                                    <span class="symbol">+</span>
                                </h2>
                                <span class="counter-title">Projects delivered so far</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=      About  Quality Area Start    =-->
    <!--=====================================-->
    <section class="section section-padding bg-color-dark pb--80 pb_lg--40 pb_md--20">
        <div class="container">
            <div class="section-heading heading-light-left mb--100">
                <span class="subtitle"></span>
                <h2 class="title">Our <strong style="color: #FFA627">Mission</strong> & <strong style="color: #FFA627">Vision</strong></h2>
                <p class="opacity-50" style="text-align:justify!important">Our primary focus is on innovation, meritocracy, and the proper application of modern technology. We offer private, public, and third-party connections to the market and startups.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-quality active">
                        <h3 class="sl-number"><img src="https://img.icons8.com/external-flat-geotatah/64/000000/external-competition-gamification-flat-flat-geotatah-2.png"/></h3>
                        <h5 class="title">Our Mission</h5>
                        <p style="text-align:justify!important">TDS is a 360-degree creative agency. TDS is guided by the mission of resolving complicated problems while keeping people and the future in mind. We provide a complete marketing and communications infrastructure. Campaign assistance, product creation, event management, media purchasing, communication support, printing, digital development, and research are all managed by experienced staff.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-quality">
                        <h3 class="sl-number"><img src="https://img.icons8.com/fluency/48/000000/vision.png"/></h3>
                        <h5 class="title">Our Vision</h5>
                        <p style="text-align:justify!important">As planned, TDS is going forward with the solving problems of our clients which also shows a clear path for the future. It will help the clients to have full marketing support and communicating passage. A vivid descriptive analysis will be given to them in various fields including campaign assistance, product creation, event management, media purchasing, communication support, printing, digital development, and research..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=       About Team  Area Start      =-->
    <!--=====================================-->
    <section class="section-padding-equal">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                    <div class="about-team">
                        <div class="thumbnail">
                            <img src="{{asset('frontend/assets/media/about/team.gif')}}" alt="thumbnail">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                    <div class="about-team">
                        <div class="section-heading heading-left">
                            <span class="subtitle">Our Team</span>
                            <h2>Alone we can do so little, <strong style="color:#E31C26">Together</strong> we can do so much.</h2>
                            <p style="text-align:justify!important">Through pro-bono client work, days of service and philanthropic board involvement, Starcommers are community-minded and ready to give back.</p>
                            <a href="{{route('team')}}" class="axil-btn btn-large btn-fill-primary">Our Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=       Work Process Area Start     =-->
    <!--=====================================-->
    <!--=====================================-->
    <section class="section section-padding-equal">
        <div class="container">
            <div class="section-heading">
                <span class="subtitle">The Glorious History of</span>
                <h3 class="title">Nur Mohammad Sheikh </h3>
            </div>
            <div class="about-expert">
                <div class="thumbnail">
                    <img src="{{asset('frontend/assets/media/about/about-1.png')}}" alt="Thumbnail">
                    <div class="popup-video">
                        <a href="https://www.youtube.com/watch?v=FiCgwjlKBP0" class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                    </div>
                </div>
                <ul class="frame-shape">
                    <li class="shape shape-1"><img src="{{asset('frontend/assets/media/about/frame-1.png')}}" alt="Frame"></li>
                    <li class="shape shape-2"><img src="{{asset('frontend/assets/media/about/frame-2.png')}}" alt="Frame"></li>
                </ul>
            </div>
        </div>
    </section>
    <!--=====================================-->
@endsection
