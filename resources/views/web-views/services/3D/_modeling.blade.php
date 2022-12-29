@extends('web-views.services.components.masterService')
@section('title')
    3D modeling
@endsection
@section('description')
    If you need to design your product in any ways. 3d, automated design, manual, handcrafts. An effective demo will be shown as we start the work.
@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/graphics/3d.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')

    <div class="process-work " data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Character modeling</span></h3>
            <p>
                Character modeling is the process of transforming a concept, essentially an idea, into a three-dimensional model. The character artist builds the model from the ground up using tools such as polygon box modeling, hard surface modeling, and digital sculpting techniques.
            </p>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/3d/modeling.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Hard Surface Modeling</span></h3>
            <p>
                Hard-surface modeling is a modeling technique used to model cars, armor, machines, and generally non-living objects that have smooth, static surfaces. This technique is greatly used in sci-fi and shooter video games because it's ideal to make weapons, robots, armor, machines, and structures.
            </p>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/3d/hard.png')}}" alt="Thumbnail">
        </div>
    </div>

    <div class="process-work " data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Types of 3D modeling Work</span></h3>
            <p>
                We share the responsibility of our clients to organize any sort of Corporate Event.
                We give the following Corporate Event services from our company:
            </p><br>
            <ul class="list-style angle">
                <li>3d Modeling</li>
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
                                <source src="{{asset('frontend/assets/media/service/3d/animation/01.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/3d/animation/02.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/3d/animation/04.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/3d/animation/03.mp4')}}" type="video/mp4" alt="Laptop">
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
