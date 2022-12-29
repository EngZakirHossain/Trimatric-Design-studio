@extends('web-views.profile-details.components.masterService')
@section('title')
    Robot Modeling
@endsection
@section('description')
    This model made in maya. Rendering done on blender. Textured in substance <painter class=""></painter>
@endsection

@section('project_details')
    <section class="section section-padding-equal">
        <div class="container">
            <div class="about-expert">
                <div class="thumbnail">
                    <img style="padding-bottom: 20px" src="{{asset('frontend/assets/media/project/3D/robot/01.jpg')}}" alt="Thumbnail">
                    <img style="padding-bottom: 20px" src="{{asset('frontend/assets/media/project/3D/robot/02.jpg')}}" alt="Thumbnail">
                    <img style="padding-bottom: 20px" src="{{asset('frontend/assets/media/project/3D/robot/03.jpg')}}" alt="Thumbnail">
                    <iframe width="100%" height="600px" src="https://www.youtube.com/embed/KGof75uwwPo" frameborder="0" allowfullscreen></iframe>

                    <img style="padding-bottom: 20px" src="{{asset('frontend/assets/media/project/3D/robot/04.jpg')}}" alt="Thumbnail">
                    <img style="padding-bottom: 20px" src="{{asset('frontend/assets/media/project/3D/robot/05.jpg')}}" alt="Thumbnail">
                    <img style="padding-bottom: 20px" src="{{asset('frontend/assets/media/project/3D/robot/06.jpg')}}" alt="Thumbnail">
                    <img style="padding-bottom: 20px" src="{{asset('frontend/assets/media/project/3D/robot/07.jpg')}}" alt="Thumbnail">
                    <img style="padding-bottom: 20px" src="{{asset('frontend/assets/media/project/3D/robot/08.jpg')}}" alt="Thumbnail">
                </div>
            </div>
        </div>
    </section>

    <section class="section section-padding-equal">
        <div class="thumbnail">
            <figure class="cd-image-container">
                <img src="{{asset('frontend/assets/media/project/3D/robot/02.jpg')}}" alt="Original Image">
                <span class="cd-image-label" data-type="original">Before</span>

                <div class="cd-resize-img"> <!-- the resizable image on top -->
                    <img src="{{asset('frontend/assets/media/project/3D/robot/08.jpg')}}" alt="Modified Image">
                    <span class="cd-image-label" data-type="modified">After</span>
                </div>

                <span class="cd-handle"></span>
            </figure>
        </div>
    </section>

    <section class="section section-padding-equal">
        <div class="container">
            <div class="section-heading">
                <span class="subtitle">Sketch fab </span>
                <h3 class="title">The Render Video </h3>
            </div>
            <div class="about-expert">
                <iframe style="width:100%;height:600px" title="JAWA Motorcycle" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/a8b353f310a34fa18c8fd785c94872d5/embed"> </iframe>
            </div>
        </div>
    </section>
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

