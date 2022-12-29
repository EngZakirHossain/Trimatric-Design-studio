@extends('layouts.front-end.app')
@section('portfolio')active @endsection
@section('title') Service Profile Details @endsection
@section('content')

    <div class="breadcrum-area breadcrumb-banner single-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                        <h1 class="title h2">{{$serviceProfileDetails->name}}</h1>
                        <p> {{$serviceProfileDetails->details}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @php
        $serviceName = \App\Model\Service::where('id',$serviceProfileDetails->serviceName)->first();
        $profileDetails = \App\Model\ProfileDetails::where('profile_id',$serviceProfileDetails->id)->first();
    @endphp
    @if($profileDetails != null)
    <section class="section section-padding-equal">
        <div class="container">
            <div class="about-expert">
                <div class="thumbnail">
                    @php
                        $values = explode("|",$profileDetails->images_video);
                    @endphp
                    @foreach($values as $row)
                        <img style="padding-bottom: 20px" src="{{asset('storage/backend/profile')}}/{{$serviceName->name}}/{{$serviceProfileDetails->name}}/profileDetails/{{$row}}" alt="Thumbnail">
                    @endforeach
                    @if($profileDetails->youtube_link !=null)
                    <iframe width="100%" height="600px" src="{{$profileDetails->youtube_link}}" frameborder="0" allowfullscreen></iframe>
                    @else
                    @endif
                </div>
            </div>
        </div>
    </section>
    @empty(!$profileDetails->before_images)
    <section class="section section-padding-equal">
        <div class="thumbnail">
            <figure class="cd-image-container">
                <img style="padding-bottom: 20px" src="{{asset('storage/backend/profile')}}/{{$serviceName->name}}/{{$serviceProfileDetails->name}}/profileDetails/{{$profileDetails->before_images}}" alt="Thumbnail">
                <span class="cd-image-label" data-type="original">Before</span>
                <div class="cd-resize-img"> <!-- the resizable image on top -->
                    <img style="padding-bottom: 20px" src="{{asset('storage/backend/profile')}}/{{$serviceName->name}}/{{$serviceProfileDetails->name}}/profileDetails/{{$profileDetails->after_images}}" alt="Thumbnail">
                    <span class="cd-image-label" data-type="modified">After</span>
                </div>

                <span class="cd-handle"></span>
            </figure>
        </div>
    </section>
    @endempty
    @empty(!$profileDetails->render_link)

    <section class="section section-padding-equal">
        <div class="container">
            <div class="section-heading">
                <span class="subtitle">Sketch fab </span>
                <h3 class="title">The Render Video </h3>
            </div>
            <div class="about-expert">
                <iframe style="width:100%;height:600px" title="JAWA Motorcycle" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true"
                        allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share
                        src="{{$profileDetails->render_link}}">
                </iframe>
            </div>
        </div>
    </section>
    @endempty
    @else
        <section class="section section-padding-equal">
            <div class="container">
                <div class="about-expert">
                    <div class="thumbnail">
                      <h1>No Profile Found</h1>

                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('frontend/assets/beforeAfter/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/beforeAfter/css/style.css')}}">
    <script src="{{asset('frontend/assets/beforeAfter/css/js/modernizr.js')}}"></script>
@endsection
@section('js')
    <script src="{{asset('frontend/assets/beforeAfter/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('frontend/assets/beforeAfter/js/jquery.mobile.custom.min.js')}}"></script>
    <script src="{{asset('frontend/assets/beforeAfter/js/main.js')}}"></script>
@endsection




