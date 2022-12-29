<script src="{{ asset('backend/assets') }}/libs/jquery/jquery.min.js"></script>
{{-- <script src="{{ asset('backend/assets') }}/js/jquery-3.5.1.min.js"></script> --}}
<script src="{{ asset('backend/assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('backend/assets') }}/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('backend/assets') }}/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('backend/assets') }}/libs/node-waves/waves.min.js"></script>
<script src="{{ asset('backend/assets') }}/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src="{{ asset('backend/assets') }}/libs/pace-js/pace.min.js"></script>

<!-- apexcharts -->
<script src="{{ asset('backend/assets') }}/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="{{ asset('backend/assets') }}/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ asset('backend/assets') }}/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<!-- dashboard init -->
<script src="{{ asset('backend/assets') }}/js/pages/dashboard.init.js"></script>

<!-- Buttons examples -->
<script src="{{ asset('backend/assets') }}/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('backend/assets') }}/libs/jszip/jszip.min.js"></script>
<script src="{{ asset('backend/assets') }}/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="{{ asset('backend/assets') }}/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="{{ asset('backend/assets') }}/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('backend/assets') }}/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('backend/assets') }}/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>


<!-- Datatable init js -->
<script src="{{ asset('backend/assets') }}/js/pages/datatables.init.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

<!-- choices js -->
<script src="{{ asset('backend/assets') }}/libs/choices.js/public/assets/scripts/choices.min.js"></script>

<!-- color picker js -->
<script src="{{ asset('backend/assets') }}/libs/%40simonwep/pickr/pickr.min.js"></script>
<script src="{{ asset('backend/assets') }}/libs/%40simonwep/pickr/pickr.es5.min.js"></script>

<!-- datepicker js -->
<script src="{{ asset('backend/assets') }}/libs/flatpickr/flatpickr.min.js"></script>

<!-- init js -->
<script src="{{ asset('backend/assets') }}/js/pages/form-advanced.init.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

{{-- chart js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.0.0/Chart.bundle.min.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@yield('js')
<script src="{{ asset('backend/assets') }}/js/chart.js"></script>
<script src="{{ asset('backend/assets') }}/js/app.js"></script>

<script>
    $(document).ready(function() {
        toastr.options.timeOut = 10000;
        @if (Session::has('error'))
        toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
        @endif
    });

</script>

</body>

</html>
