@extends('layouts.back-end.app')
@section('css')
    <link href="{{asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    {{--    <!-- Responsive datatable examples -->--}}
    <link href="{{asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/libs/choices.js/public/assets/styles/choices.min.css')}}" rel="stylesheet" type="text/css" />


@endsection
@section('title')
   Add Profile Details
@endsection

@section('breadcrumb')
    Profile Details
@endsection

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h1 class="modal-title font-size-24">Profile Details of {{$profileDetails->name}}</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-4">
                    <form action="{{route('admin.profile.storeProfileInfo')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                      <div class="col-lg-6">
                                <div>
                                    <input class="form-control" type="hidden" value="{{$profileDetails->id}}" name="profile_id" >

                                    <div class="mb-3">
                                        <label for="example-search-input" class="form-label">Profile Images / Video (Multiple Chosen)</label>
                                        <input class="form-control" type="file" name="images_video[]" value="" multiple>
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-email-input" class="form-label">Before Image</label>
                                        <input class="form-control" type="file" name="before_images" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-url-input" class="form-label">After Image</label>
                                        <input class="form-control" type="file" name="after_images" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-tel-input" class="form-label">Youtube link (https://www.youtube.com/embed/KGof75uwwPo)</label>
                                        <input class="form-control" type="text" name="youtube_link" value="" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-password-input" class="form-label">Render View (https://sketchfab.com/models/a8b353f310a34fa18c8fd785c94872d5/embed )</label>
                                        <input class="form-control" type="text" name="render_link" value="" >
                                    </div>
                                </div>
                              <button type="submit" class="btn btn-primary">Submit </button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

@endsection
@section('js')
    <!-- Required datatable js -->
    <script src="{{asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- pace js -->
    <script src="{{asset('backend/assets/js/pages/datatable-pages.init.js')}}"></script>
    <!-- apexcharts -->
    <script src="{{asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- Plugins js-->
    <!-- dashboard init -->
    <script src="{{asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/pages/form-advanced.init.js')}}"></script>
    <script src="{{asset('backend/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

@endsection
