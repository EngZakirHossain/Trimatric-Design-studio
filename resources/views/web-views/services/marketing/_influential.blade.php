@extends('web-views.services.components.masterService')
@section('title')
    Influential Marketing
@endsection
@section('description')
    You may have seen many influencers and famous faces on social media and thought of using their presence in your product or company. We can provide you with this facility. We contact the influencers for getting exposure for the brand and creating awareness through Facebook, YouTube, Twitter, Instagram and all other social platforms.
@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/graphics/marketing.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')
    <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Social Media Influential Marketing</span></h3>
            <p>
                Social media marketing can be defined as the platform where brand building, sales conversion, audience engagement, and collect website traffic becomes possible.
                <br><br>
                It also involves content creation, raising followers, analyzing results and run social media ads.
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/marketing/social.png')}}" alt="Thumbnail">
        </div>
    </div>

    <div class="process-work content-reverse " data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Types of Influential Marketing</span></h3>
            <p>
                We share the responsibility of our clients to organize any sort of Influential Marketing.
                We give the following Corporate Event services from our company:
            </p><br>
            <ul class="list-style angle">
                <li>Facebook Influential Marketing</li>
                <li>YouTube Influential Marketing </li>
                <li>Twitter Influential Marketing</li>
                <li>Instagram Influential Marketing </li>
            </ul>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/marketing/influencer.png')}}" alt="Thumbnail">
        </div>
    </div>
@endsection
