@extends('web-views.services.components.masterService')
@section('title')
    Dynamic Graphics Design
@endsection
@section('description')
    When you run a company based on the ideal of forward moving, changing and risk-taking then you must need to have Dynamic Graphic Design.
    Our research teamwork on that intensely and do visual metaphors, motion graphic transitions and strengthening meaning. That will give your audience a precise and fast pacing overview.
@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/graphics/graphics.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')
    <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Brand Belief</span></h3>
            <p>
                It can be tough, especially when the maximum number of entrepreneurs believe that graphic design and branding are the same things. This is funny indeed but this sort of things which a belief going on. While innovative choices will consistently feel emotional, recollect that branding goes a long ways past the visual.
                <br><br>
                Graphic design takes care of your image, your image takes care of your business. If your graphic designers are contending with each other, you’ll always lose the challenge for your client’s consideration.            </p>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/graphics/daynamic.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Types of Dynamic Graphics Work</span></h3>
            <p>
                Before settling on picking graphic design company from Bangladesh, you can audit our designs, aptitudes, characteristics, test works, costs and sort of services.
                We give the following graphic design services from our company:
            </p><br>
            <ul class="list-style angle">
                <li>Visual metaphors</li>
                <li> Motion graphic transitions</li>
                <li>Strengthening meaning</li>
                <li>Digital Design</li>
            </ul>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/graphics/motion.gif')}}" alt="Thumbnail">
        </div>
    </div>

    <section class="section section-padding-equal pt--200 pt_md--80 pt_sm--60">
        <div class="container-fluid plr--30">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/graphics/dynamic_Graphics/01.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/graphics/dynamic_Graphics/02.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/graphics/dynamic_Graphics/04.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/graphics/dynamic_Graphics/03.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/graphics/dynamic_Graphics/05.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <video autoplay muted loop style="height: 310px; width:410px">
                                <source src="{{asset('frontend/assets/media/service/graphics/dynamic_Graphics/06.mp4')}}" type="video/mp4" alt="Laptop">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
