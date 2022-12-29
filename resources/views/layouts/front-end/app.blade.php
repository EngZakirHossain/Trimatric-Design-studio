<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @php($name=\App\Model\Setting::where('key','name')->first()->value)
    <title>{{$name}} | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/media/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/sal.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/green-audio-player.min.css')}}">
    @yield('css')
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/app.css')}}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M6VBJ2E3DH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-M6VBJ2E3DH');
    </script>

</head>

<body class="sticky-header">
<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "754080198106987");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v13.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<a href="#main-wrapper" id="backto-top" class="back-to-top">
    <i class="far fa-angle-double-up"></i>
</a>

<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->

<div id="main-wrapper" class="main-wrapper">

    @include('layouts.front-end.partials._header')

    @yield('content')

    @include('layouts.front-end.partials._footer')

</div>

<!-- Jquery Js -->
<script src="{{asset('frontend/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/counterup.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/slick.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/sal.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/js.cookie.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/jquery.style.switcher.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/jquery.countdown.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/tilt.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/green-audio-player.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/jquery.nav.js')}}"></script>

@yield('js')
<!-- Site Scripts -->
<script src="{{asset('frontend/assets/js/app.js')}}"></script>
</body>

</html>
