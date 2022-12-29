@extends('layouts.front-end.app')
@section('home')active @endsection
@section('title') Home @endsection
@section('content')
    <!--=====================================-->
    <!--=        Banner Area Start         =-->
    <!--=====================================-->
    @include('web-views.partials._banner')
    <!--=====================================-->
    <!--=        Service Area Start         =-->
    <!--=====================================-->
    @include('web-views.partials._service')
    <!--=====================================-->
    <!--=        Project Area Start         =-->
    <!--=====================================-->
    @include('web-views.partials._projectHome')
    <!--=====================================-->
    <!--=        Counter Up Area Start      =-->
    <!--=====================================-->
    @include('web-views.partials._counter')
    <!--=====================================-->
    <!--=        About Area Start         =-->
    <!--=====================================-->
    @include('web-views.partials._about')
    <!--=====================================-->
    <!--=        Client Area Start       	=-->
    <!--=====================================-->
    @include('web-views.partials._client')
    <!--=====================================-->
    <!--=        Pricing Area Start       	=-->
    <!--=====================================-->
{{--    @include('web-views.partials._price-list')--}}
    <!--=====================================-->
    <!--=     Call To Action Area Start     =-->
    <!--=====================================-->
{{--    @include('web-views.partials._together')--}}
@endsection
