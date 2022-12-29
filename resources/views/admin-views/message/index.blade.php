@extends('layouts.back-end.app')
@section('css')
    <link href="{{asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    {{--    <!-- Responsive datatable examples -->--}}
    <link href="{{asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('title')
    Message Details
@endsection

@section('breadcrumb')
    Message
@endsection

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Total Message <span class="text-muted fw-normal ms-2">({{count(App\Model\Message::all())}})</span></h5>
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
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Message</th>
                <th style="width: 80px; min-width: 80px;">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $key=>$row)
                <tr>
                    <th scope="row">
                        <div class="form-check font-size-16">
                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                            <label class="form-check-label" for="contacusercheck1"></label>
                        </div>
                    </th>
                    <td>{{$row->name}}</td>

                    <td><a href="{{$row->email}}" target="_blank" class="text-body">{{$row->email}}</a></td>
                    <td>{{$row->phone}}</td>
                    <td>
                           {{ Illuminate\Support\Str::limit($row->message, 50) }}
                    </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item delete" id="{{$row['id']}}"> Delete </a></li>
                                <li>
                                    <button type="button" class="btn btn-danger w-100 waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#clientmodal{{$row['id']}}">
                                        View
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="clientmodal{{$row['id']}}" tabindex="-1" role="dialog" aria-labelledby="clientmodalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-top modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-size-16" id="clientmodalTitle">New Client Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="mb-3">
                                    <label for="">Message<span class="text-danger"></span></label>
                                    <textarea  name="message" class="form-control" readonly >{{($row->message)}}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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



@endsection
@section('js')
    <!-- Required datatable js -->
    <script src="{{asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- pace js -->
    <script src="{{asset('backend/assets/js/pages/datatable-pages.init.js')}}"></script>
    <!-- apexcharts -->
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
                        url:"{{route('admin.message.delete')}}",
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
