@extends('web-views.services.components.masterService')
@section('title')
    Animation
@endsection
@section('description')
    With the latest hype, we provide excellent animation services. Story building, motion movement, creating characters is our prior work with a team of well-trained animators.
@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/graphics/3d.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')

    <div class="process-work " data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Types of Animation Work</span></h3>
            <p>
                We share the responsibility of our clients to organize any sort of Corporate Event.
                We give the following Corporate Event services from our company:
            </p><br>
            <ul class="list-style angle">
                <li>Rigging</li>
                <li> Automated design & Development</li>
                <li>Manual design & Development</li>
                <li>Handcrafts</li>
                <li>Texturing</li>
                <li>Stylized</li>
                <li>Realistic</li>
            </ul>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/3d/3dmodeling.png')}}" alt="Thumbnail">
        </div>
    </div>

    <section class="section section-padding-equal pt--200 pt_md--80 pt_sm--60">
        <div class="container-fluid plr--30">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/3d/animation/07.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/3d/animation/08.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/3d/animation/09.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px" controls controlsList="nodownload">
                                <source src="{{asset('frontend/assets/media/service/3d/animation/02.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/3d/animation/05.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/3d/animation/06.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
