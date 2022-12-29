@extends('layouts.front-end.app')
@section('team')active @endsection
@section('title') Team @endsection
@section('content')
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                <h1 class="title h2">Meet talent &amp; experience</h1>
                <p>Grow your business  by awesomely designed and Ideas.</p>
            </div>
        </div>

    </div>
    <!--=====================================-->
    <!--=       Experts  Area Start        =-->
    <!--=====================================-->
    <section class="section section-padding expert-counterup-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-heading heading-left">
                        <h2>What Makes Us Special</h2>
                        <p class="mb--50">Our Brilient Team make us more Special and more confident to Serve Quality of Work .</p>
                        <a href="{{route('findUs')}}" class="axil-btn btn-large btn-fill-primary">Careers</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-xl-1">
                    <div class="row" id="no-equal-gallery">
                        <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="counterup-progress counterup-style-2 active">
                                <div class="icon">
                                    <i class="fas fa-calendar-alt fa-4x"></i>
                                </div>
                                <div class="count-number h2">
                                    <span class="number count">10</span>
                                    <span class="symbol">+</span>
                                </div>
                                <h6 class="title">Years of operation</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 mt--90 mt_md--0 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="counterup-progress counterup-style-2">
                                <div class="icon">
                                    <i class="fa fa-list-alt fa-4x"></i>
                                </div>
                                <div class="count-number h2">
                                    <span class="number count">100</span>
                                    <span class="symbol">+</span>
                                </div>
                                <h6 class="title">Projects delivered</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="counterup-progress counterup-style-2">
                                <div class="icon">
                                    <i class="fas fa-users fa-4x"></i>
                                </div>
                                <div class="count-number h2">
                                    <span class="number count">200</span>
                                    <span class="symbol">+</span>
                                </div>
                                <h6 class="title">Specialist</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=           Team  Area Start        =-->
    <!--=====================================-->
    <section class="section section-padding bg-color-dark pb--70 pb_lg--20 pb_md--0">
        <div class="container">
            <div class="section-heading heading-light">
                <span class="subtitle">Our values</span>
                <h2 class="title mb--50">Meet Our Team</h2>
                <p>Our Team Make Us Confident to Serve Quality Work to our Client.</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid active">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{asset('frontend/assets/media/team/1.1.jpg')}}" alt="Team Member">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">Syed Mosharraf Ali</a></h4>
                            <span class="designation">Founder & Chief Executive Officer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{asset('frontend/assets/media/team/9.1.jpg')}}" alt="Team Member">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">YUSUF NABI SUMON</a></h4>
                            <span class="designation">Chief Administration & Finance Officer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{asset('frontend/assets/media/team/4.1.jpg')}}" alt="Team Member">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">MD. RUHUL KUDDUS</a></h4>
                            <span class="designation">Chief Business Development Officer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{asset('frontend/assets/media/team/7.7.jpg')}}" alt="Team Member">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">SHAHRIAR MAHMOOD</a></h4>
                            <span class="designation">Factory Head & Project Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{asset('frontend/assets/media/team/2.2.jpg')}}" alt="Team Member">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">NAZIR MORSHED</a></h4>
                            <span class="designation">Chief Operation Officer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{asset('frontend/assets/media/team/3.3.jpg')}}" alt="Team Member">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">AHMADUL KABIR</a></h4>
                            <span class="designation">Chief Procurement Officer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{asset('frontend/assets/media/team/8.1.jpg')}}" alt="Team Member">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">MD. SHOHEL RANA</a></h4>
                            <span class="designation">Manager | HR & Admin</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{asset('frontend/assets/media/team/5.5.jpg')}}" alt="Team Member">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">ABDULLAH AL ALIF</a></h4>
                            <span class="designation">Sr. Executive | IT </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-color-white pb_lg--20 pb_md--0">
        <div class="row">
            <img src="{{asset('frontend/assets/media/team/team-all.png')}}" alt="team">
        </div>
    </section>
    <!--=====================================-->
    <!--=           About Work  Area Start        =-->
    <!--=====================================-->
    <section class="section section-padding-equal">
        <div class="container">
            <div class="section-heading">
                <span class="subtitle">TVC Commercial </span>
                <h3 class="title">The Null Juice </h3>
            </div>
            <div class="about-expert">
                <div class="thumbnail">
                    <img src="{{asset('frontend/assets/media/about/about-1.png')}}" alt="Thumbnail">
                    <div class="popup-video">
                        <a href="https://www.youtube.com/watch?v=a4JAJWjmIZM" class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                    </div>
                </div>
                <ul class="frame-shape">
                    <li class="shape shape-1"><img src="{{asset('frontend/assets/media/about/frame-1.png')}}" alt="Frame"></li>
                    <li class="shape shape-2"><img src="{{asset('frontend/assets/media/about/frame-2.png')}}" alt="Frame"></li>
                </ul>
            </div>
        </div>
    </section>

@endsection
