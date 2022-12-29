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
        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <div>
                    <button type="button" class="btn btn-danger w-100 waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#profileModal">
                        Add Profile
                    </button>
                </div>

            </div>

        </div>
    </div>

    <!-- end row -->
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
                <th scope="col">Feature Image</th>
                <th scope="col">Service Category</th>
                <th scope="col">Service Name</th>
                <th scope="col">Service Details</th>
                <th style="width: 80px; min-width: 80px;">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($profiles as $key=>$profile)
                @php $services=\App\Model\Service::where('id',$profile->serviceName)->first();@endphp
                <tr>
                    <th scope="row">
                        <div class="form-check font-size-16">
                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                            <label class="form-check-label" for="contacusercheck1"></label>
                        </div>
                    </th>
                    <td>
                        @php
                            $file_name = $profile->featureImage;
                              $extension = substr($file_name, strrpos($file_name, '.') + 1);
                            @endphp
                        @if($extension == 'mp4')
                            <video autoplay muted loop class="avatar-sm  me-2" >
                                <source src="{{asset('storage/backend/profile')}}/{{$services->name}}/{{$profile->name}}/{{$profile['featureImage']}}" type="video/mp4" alt="{{$profile->name}}">
                            </video>
                        @else
                            <img onerror="this.src='{{asset('backend/assets/images/users/avatar-2.jpg')}}'"
                                 src="{{asset('storage/backend/profile')}}/{{$services->name}}/{{$profile->name}}/{{$profile['featureImage']}}" class="avatar-sm  me-2" alt="{{$profile->name}}">
                        @endif
                    </td>
                    <td>
                        {{$services->name}}
                    </td>
                    <td>{{$profile->name}}</td>
                    <td>{{ Str::limit($profile->details, 33) }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{route('admin.profile.addProfileInfo',$profile->id)}}">Add Profile</a></li>
                                <li><a class="dropdown-item" href="#">
                                        <button type="button" class="btn btn-danger w-100 waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#profileModal{{$profile['id']}}">
                                            Edit
                                        </button>
                                    </a></li>
                                <li><a class="dropdown-item delete" id="{{$profile['id']}}"> Delete </a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="profileModal{{$profile['id']}}" tabindex="-1" role="dialog" aria-labelledby="profileModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-top modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-size-16" id="clientmodalTitle">New Service Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('admin.profile.update')}}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div>
                                        <input type="hidden" name="id" value="{{$profile->id}}">
{{--                                        <div class="mb-3">--}}
{{--                                            <select name="serviceName" id="parent_id" class="form-control">--}}
{{--                                                <option value="0" selected disabled> {{$services->name}}</option>--}}
{{--                                                @foreach (App\Model\Service::where('parent_id',0)->get() as $service)--}}
{{--                                                    <option value="{{$service->id}}">{{$service->name}}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <input type="text" name="name"  class="form-control" value="{{$profile->name}}" readonly>--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <textarea type="text" name="details" class="form-control" placeholder="Profile Details" >{{$profile->details}}</textarea>--}}
{{--                                        </div>--}}
                                        <div class="mb-3">
                                            <img id="upImg" style="height: 300px;width: 300px" src="{{asset('storage/backend/profile')}}/{{$services->name}}/{{$profile->name}}/{{$profile['featureImage']}}" alt="your image" />
                                            <input type="file" name="featureImage" class="form-control" placeholder="featureImage" onchange="readUpload(this);">
                                            <label for="">Profile Feature Image(Recommended: 300*300 px)<span class="text-danger">*</span></label>
                                            @error ('featureImage')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->
            @endforeach
            </tbody>
        </table>
        <!-- end table -->
    </div>
    <!-- end table responsive -->
    <!-- Modal -->
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-size-16" id="clientmodalTitle">New Service Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.profile.store')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div>
                            <div class="mb-3">
                                <input type="hidden" id="id">
                                <select name="serviceName" id="parent_id" class="form-control">
                                    <option value="0" selected disabled>Select Category</option>
                                    @foreach (App\Model\Service::where('parent_id',0)->get() as $service)
                                        <option value="{{$service->id}}">{{$service->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Profile Name">
                            </div>
                            <div class="mb-3">
                                <textarea type="text" name="details" class="form-control" placeholder="Profile Details"></textarea>
                            </div>
                            <div class="mb-3">
                                <img id="addImg" style="height: 200px;width: 200px" src='{{asset('backend/assets/images/placeholder.jpg')}}'/><br>
                                <input type="file" name="featureImage" class="form-control" placeholder="featureImage" onchange="readURL(this);">
                                <label for="">Profile Feature Image(Recommended: 300*300 px)<span class="text-danger">*</span></label>
                                @error ('featureImage')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

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
                title: 'Are you sure delete this Profile?',
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
                        url:"{{route('admin.profile.delete')}}",
                        method: 'POST',
                        data: {id: id},
                        success : function(data) {
                            location.reload();
                        }
                    });
                }
            })
        });
    </script>
    <script>
        function readUpload(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#upImg')
                        .attr('src', e.target.result)
                        .width(300)
                        .height(300);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#addImg')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
