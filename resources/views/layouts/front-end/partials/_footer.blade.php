<!--=====================================-->
<!--=        Footer Area Start       	=-->
<!--=====================================-->

<footer class="footer-area  pt_lg--100 pt_md--80 pt_sm--60">
    <div class="container">
        <div class="footer-top">
            <div class="footer-social-link">
                <ul class="list-unstyled">
                    @php($fb_link=\App\Model\Setting::where('key','fb_link')->first()->value)
                    <li><a target='_blank' href="{{$fb_link}}" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100"><i class="fab fa-facebook-f"></i></a></li>
                    @php($youtube_link=\App\Model\Setting::where('key','youtube_link')->first()->value)
                    <li><a target='_blank' href="{{$youtube_link}}" data-sal="slide-up" data-sal-duration="500" data-sal-delay="800"><i class="fab fa-youtube"></i></a></li>
                    @php($linkedin_link=\App\Model\Setting::where('key','linkedin_link')->first()->value)
                    <li><a target='_blank' href="{{$linkedin_link}}" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400" class="sal-animate"><i class="fab fa-linkedin-in"></i></a>
                    @php($pinterest_link=\App\Model\Setting::where('key','pinterest_link')->first()->value)
                    <li><a target='_blank' href="{{$pinterest_link}}" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300"><i class="fab fa-pinterest-p"></i></a></li>
                    @php($instagram_link=\App\Model\Setting::where('key','instagram_link')->first()->value)
                    <li><a target='_blank' href="{{$instagram_link}}" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500"><i class="fab fa-instagram"></i></a></li>
                    @php($behance_link=\App\Model\Setting::where('key','behance_link')->first()->value)
                    <li><a target='_blank' href="{{$behance_link}}" data-sal="slide-up" data-sal-duration="500" data-sal-delay="800"><i class="fab fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-main">
            <div class="row">
                <div class="col-xl-3 col-lg-3" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                    <div class="footer-widget border-end">
                        <div class="footer-newsletter">
                            @php($logo=\App\Model\Setting::where('key','logo')->first()->value)

                            <a href="{{route('home')}}"><img id="addImg" class="img-vertical-150" src="{{asset('storage/company')}}/{{$logo}}"
                                                             onerror="this.src='{{asset('frontend/assets/media/footer.png')}}'"></a><br>
                        </div>
                        <div class="mt-5">
                            <p class="">WithReference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="footer-widget">
                                <h6 class="widget-title">Services</h6>
                                <div class="footer-menu-link">
                                    <ul class="list-unstyled">
                                        <li><a href="{{route('service')}}#Graphics">Logo &amp; Branding</a></li>
                                        <li><a href="{{route('service')}}#Web_Design">Website Development</a></li>
                                        <li><a href="{{route('service')}}#Digital">Digital Marketing</a></li>
                                        <li><a href="{{route('service')}}#3D">3D</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-widget" >
                                <h6 class="widget-title">Informational</h6>
                                <div class="footer-menu-link">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                                        <li><a href="{{route('about')}}">About</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-widget">
                                <h6 class="widget-title">Support</h6>
                                <div class="footer-menu-link">
                                    <ul class="list-unstyled">
                                        <li><a href="{{route('findUs')}}">Contact</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-widget">
                                <h6 class="widget-title">Contact</h6>
                                <div class="footer-menu-link">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="mailto::info@trimatric.studio">
                                                @php($email=\App\Model\Setting::where('key','email')->first()->value)
                                                <i class="fas fa-at"></i>   <span>{{$email}}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel::+880123456789">
                                                @php($phone=\App\Model\Setting::where('key','phone')->first()->value)
                                                <i class="fas fa-phone"></i>  <span>{{$phone}}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://goo.gl/maps/dmSwvKPBFrfe2xfP9" target="_blank">
                                                @php($address=\App\Model\Setting::where('key','address')->first()->value)
                                                <span><i class="fas fa-map-marker-alt"></i> {{$address}}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="footer-copyright">
                        <span class="copyright-text">© <?php echo date("Y"); ?> All rights reserved by <a href="https://trimatric.com">Trimatric</a>.</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-bottom-link">
                        <ul class="list-unstyled">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
