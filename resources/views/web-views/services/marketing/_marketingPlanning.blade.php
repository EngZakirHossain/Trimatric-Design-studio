@extends('web-views.services.components.masterService')
@section('title')
    Marketing Planning
@endsection
@section('description')
    In the case of marketing planning, we set up objectives for marketing activity and of determining and scheduling the steps necessary to achieve your goal.
    It will govern the survival, growth and prosperity of your company in a competitive and ever-changing environment.
@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/graphics/marketing.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')
    <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Create Awareness</span></h3>
            <p>
                We have worked with the major clients of Bangladesh and have built leading brands in the digital space.
                <br><br>
                Accelerate your revenue and gain recognition in the market.
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/marketing/planing.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;"> Make Engagement</span></h3>
            <p>
                Everybody loves to maximize their revenue and minimize costs. SEO can do wonders to make the task.
                <br><br>
                It also consider as the most affordable marketing approach than other approaches.
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/marketing/engagement.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;"> Convert to Customers</span></h3>
            <p>
                The website presents your product or service to transform visitors into potential customers.
                Using digital marketing services, platforms and tools generate potential lead and drive high quality traffic.
                <br><br>
                It also consider as the most affordable marketing approach than other approaches.
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/marketing/customer.png')}}" alt="Thumbnail">
        </div>
    </div>
@endsection
