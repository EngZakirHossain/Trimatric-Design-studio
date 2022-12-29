@extends('web-views.services.components.masterService')
@section('title')
    TVC / OVC / RDC / AV
@endsection
@section('description')
    We have a professional team of videography, photography, cinematography, editing, choreography and post-production team to help you provide TVC/OVC/RDC or AV.
@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/graphics/production.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')
    <div class="process-work" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Types of Media Production Services</span></h3>
            <p>
                We have a professional team of videography, photography, cinematography, editing, choreography and post-production team to help you provide TVC/OVC/RDC or AV.
                <br><br>We give the following Media Production Services from our company:
            </p><br>
            <ul class="list-style angle">
                <li>TVC </li>
                <li>OVC  </li>
                <li>RDC </li>
                <li>AV  </li>
            </ul>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/tvs/tvs.png')}}" alt="Thumbnail">
        </div>
    </div>
    <section class="section section-padding-equal pt--200 pt_md--80 pt_sm--60">
        <div class="container-fluid plr--30">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/tvs/tvs/01.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/tvs/tvs/02.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/tvs/tvs/04.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/tvs/tvs/03.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
