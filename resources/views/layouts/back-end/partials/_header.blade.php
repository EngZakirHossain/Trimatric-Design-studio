<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    @php($name=\App\Model\Setting::where('key','name')->first()->value)
    <title>{{$name}} | Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="{{$name}}" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.png')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />

    @yield('css')
    <!-- plugin css -->
    <!-- choices css -->
    <link href="{{ asset('backend/assets') }}/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" type="text/css" />

    <!-- color picker css -->
    <link rel="stylesheet" href="{{ asset('backend/assets') }}/libs/%40simonwep/pickr/themes/classic.min.css"/> <!-- 'classic' theme -->
    <link rel="stylesheet" href="{{ asset('backend/assets') }}/libs/%40simonwep/pickr/themes/monolith.min.css"/> <!-- 'monolith' theme -->
    <link rel="stylesheet" href="{{ asset('backend/assets') }}/libs/%40simonwep/pickr/themes/nano.min.css"/> <!-- 'nano' theme -->

    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ asset('backend/assets') }}/libs/flatpickr/flatpickr.min.css">

    <!-- preloader css -->
    {{-- <link rel="stylesheet" href="{{ asset('backend/assets') }}/css/preloader.min.css" type="text/css" /> --}}

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="{{ asset('backend/assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">




</head>

