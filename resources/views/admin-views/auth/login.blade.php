@include('layouts.back-end.partials._header')
<body>

<div class="auth-page">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xxl-3 col-lg-4 col-md-5">
                <div class="auth-full-page-content d-flex p-sm-5 p-4">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5 text-center">
                                <a href="#" class="d-block auth-logo">
                                    @php($name=\App\Model\Setting::where('key','name')->first()->value)
                                    @php($logo=\App\Model\Setting::where('key','logo')->first()->value)
                                    <img  class="img-vertical-150" src="{{asset('storage/company')}}/{{$logo}}"
                                         onerror="this.src='{{asset('backend/assets/images/logo-sm.svg')}}'" alt="{{$name}}">
                                </a><br>
                                <span class="logo-txt">{{$name}} || Dashboard</span>
                            </div>
                            <div class="auth-content my-auto">
                                <div class="text-center">
                                    <h5 class="mb-0">Welcome Back !</h5>
                                    <p class="text-muted mt-2">Sign in to {{$name}}</p>
                                </div>
                                <form class="mt-4 pt-2" action="{{route('admin.auth.login')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <label class="form-label">Password</label>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="">
                                                    <a href="#" class="text-muted">Forgot password?</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" name="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                            <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="termsCheckbox">
                                                <label class="form-check-label" for="termsCheckbox"> Remember me </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </form>

                                <div class="mt-4 pt-2 text-center">
                                    <div class="signin-other-title">
                                        <h5 class="font-size-14 mb-3 text-muted fw-medium">- Follow Us On  -</h5>
                                    </div>

                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            @php($fb_link=\App\Model\Setting::where('key','fb_link')->first()->value)
                                            <a href="{{$fb_link}}" target="_blank"
                                               class="social-list-item bg-primary text-white border-primary">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            @php($linkedin_link=\App\Model\Setting::where('key','linkedin_link')->first()->value)
                                            <a href="{{$linkedin_link}}" target="_blank"
                                               class="social-list-item bg-info text-white border-info">
                                                <i class="mdi mdi-linkedin"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            @php($youtube_link=\App\Model\Setting::where('key','youtube_link')->first()->value)
                                            <a href="{{$youtube_link}}" target="_blank"
                                               class="social-list-item bg-danger text-white border-danger">
                                                <i class="mdi mdi-youtube"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            @php($pinterest_link=\App\Model\Setting::where('key','pinterest_link')->first()->value)
                                            <a href="{{$pinterest_link}}" target="_blank"
                                               class="social-list-item bg-primary text-white border-primary">
                                                <i class="mdi mdi-pinterest"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Trimatric   . Development  <i class="mdi mdi-heart text-danger"></i> by Trimatric</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end auth full page content -->
            </div>
            <!-- end col -->
            <div class="col-xxl-9 col-lg-8 col-md-7">
                <div class="auth-bg pt-md-5 p-4 d-flex">
                    <div class="bg-overlay bg-primary"></div>
                    <ul class="bg-bubbles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <!-- end bubble effect -->

                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container fluid -->
</div>
@include('layouts.back-end.partials._footer')
