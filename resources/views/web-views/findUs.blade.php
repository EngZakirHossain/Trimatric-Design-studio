@extends('layouts.front-end.app')
@section('findUs')active @endsection
@section('title') Find Us @endsection
@section('content')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                <h1 class="title h2">Find Us</h1>
                <p>We work closely with you . Contract with us for the best results</p>
            </div>
            <div class="banner-thumbnail thumbnail-2" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                <img class="paralax-image" src="{{asset('frontend/assets/media/breadcrumb/contact.gif')}}" alt="Illustration">
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
        </ul>
    </div>
    <!--=====================================-->
    <!--=       Contact  Area Start        =-->
    <!--=====================================-->
    <section class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-form-box shadow-box mb--30">
{{--                        <span class="subtitle">Grow your business with TDS!</span>--}}
                        <h3 class="title">Get Your Free Proposal</h3>
                        <form method="POST" action="{{route('sendMessage')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label>Phone *</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                            <div class="form-group mb--40">
                                <label>How can we help you? *</label>
                                <textarea name="message" id="contact-message" class="form-control textarea" cols="30" rows="4" required></textarea>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="axil-btn btn-fill-primary btn-fluid btn-primary">Get In Touch</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1">
                    <div class="contact-info mb--100 mb_md--10 mt_md--0">
                        <h4 class="title">Address</h4>
                        <h4 class="address">Boro Moghbazar, 125 Mezonet Building, Ramna Century Ave, Dhaka 1217</h4>
                    </div>
                    <div class="contact-info mb--10">
                        <h4 class="title">Phone</h4>
                        <h4 class="phone-number"><a href="tel:02-48321385">02-48321385</a></h4><br><br>
                        <h4 class="title">Email</h4>
                        <h4 class="phone-number"><a href="mailto:info@trimatric.com">info@trimatric.com</a></h4>
                    </div>
                </div>
            </div>
        </div>
{{--        <ul class="list-unstyled shape-group-12">--}}
{{--            <li class="shape shape-1"><img src="{{asset('frontend/assets/media/others/bubble-2.png')}}" alt="Bubble"></li>--}}
{{--            <li class="shape shape-2"><img src="{{asset('frontend/assets/media/others/bubble-1.png')}}" alt="Bubble"></li>--}}
{{--            <li class="shape shape-3"><img src="{{asset('frontend/assets/media/others/circle-3.png')}}" alt="Circle"></li>--}}
{{--        </ul>--}}
    </section>

    <!--=====================================-->
    <!--=       Location  Area Start        =-->
    <!--=====================================-->
    <section class="section section-padding bg-color-dark overflow-hidden">
        <div class="container">
            <div class="section-heading heading-light-left">
                <span class="subtitle">Find Us</span>
                <h2 class="title">Our office</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="office-location">
                        <div class="thumbnail">
                            <img src="{{asset('frontend/assets/media/others/tds.png')}}" alt="Office">
                        </div>
                        <div class="content">
                            <h4 class="title">Head-Office</h4>
                            <p>Boro Moghbazar, 125 Mezonet Building, Ramna Century Ave, Dhaka 1217</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="office-location">
                        <div class="thumbnail">
                            <img src="{{asset('frontend/assets/media/others/trimatric.png')}}" alt="Office">
                        </div>
                        <div class="content">
                            <h4 class="title">Trimatric Architects & Engineers</h4>
                            <p>Boro Moghbazar, 125 Mezonet Building, Ramna Century Ave, Dhaka 1217</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="office-location">
                        <div class="thumbnail">
                            <img src="{{asset('frontend/assets/media/others/indecor.png')}}" alt="Office">
                        </div>
                        <div class="content">
                            <h4 class="title">Indecor</h4>
                            <p>Holding No: H-79, Block - J, Dhaka 1213</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="office-location">
                        <div class="thumbnail">
                            <img src="{{asset('frontend/assets/media/others/trimatricAi.png')}}" alt="Office">
                        </div>
                        <div class="content">
                            <h4 class="title">Trimatric AI</h4>
                            <p>7/8,Ameena dream park, Dhaka 1219</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        <ul class="shape-group-11 list-unstyled">--}}
{{--            <li class="shape shape-1"><img src="{{asset('frontend/assets/media/others/line-6.png')}}" alt="line"></li>--}}
{{--            <li class="shape shape-2"><img src="{{asset('frontend/assets/media/others/circle-3.png')}}" alt="line"></li>--}}
{{--        </ul>--}}
    </section>
    <!--=====================================-->
@endsection
