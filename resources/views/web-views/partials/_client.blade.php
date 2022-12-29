<!--=           Client  Area Start        =-->
<!--=====================================-->
@php
    use App\Model\Client;$clients = Client::take(6)->get();
@endphp
<section class="section section-padding bg-color-dark demo-slider">
    <div class="container">
        <div class="section-heading heading-light-left">
            <span class="subtitle">Top Clients</span>
            <h2 class="title">We Built Solutions for</h2>
            <p>We stand up for what we believe in and put people first. We lead with kindness and speak with respectful candor.</p>
        </div>
        <div class="row">
            <div class="customer-logos slider" data-sal="slide-up" data-sal-duration="500">
                <div class="owl-carousel">
                    @foreach($clients as $key=>$row)
                        <div class="p-2"><img style="height:200px; width:200px; " src="{{asset('storage/backend/clients')}}/{{$row['logo']}}" alt="{{$row->name}}"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->

@section('css')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl/owl.carousel.min.css')}}">
@endsection

@section('js')
    <script src="{{asset('frontend/assets/js/owl/owl.carousel.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl/owl.carousel.min.js')}}"></script>

    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                autoplay: true,
                items: 4,
                smartSpeed: 250,
                autoplayHoverPause: false,
                loop: true,
                responsiveClass: true,

            });
        });
    </script>
@endsection
