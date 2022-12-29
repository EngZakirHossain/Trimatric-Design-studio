@extends('layouts.front-end.app')
@section('service')active @endsection
@section('content')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    @include('web-views.services.components.__breadcrumb')
    <!--=====================================-->
    <!--=       Why Choose Area Start       =-->
    <!--=====================================-->
    @include('web-views.services.components.__purpose')
    <!--=====================================-->
    <!--=       Work Process Area Start     =-->
    <!--=====================================-->
    @include('web-views.services.components.__work')
    <!--=====================================-->
@endsection
