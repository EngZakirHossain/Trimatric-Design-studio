@extends('layouts.front-end.app')
@section('portfolio')active @endsection
@section('title') Profile @endsection
@section('content')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                <h1 class="title h2">Our Projects</h1>
                <p>A quick view of industry specific problems solved with design by the awesome team at TDS.</p>
            </div>
            <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                <img class="paralax-image" src="{{asset('frontend/assets/media/breadcrumb/protfolio.png')}}" alt="Illustration">
            </div>
        </div>
{{--        <ul class="shape-group-8 list-unstyled">--}}
{{--            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">--}}
{{--                <img src="{{asset('frontend/assets/media/others/bubble-9.png')}}" alt="Bubble">--}}
{{--            </li>--}}
{{--            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">--}}
{{--                <img src="{{asset('frontend/assets/media/others/bubble-20.png')}}" alt="Bubble">--}}
{{--            </li>--}}
{{--            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">--}}
{{--                <img src="{{asset('frontend/assets/media/others/line-4.png')}}" alt="Line">--}}
{{--            </li>--}}
{{--        </ul>--}}
    </div>
    <!--=====================================-->
    <!--=       Projects  Area Start        =-->
    <!--=====================================-->
    @include('web-views.partials._project')
    <!--=====================================-->
{{--    @include('web-views.partials._together')--}}
@endsection
