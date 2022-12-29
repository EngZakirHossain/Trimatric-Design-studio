@extends('layouts.back-end.app')
@section('css')
    <link href="{{asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    {{--    <!-- Responsive datatable examples -->--}}
    <link href="{{asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('title')
    Service Details
@endsection

@section('breadcrumb')
    Service
@endsection

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Service List <span class="text-muted fw-normal ms-2">({{count(App\Model\Client::all())}})</span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <div>
                    <button type="button" class="btn btn-danger w-100 waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#serviceModal">
                        Add Service
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-danger w-100 waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#subServiceModal">
                        Add Sub-Service
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
                <th scope="col">Logo</th>
                <th scope="col">Service Name</th>
                <th scope="col">Parents Service</th>
                <th style="width: 80px; min-width: 80px;">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($services as $key=>$service)
                <tr>
                    <th scope="row">
                        <div class="form-check font-size-16">
                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                            <label class="form-check-label" for="contacusercheck1"></label>
                        </div>
                    </th>
                    <td>
                        @if($service->parent_id == 0)
                        <img onerror="this.src='{{asset('backend/assets/images/users/avatar-2.jpg')}}'"
                             src="{{asset('storage/backend/service')}}/{{$service->name}}/{{$service['thumbnail']}}" class="avatar-sm  me-2" alt="{{$service->name}}">
                        @else
                            <img onerror="this.src='{{asset('backend/assets/images/users/avatar-2.jpg')}}'"
                                 src="{{asset('storage/backend/subService')}}/{{$service['thumbnail']}}" class="avatar-sm  me-2" alt="{{$service->name}}">
                        @endif
                    </td>
                    <td>{{$service->name}}</td>
                    <td>
                        @if($service->parent_id == 0)
                            Main Service
                        @else
                            @php $services=\App\Model\Service::where('id',$service->parent_id)->first();@endphp
                            {{$services->name}}
                        @endif
                    </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Modify</a></li>
                                <li><a class="dropdown-item delete" id="{{$service['id']}}"> Delete </a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- end table -->
    </div>
    <!-- end table responsive -->
    <!-- Modal -->
    <div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="serviceModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-size-16" id="clientmodalTitle">New Service Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.service.store')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div>
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Service Name">
                            </div>
                            <div class="mb-3">
                                <label for="">Service Thumbnail Size(Recommended: 67*90 px)<span class="text-danger">*</span></label>
                                <input type="file" name="thumbnail" class="form-control" placeholder="thumbnail">
                                @error ('thumbnail')
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
    <!-- Sub service Modal -->
    <div class="modal fade" id="subServiceModal" tabindex="-1" role="dialog" aria-labelledby="subServiceModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-size-16" id="clientmodalTitle">New Service Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.subService.store')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div>
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Service Name">
                            </div>
                            <div class="mb-3">
                                <input type="hidden" id="id">
                                <select name="parent_id" id="parent_id" class="form-control">
                                    <option value="0" selected disabled>Select Category</option>
                                    @foreach (App\Model\Service::where('parent_id',0)->get() as $service)
                                        <option value="{{$service->id}}">{{$service->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="">Service Logo Size(Recommended: 67*90 px)<span class="text-danger">*</span></label>
                                <input type="file" name="thumbnail" class="form-control" placeholder="logo">
                                @error ('thumbnail')
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
                        url:"{{route('admin.service.delete')}}",
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
@endsection
