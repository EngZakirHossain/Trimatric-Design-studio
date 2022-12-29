@extends('web-views.services.components.masterService')
@section('title')
    Facebook Marketing
@endsection
@section('description')
    For your company, we can provide marketing over Facebook which includes boosting, content writing, creative making, static analysis, audience selection, short video and many more.
@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/graphics/marketing.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')
    <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Content Writing</span></h3>
            <p>
                We have worked with the major clients of Bangladesh and have built leading brands in the digital space.
                <br><br>
                Accelerate your revenue and gain recognition in the market.
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/marketing/writing.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;"> Static Analysis & Boosting</span></h3>
            <p>
                Digital marketing-service-skilled professionals use paid advertisement which appears in the search engine results pages
                <br><br>
                It also consider as the most affordable marketing approach than other approaches.
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/marketing/boosting.png')}}" alt="Thumbnail">
        </div>
    </div>

    <div class="process-work " data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Types of Facebook Marketing</span></h3>
            <p>
                We share the responsibility of our clients to organize any sort of Corporate Event.
                We give the following Corporate Event services from our company:
            </p><br>
            <ul class="list-style angle">
                <li>Post Boosting</li>
                <li> Content Writing </li>
                <li>Content Static Analysis </li>
                <li>Audience Selection </li>
                <li>Short Product Video </li>
            </ul>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/marketing/fb.png')}}" alt="Thumbnail">
        </div>
    </div>
@endsection
