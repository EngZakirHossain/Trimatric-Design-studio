@extends('layouts.front-end.app')
@section('client')active @endsection
@section('title') Client @endsection
@section('content')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                <h1 class="title h2">Our Clients</h1>
                <p>We work closely with our clients in order to deliver the best results</p>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=       Clients  Area Start        =-->
    <!--=====================================-->
    <!--=           Client  Area Start        =-->

    <section class="section section-padding bg-color-dark">
        <div class="container">
            <div class="section-heading heading-light-left">
                <span class="subtitle">Top Clients</span>
                <h2 class="title">We Built Solutions for</h2>
                <p>We stand up for what we believe in and put people first. We lead with kindness and speak with respectful candor.</p>
            </div>
            <div class="row">
                @foreach($clients as $key=>$row)
                    <div class="col-lg-2 col-4" data-sal="slide-up" data-sal-duration="500">
                        <div>
                            <img onerror="this.src='{{asset('backend/assets/images/users/avatar-2.jpg')}}'"
                                 src="{{asset('storage/backend/clients')}}/{{$row['logo']}}"  alt="{{$row->name}}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=====================================-->

    <!--=====================================-->
{{--    @include('web-views.partials._together')--}}
@endsection
