@extends('layouts.back-end.app')
@section('css')
@endsection
@section('js')
    <!-- pace js -->
    <script src="{{asset('backend/assets/libs/pace-js/pace.min.js')}}"></script>
    <!-- apexcharts -->
    <script src="{{asset('backend/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <!-- Plugins js-->
    <!-- dashboard init -->
    <script src="{{asset('backend/assets/js/pages/dashboard.init.js')}}"></script>
@endsection

@section('title')
    Admin Dashboard
@endsection

@section('breadcrumb')
    Dashboard
@endsection

@section('content')
    @php
        $projects= \App\Model\Profile::all()->count();
        $lastYearProjects= \App\Model\Profile::whereYear('created_at', date('Y'))->get()->count();
        $clients = \App\Model\Client::all()->count();
        $lastYearClients= \App\Model\Client::whereMonth('created_at', date('m'))->get()->count();
        $messages = \App\Model\Message::all()->count();
        $lastDayClients= \App\Model\Message::whereDay('created_at', date('d'))->get()->count();

    @endphp
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <a href="{{route('admin.profile.view')}}">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Project</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="{{$projects}}">0</span>
                            </h4>
                        </div>

                        <div class="col-6">
                            <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class="badge bg-soft-success text-success">+{{$lastYearProjects}}</span>
                        <span class="ms-1 text-muted font-size-13">Since last years</span>
                    </div>
                </div><!-- end card body -->
                </a>
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <a href="{{route('admin.client.view')}}">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Number of Clients</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="{{$clients}}">0</span>
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class="badge bg-soft-success text-primary">{{$lastYearClients}} Client</span>
                        <span class="ms-1 text-muted font-size-13">Since last Month</span>
                    </div>
                </div><!-- end card body -->
                </a>
            </div><!-- end card -->
        </div><!-- end col-->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <a href="{{route('admin.message.view')}}">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Message</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="{{$messages}}">0</span>M
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class="badge bg-soft-success text-success">+ {{$lastDayClients}}</span>
                        <span class="ms-1 text-muted font-size-13">Since last Day</span>
                    </div>
                </div><!-- end card body -->
                </a>
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Profit Ration</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="12.57">0</span>%
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class="badge bg-soft-success text-success">+2.95%</span>
                        <span class="ms-1 text-muted font-size-13">Since last week</span>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row-->
@endsection

