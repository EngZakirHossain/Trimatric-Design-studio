@extends('web-views.services.components.masterService')
@section('title')
    Cultural Event
@endsection
@section('description')
    In the land of culture, if you are in need to organize the cultural event, whether it is big or small, we will do this for you.
    Special day celebrations, concerts, competitions, rally will be organized with extensive fieldwork
@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/graphics/eventActivity.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')
    <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;"> Cultural Event Management</span></h3>
            <p>
                We provide professional event management services, project scheduling, meeting, and brand activation events, show organizing, product launching events, wedding planning events, entertainment, exhibition stall construction, Exhibition stand Fabrication, exhibition booth production and location procurement.
                <br><br>
                Often well-known as trade meetings & conventions, business event management firms as well as sporting event production firms.
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/event/Cultural_event.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Types of  Cultural Event Work</span></h3>
            <p>
                We share the responsibility of our clients to organize any sort of Corporate Event.
                We give the following Corporate Event services from our company:
            </p><br>
            <ul class="list-style angle">
                <li>Award Show Organisers</li>
                <li> Anniversary Party Planning</li>
                <li>Reunion Event Planner </li>
                <li>Fashion Show Organizer Bangladesh  </li>
                <li>Live Music Show & Concert Organizer </li>
                <li>Laser Show & Fireworks</li>
            </ul>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/event/Cultural.png')}}" alt="Thumbnail">
        </div>
    </div>
@endsection
