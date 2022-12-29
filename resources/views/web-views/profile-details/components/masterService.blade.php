@extends('layouts.front-end.app')
@section('portfolio')active @endsection
@section('content')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    @include('web-views.profile-details.components.__breadcrumb')
    <!--=====================================-->
    <!--=       Work Process Area Start     =-->
    <!--=====================================-->
    @include('web-views.profile-details.components.__work')
    <!--=====================================-->
@endsection
