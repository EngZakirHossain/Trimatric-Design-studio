@extends('web-views.services.components.masterService')
@section('title')
    Corporate Event
@endsection
@section('description')
    We share the responsibility of our clients to organize any sort of Corporate Event.
    We organize seminars, conferences, Trade shows, Incentive programs, Appreciation Events, Company milestone events, Product launch events and more.
    For that, we prepare a budget, find locations, invite famous personal, arrange volunteers and most importantly ask for feedback
@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/graphics/eventActivity.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')
    <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Corporate Event Management</span></h3>
            <p>
                We provide professional event management services, project scheduling, meeting, and brand activation events, show organizing, product launching events, wedding planning events, entertainment, exhibition stall construction, Exhibition stand Fabrication, exhibition booth production and location procurement.
                <br><br>
                Often well-known as trade meetings & conventions, business event management firms as well as sporting event production firms.
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/event/cultaral.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Types of Corporate Event Work</span></h3>
            <p>
                We share the responsibility of our clients to organize any sort of Corporate Event.
                We give the following Corporate Event services from our company:
            </p><br>
            <ul class="list-style angle">
                <li>Seminars</li>
                <li> Conferences</li>
                <li>Trade shows</li>
                <li>Incentive programs </li>
                <li>Appreciation Events </li>
                <li>Company milestone events</li>
                <li>Product launch events and more .</li>
            </ul>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/event/event.png')}}" alt="Thumbnail">
        </div>
    </div>
@endsection
