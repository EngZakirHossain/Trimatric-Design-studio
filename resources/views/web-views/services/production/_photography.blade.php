@extends('web-views.services.components.masterService')
@section('title')
    Photography
@endsection
@section('description')
    To shoot your product, company, or services we can help you with a professional photographer along with post-production work.
@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/graphics/production.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')
    <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Conference Photography</span></h3>
            <p>
                Professional conference photography has become the norm. Events, conferences, international conferences and a variety of other professional
            </p>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/tvs/conference.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work content-reverse" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Modeling Photography</span></h3>
            <p>
                Capturing the right image for your company is a vital part of the modern business world today. Your audience will learn about your company
            </p>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/tvs/modeling.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Conference Photography</span></h3>
            <p>
                We have a professional and highly skilled team along with the technical setup for Product Photography.
                <br><br>We give the following Media Production Services from our company:
            </p>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/tvs/product.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Types of Photography Services</span></h3>
            <p>
               To shoot your product, company, or services we can help you with a professional photographer along with post-production work.                <br><br>We give the following Media Production Services from our company:
            </p><br>
            <ul class="list-style angle">
                <li>Conference Photography </li>
                <li>Industrial Photography  </li>
                <li>Modeling Photography </li>
                <li>Product Photography  </li>
                <li>Wedding Photography</li>
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
                            <img src="{{asset('frontend/assets/media/service/tvs/photography/01.jpg')}}" alt="project">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;" >
                            <img src="{{asset('frontend/assets/media/service/tvs/photography/02.jpg')}}" alt="project">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <img src="{{asset('frontend/assets/media/service/tvs/photography/04.jpg')}}" alt="project">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <img src="{{asset('frontend/assets/media/service/tvs/photography/03.jpg')}}" alt="project">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <img src="{{asset('frontend/assets/media/service/tvs/photography/05.jpg')}}" alt="project">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;" >
                            <img src="{{asset('frontend/assets/media/service/tvs/photography/06.jpg')}}" alt="project">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <img src="{{asset('frontend/assets/media/service/tvs/photography/07.jpg')}}" alt="project">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <img src="{{asset('frontend/assets/media/service/tvs/photography/08.jpg')}}" alt="project">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail" style="border-radius: 30px 30px 30px 30px;">
                            <img src="{{asset('frontend/assets/media/service/tvs/photography/09.jpg')}}" alt="project">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
