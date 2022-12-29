@extends('web-views.services.components.masterService')
@section('title')
    Google Ads
@endsection
@section('description')
    The best way to get Google Ads will be provided by our team. We do strategic research over our client's demand and find suitable as well as beneficiary Ads over Google.
@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/graphics/marketing.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')
    <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Google ads  Optimization</span></h3>
            <p>
                These types of ads also called a pay-per-click. For every click, the advertiser gets new leads and paid to Google.
                Google ads are very much popular as digital marketing services. Because it creates brand awareness.
                <br><br>
                The ads can be measured through PPC metrics.
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/marketing/ads.png')}}" alt="Thumbnail">
        </div>
    </div>

    <div class="process-work content-reverse " data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Types of Influential Marketing</span></h3>
            <p>
                Google Advertisement is the web-based advertisement platform introduced by Google.
                Using this platform sponsors can show their ads about products, services, offers, posts, video content, versatile applications etc.
                Measuring clicking rate sponsor paid to google.
                We give the following Corporate Event services from our company:
            </p><br>
            <ul class="list-style angle">
                <li>Search Ads </li>
                <li>Display Ads</li>
                <li>YouTube Marketing </li>
                <li>Universal App</li>
            </ul>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/marketing/ads_marking.png')}}" alt="Thumbnail">
        </div>
    </div>
@endsection
