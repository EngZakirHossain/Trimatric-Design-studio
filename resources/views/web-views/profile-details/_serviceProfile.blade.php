@extends('layouts.front-end.app')
@section('portfolio')active @endsection
@section('title') Service Profile @endsection
@section('content')
    <!--=        Project Area Start         =-->
    <!--=====================================-->
    <section class="section section-padding-equal pt_md--80 pt_sm--60">
        <div class="container">
            <div class="axil-isotope-wrapper">
                <div class="row isotope-list">
                    @foreach($serviceProfile as $key=>$row)
                        @php $services=\App\Model\Service::where('id',$row->serviceName)->first();@endphp
                        <div class="col-xl-4 col-md-4 project Production ">
                        <div class="project-grid">
                            <div class="thumbnail1">
                                <a href="{{route('profileDetails',$row->name)}}">
                                    @php
                                        $file_name = $row->featureImage;
                                          $extension = substr($file_name, strrpos($file_name, '.') + 1);
                                    @endphp
                                    @if($extension == 'mp4')
                                        <video autoplay muted loop style="height: 310px; width:410px" >
                                            <source src="{{asset('storage/backend/profile')}}/{{$services->name}}/{{$row->name}}/{{$row['featureImage']}}" type="video/mp4" alt="{{$row->name}}">
                                        </video>
                                    @else
                                        <img onerror="this.src='{{asset('backend/assets/images/users/avatar-2.jpg')}}'"
                                             src="{{asset('storage/backend/profile')}}/{{$services->name}}/{{$row->name}}/{{$row['featureImage']}}" style="height: 310px; width:410px" alt="{{$row->name}}">
                                    @endif
                                </a>
                            </div>
                        </div>
                        <div class="content text-center">
                                <h4 class="title"><a href="{{route('profileDetails',$row->name)}}">{{$row->name}}</a></h4>
                            </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
@endsection





