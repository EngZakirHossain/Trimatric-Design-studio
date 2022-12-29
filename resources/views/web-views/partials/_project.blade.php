<!--=        Project Area Start         =-->
<!--=====================================-->
<section class="section section-padding-equal pt_md--80 pt_sm--60">
    <div class="container">
        <div class="section-heading heading-left">
            <span class="subtitle">Our Project</span>
            <h2 class="title">Some of our finest <br> work.</h2>
        </div>
        <div class="axil-isotope-wrapper">
            <div class="isotope-button isotope-project-btn">
                @php
                    $services = \App\Model\Service::where('parent_id',0)->get();
                @endphp
                <button data-filter="*" class="is-checked"><span class="filter-text">All Works</span></button>
                @foreach($services as $key=>$row)
                <button data-filter=".{{$row->id}}"><span class="filter-text"> {{$row->name}} </span></button>
                @endforeach
            </div>
            @php
                $profiles = \App\Model\Profile::all();
            @endphp

            <div class="row isotope-list">
                @foreach($profiles as $key=>$profile)
                    @php $services=\App\Model\Service::where('id',$profile->serviceName)->first();@endphp
                <div class="col-xl-4 col-md-6 project {{$profile->serviceName}}">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="{{route('serviceProfile',$services->name)}}">
                                @php
                                    $file_name = $profile->featureImage;
                                      $extension = substr($file_name, strrpos($file_name, '.') + 1);
                                @endphp
                                @if($extension == 'mp4')
                                    <video autoplay muted loop style="height: 310px; width:410px" >
                                        <source src="{{asset('storage/backend/profile')}}/{{$services->name}}/{{$profile->name}}/{{$profile['featureImage']}}" type="video/mp4" alt="{{$profile->name}}">
                                    </video>
                                @else
                                    <img onerror="this.src='{{asset('backend/assets/images/users/avatar-2.jpg')}}'"
                                         src="{{asset('storage/backend/profile')}}/{{$services->name}}/{{$profile->name}}/{{$profile['featureImage']}}" style="height: 310px; width:410px" alt="{{$profile->name}}">
                                @endif
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{route('serviceProfile',$services->name)}}">{{$profile->name}}</a></h4>
                            <span class="badge badge-primary" style="background: #E61D27;font-weight: 300">{{$services->name}}</span>
                       </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
