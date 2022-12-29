@extends('web-views.services.components.masterService')
@section('title')
    App Design and Development
@endsection
@section('description')
    For Android and IOS Application design, we put our best with expert app creators over the country to make it user-friendly and sustainable.
    Already made applications can also be taken care of for development.
@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/web/website.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')
    <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Mobile App Development</span></h3>
            <p>
                Our experts create elaborate apps for mobile platforms such as IOS and Android.
                <br><br>
                Start-up to big enterprise can shape their ideas into products.
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/web/design.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work content-reverse" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;"> Mobile App Design</span></h3>
            <p>
                Mobile App Design who specialize in UI/UX design optimize your website for the best user experience with customized layouts
                <br><br>
                Start-up to big enterprise can shape their ideas into products.
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/web/app.jpg')}}" alt="Thumbnail">
        </div>
    </div>


    <div class="process-work" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Types of App Design and Development</span></h3>
            <p>
                We develop with a step by step process that involves test trials at every step to get the task done with precision and excellence.
                Our professional developer team design & develop Websites which is search engine, user and mobile-friendly and incorporates specific
                search engine guidelines both in the design as well as functionality.
                We give the following Corporate Event services from our company:
            </p><br>
            <ul class="list-style angle">
                <li>Custom business apps</li>
                <li>Smart Electronic Commerce </li>
                <li>Engaging Microsites</li>
                <li>Custom App Design </li>
            </ul>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/web/appdevelopment.png')}}" alt="Thumbnail">
        </div>
    </div>
@endsection
