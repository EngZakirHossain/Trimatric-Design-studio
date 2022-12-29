@extends('web-views.services.components.masterService')
@section('title')
    Domain and Hosting
@endsection
@section('description')
    A personal domain is important to secure business and exposure online.
    We are here to buy and handle domains for your company at the least rate in the market.

@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/web/website.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')
    <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;"> Optimized Control Panel</span></h3>
            <p>
                We provide cPanel to our clients and cPanel is a well optimized control panel.
                <br><br>
                Our web experts include everything from a simple Content Management System to creative web design management. We provide beautiful design and engaging content that your site design and development will catch your audience to visit every corner of your website.
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/web/optimizing.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work content-reverse" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;"> Server Level Protection</span></h3>
            <p>
                We maintain strong protection form server. Protected server, safe website
                <br><br>
                Which will make your website ranked top and you will get found easily.
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/web/sever.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work " data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">SSD Web Hosting</span></h3>
            <p>
                SSD is a storage device technology that uses integrated circuits (IC) assembles to store data for computer. It has no moving components to read or write data like the older FDD, HDD and other optical character recognition(OCR) devices.
                <br><br>
                SSD’s are much more energy efficient and space saving.
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/web/hosting.png')}}" alt="Thumbnail">
        </div>
    </div>

    <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">WHAT MAKES OUR HOSTING SERVICE BEST?</span></h3>
            <p>
                We share the responsibility of our clients to organize any sort of Corporate Event.
                We give the following Corporate Event services from our company:
            </p><br>
            <ul class="list-style angle">
                <li>30 Day Money-back Guarantee</li>
                <li> Weekly Backups recover </li>
                <li>Server Level Protection </li>
                <li>Optimized Control Panel </li>
                <li>Friendly Support</li>
                <li>Optimized Software</li>
                <li>Auto Updates</li>
            </ul>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/web/webservice.png')}}" alt="Thumbnail">
        </div>
    </div>
@endsection
