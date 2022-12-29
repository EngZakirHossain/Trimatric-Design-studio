@extends('web-views.services.components.masterService')
@section('title')
    Social Event
@endsection
@section('description')
    In the recent hype of new-normal if you need any social media event, we will help you with arranging that over any of the mediums to connect all over the world.
    A good connection, advanced sound and visual system and paid streaming service will make your event more appropriate
@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/graphics/eventActivity.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')
    <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Social Event Management</span></h3>
            <p>
                In the recent hype of new-normal if you need any social media event, we will help you with arranging that over any of the mediums to connect all over the world.
                <br><br>
                Often well-known as trade meetings & conventions, business event management firms as well as sporting event production firms.
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/event/social.png')}}" alt="Thumbnail">
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
                <li>Road shows, Canter Activities</li>
                <li> Sport Management Companies</li>
                <li>Wedding planner</li>
                <li>Special Day programs </li>
                <li>Awareness Campaign </li>
                <li>Company milestone events</li>
                <li>Product launch events and more .</li>
            </ul>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/event/socialEvent.png')}}" alt="Thumbnail">
        </div>
    </div>
@endsection
