<!DOCTYPE html>
<html lang="en">
@include('include.head')

<body class="body-with-sidebar">
    {{-- <div class="page-loader" id="page-loader">
        <img src="/assets/images/loader.gif" class="m-auto" />
    </div> --}}
    @include('include.header')
  
    <link rel="stylesheet" href="/assest/css/8071f5578d985ca2.css" data-n-g="" />
    <script>
document.addEventListener("DOMContentLoaded", function () {
  const outerListItem = document.querySelector(".side-navigation-panel-select");
  const innerList = document.querySelector(".side-navigation-panel-select-inner");

  // Add a click event listener to the outer list item
  outerListItem.addEventListener("click", function () {
    // Toggle the visibility of the inner list
    innerList.classList.toggle("show-inner-list");
  });
});

</script>
    @include('include.sidebar')
  
    <main class="container position-relative ">
      <div class="Home_container__bCOhY">
        <div class="row">
            <div class="col-md-12 d-none d-md-block">
                <h1 class="page-heading rounded">Dashboard</h1>
             </div>
        </div>
        @yield("content")
    </main>
    <div class="bg-overlay bg-grad d-none"></div>

    <!-- TOASTS ======================================================== -->
    <div class="position-fixed end-0 p-3" style="z-index: 1020;top:70px">
        <div id="successToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header icon-success text-center">

                <strong class="me-auto"><i class="far fa-smile-wink mx-2" style="font-size:20px"></i>
                    Success!</strong>
                <small></small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Successfully added
            </div>
        </div>
    </div>

    <div class="position-fixed end-0 p-3" style="z-index: 1020;top:70px">
        <div id="failedToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header icon-danger text-center">

                <strong class="me-auto"><i class="far fa-frown mx-2" style="font-size:20px"></i> Sorry!</strong>
                <small></small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
            </div>
        </div>
    </div>
    <!-- END OF TOASTS ======================================================== -->

    @include('include.modals')
    <!-- END OF MODALS ======================================================== -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include jQuery UI library -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::asset('assets/scripts/scripts.js?v=16') }}"></script>
    <script src="{{ URL::asset('assets/scripts/sweetalert.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="/assets/js/request_handler.js"></script>
    <script src="/assets/js/scripts.min.js?v=16"></script>
    {{-- <script src="{{ asset('assets/js/toastr.min.js') }}"></script> --}}

    <script src="/assets/libs/apex-charts/apexcharts.min.js?v=16"></script>

    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.colVis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/vfs_fonts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jszip/dist/jszip.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jszip-utils/dist/jszip-utils.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons/js/buttons.print.min.js"></script>

    <script>
        (function() {
            'use strict'

            document.querySelector('#navbarSideCollapse').addEventListener('click', function() {
                document.querySelector('.sidebar-default').classList.toggle('open');
                document.querySelector('body').classList.toggle('overflow-hidden');
            })
        })();

        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });



        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
            case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
            case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        
            case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        
            case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
            }
        @endif
    </script>
    @yield("script")
    @stack('scripts')
</body>

</html>
