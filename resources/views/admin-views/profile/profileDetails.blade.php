@extends('layouts.back-end.app')
@section('css')
    <link href="{{asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    {{--    <!-- Responsive datatable examples -->--}}
    <link href="{{asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('title')
    Profile Details
@endsection

@section('breadcrumb')
    Profile
@endsection

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Profile List <span class="text-muted fw-normal ms-2">({{count(App\Model\Profile::all())}})</span></h5>
            </div>
        </div>
    </div>
    <div class="table-responsive mb-4">
        <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
            <thead>
            <tr>
                <th scope="col" style="width: 50px;">
                    <div class="form-check font-size-16">
                        <input type="checkbox" class="form-check-input" id="checkAll">
                        <label class="form-check-label" for="checkAll"></label>
                    </div>
                </th>
                <th scope="col">Total Images</th>
                <th scope="col">Service Name</th>
                <th scope="col">before_images</th>
                <th scope="col">after_images</th>
                <th scope="col">youtube_link</th>
                <th scope="col">render_link</th>
                <th style="width: 80px; min-width: 80px;">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($profileDetails as $key=>$row)
                @php
                    $profile=\App\Model\Profile::where('id',$row->profile_id)->first();
                    $services=\App\Model\Service::where('id',$profile->serviceName)->first();
                @endphp

                <tr>
                <th scope="row">
                    <div class="form-check font-size-16">
                        <input type="checkbox" class="form-check-input" id="contacusercheck1">
                        <label class="form-check-label" for="contacusercheck1"></label>
                    </div>
                </th>
                <td> @php
                        $values = explode("|",$row->images_video);
                        $total = count($values)
                    @endphp   {{$total}}
                </td>
                <td> {{$profile->name}}   </td>
                <td> {{$row->before_images}}   </td>
                <td> {{$row->after_images}}   </td>
                <td> {{ Str::limit($row->youtube_link, 33) }}</td>
                <td> {{ Str::limit($row->render_link, 33) }}</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bx bx-dots-horizontal-rounded"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Modify</a></li>
                            <li><a class="dropdown-item delete" id="{{$row['id']}}"> Delete </a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <!-- end table -->
    </div>
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

    <script>
        $(document).on('click', '.delete', function () {
            var id = $(this).attr("id");
            Swal.fire({
                title: 'Are you sure delete this Client?',
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url:"{{route('admin.profile.deleteProfileInfo')}}",
                        method: 'POST',
                        data: {id: id},
                        success : function(data) {
                            window.location.reload(true);
                        }
                    });
                }
            })
        });
    </script>

@endsection
