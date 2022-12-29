@extends('web-views.services.components.masterService')
@section('title')
    Search Engine Optimization
@endsection
@section('description')
    SEO or ‘search engine optimization helps to improve your site to increase its visibility when people search for products or services related to your business in Google, Bing, and other search engines. We will assign expert web analyzers to do this for you.
@endsection
@section('breadcum_image')
    <img src="{{asset('frontend/assets/media/service/graphics/marketing.png')}}" alt="Illustration">
@endsection
@section('typeOfWork')
    <div class="process-work " data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Local SEO</span></h3>
            <p>
                Want to rank the highest in your local community?
                This is a suitable plan for you. This plan concentrates on your local community to bring people to your storefront.
            </p>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/marketing/local.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work content-reverse " data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Nationwide SEO</span></h3>
            <p>
                Looking to reach an audience throughout the country? This is a convenient plan for you. This plan focuses on a more nationwide deliverance.
            </p>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/marketing/nationwide.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work " data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Global SEO</span></h3>
            <p>
                Intending to reach the audience on a global scale? This is the right plan for you. With this plan, we help you rank on a global level.
            </p>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/marketing/global.png')}}" alt="Thumbnail">
        </div>
    </div>
    <div class="process-work content-reverse " data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
        <div class="content">
            <h3 class="title"><span style="font-size:36px;color:#F5C05D;">Types of Search Engine Optimization</span></h3>
            <p>
                SEO Packages Includes the Services:
            </p><br>
            <ul class="list-style angle">
                <li>On-site Optimization</li>
                <li> Off-site Optimization</li>
                <li>Monthly  Analysis </li>
                <li>Keyword Research  </li>
                <li>Technical SEO  </li>
            </ul>
        </div>
        <div class="thumbnail paralax-image">
            <img src="{{asset('frontend/assets/media/service/marketing/local-seo-services.png')}}" alt="Thumbnail">
        </div>
    </div>
@endsection
