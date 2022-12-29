<!--=        About Area Start         =-->
<!--=====================================-->
<section class="section section-padding-equal bg-color-light"  style="background:url('frontend/assets/media/about/banner.png')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-sal="slide-up" data-sal-duration="800">
                <div class="about-us">
                    <div class="section-heading heading-left mb-0">
                        <span class="subtitle">About Us</span>
                        <h2 class="title mb--40">We Approach, <strong style="color:#E61D27">Strategy  & Develop.</strong></h2>
                        <p>We start by being honest about what real people want and what clients need to be successful. Guided by our proprietary HX approach, we design brand experiences that create value for people and inspire them to take action. </p>
                        <p>Data guides us to opportunity, helping us uncover what people want, need and expect. Technology makes personalization and relevance possible. Creativity makes it magic.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                <div class="contact-form-box">
                    <h3 class="title">Get a Free Quote Now</h3>
                    <form method="POST" action="{{route('sendMessage')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" required>
                        </div>
                        <div class="form-group mb--40">
                            <label>How can we help you?</label>
                            <textarea name="message" id="contact-message" class="form-control textarea" cols="30" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="axil-btn btn-fill-primary btn-fluid btn-primary">Get Pricing Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
