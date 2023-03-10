@include('layouts.back-end.partials._header')
<body>
<div id="layout-wrapper">
@include('layouts.back-end.partials._topbar')
@include('layouts.back-end.partials._sidebar')

<!-- Page Content-->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">@yield('title')</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active">@yield('breadcrumb')</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                @yield('content')
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Trimatric
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                             Develop by <a href="trimatric.com" class="text-decoration-underline">Trimatric IT</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end page content -->
</div>

@include('layouts.back-end.partials._footer')
