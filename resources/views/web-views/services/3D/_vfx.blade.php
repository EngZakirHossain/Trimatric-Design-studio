@extends('web-views.services.components.masterService')
@section('title')
    CG / VFX
@endsection
@section('description')
    We serve the facility of Computer-Generated Images (CG) and Visual Effect (VFX) for post-production purposes
@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/graphics/3d.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')
    <div class="process-work " data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Computer-Generated Images</span></h3>
            <p>
                Computer-generated imagery is the application of computer graphics to create or contribute to images in art,
                printed media, video games, simulators, computer animation and VFX in films, television programs, shorts, commercials, and videos.
            </p><br>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/3d/cg.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work content-reverse" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Visual Effect (VFX) </span></h3>
            <p>
                Visual effects is the process by which imagery is created or manipulated outside the context of a live-action shot in filmmaking and video production.
                The integration of live-action footage and other live-action footage or CGI elements to create realistic imagery is called VFX.
            </p><br>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/3d/vfx.png')}}" alt="Thumbnail">
        </div>
    </div>
@endsection
