@extends('web-views.services.components.masterService')
@section('title')
    Print Production
@endsection
@section('description')
    For posters, banners, flyers, pamphlets, billboards we do on intense detailing and accuracy.
@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/graphics/production.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')
    <div class="process-work" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Types of Print Production Services</span></h3>
            <p>
                To shoot your product, company, or services we can help you with a professional photographer along with post-production work.                <br><br>We give the following Media Production Services from our company:
            </p><br>
            <ul class="list-style angle">
                <li>Posters  </li>
                <li>Banners   </li>
                <li>Flyers  </li>
                <li>Pamphlets   </li>
                <li>Billboards </li>
            </ul>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/tvs/print.png')}}" alt="Thumbnail">
        </div>
    </div>

@endsection
