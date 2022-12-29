@extends('layouts.back-end.app')
@section('css')
    <link href="{{asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
{{--    <!-- Responsive datatable examples -->--}}
    <link href="{{asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('title')
    Client Details
@endsection

@section('breadcrumb')
    Client
@endsection

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Client List <span class="text-muted fw-normal ms-2">({{count(App\Model\Client::all())}})</span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <div>
                    <button type="button" class="btn btn-danger w-100 waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#clientmodal">
                        Add New
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
                <th scope="col">Company Name</th>
                <th scope="col">Weblink</th>
                <th scope="col">Address</th>
                <th style="width: 80px; min-width: 80px;">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $key=>$client)
                <tr>
                    <th scope="row">
                        <div class="form-check font-size-16">
                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                            <label class="form-check-label" for="contacusercheck1"></label>
                        </div>
                    </th>
                    <td>
                        <img onerror="this.src='{{asset('backend/assets/images/users/avatar-2.jpg')}}'"
                             src="{{asset('storage/backend/clients')}}/{{$client['logo']}}" class="avatar-sm  me-2" alt="{{$client->name}}">
                    </td>
                    <td>{{$client->name}}</td>

                    <td><a href="{{$client->web}}" target="_blank" class="text-body">{{$client->web}}</a></td>
                    <td>{{$client->address}}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <button type="button" class="btn btn-primary w-100 waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#clientModal{{$client['id']}}">
                                    Edit
                                </button>
                                <li><a class="dropdown-item delete" id="{{$client['id']}}"> Delete </a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="clientModal{{$client['id']}}" tabindex="-1" role="dialog" aria-labelledby="clientModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-top modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-size-16" id="clientModalTitle">Client Update</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('admin.client.update')}}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div>
                                        <input type="hidden" name="id" value="{{$client->id}}">
                                        <div class="mb-3">
                                            <input type="text" name="name" class="form-control"  value="{{$client->name}}">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="web" class="form-control" value="{{$client->web}}">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="address" class="form-control" value="{{$client->address}}">
                                        </div>
                                        <div class="mb-3">
                                            <img id="addImg" style="height: 150px;width: 150px" class="img-vertical-150" src="{{asset('storage/backend/clients')}}/{{$client->logo}}" onerror="this.src='{{asset('backend/assets/images/placeholder.jpg')}}'">

                                            <input type="file" name="logo" class="form-control" placeholder="logo" onchange="readURL(this);">
                                            <label for="addImg">Client logo(Recommended: 300*300 px)<span class="text-danger">*</span></label>
                                            @error ('logo')
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
                <!-- end modal -->


            @endforeach
            </tbody>
        </table>
        <!-- end table -->
    </div>
    <!-- end table responsive -->
    <!-- Modal -->
    <div class="modal fade" id="clientmodal" tabindex="-1" role="dialog" aria-labelledby="clientmodalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-size-16" id="clientmodalTitle">New Client Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.client.add')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                    <div>
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Client Name">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="web" class="form-control" placeholder="Client Website URL">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="address" class="form-control" placeholder="Address">
                        </div>

                        <div class="mb-3">
                            <label for="">Client Logo Size(Recommended: 300*300 px)<span class="text-danger">*</span></label>
                            <input type="file" name="logo" class="form-control" placeholder="logo">
                            @error ('logo')
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
                        url:"{{route('admin.client.delete')}}",
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
            <script>
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#addImg')
                                .attr('src', e.target.result)
                                .width(300)
                                .height(150);
                        };

                        reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
@endsection
