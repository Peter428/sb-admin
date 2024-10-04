<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SI KOST 2024</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!--Bolstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!--select2-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"/>
    <style>
        .select2-container {
            width: 100% !important; /* Memastikan Select2 mengisi 100% */
        }

        .select2-container .select2-selection--single {
            height: 38px; /* Menentukan tinggi untuk single select */
            padding: 6px; /* Menentukan padding */
            border: 1px solid #ced4da; /* Border sesuai dengan Bootstrap */
            border-radius: 4px; /* Radius border */
            font-size: 14px; /* Ukuran font */
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 1.5; /* Jarak vertikal konten */
            padding: 0; /* Menghilangkan padding */
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 38px; /* Tinggi panah dropdown */
        }

        .select2-container--default .select2-selection--multiple {
            /* border: 1px solid #ced4da; !* Border untuk multiple select *!*/
            border-radius: 4px; /* Radius border */
            padding: 6px; /* Padding di sekitar pilihan */
            min-height: 38px; /* Tinggi minimum untuk area multiple select */
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            margin: 2px; /* Margin antara pilihan */
            padding: 0 6px; /* Padding di dalam pilihan */
            border-radius: 6px; /* Radius border untuk pilihan */
            background-color: #4e6bc9; /* Warna latar belakang pilihan */
            color: #fff; /* Warna teks pilihan */
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            color: #fff; /* Warna ikon hapus */
            margin-left: 5px; /* Margin kiri untuk ikon hapus */
            cursor: pointer; /* Tanda kursor saat hover */
        }

        .select2-container--default .select2-selection--multiple .select2-selection__placeholder {
            color: #6c757d; /* Warna placeholder untuk multiple select */
        }

    </style>
</head>

<body id="page-top">
<div id="wrapper">

    <!-- Sidebar -->
    @include('admin.layouts.menu')
    <!-- End of Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('admin.layouts.navbar')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('admin.layouts.footer')
        <!-- End of Footer -->

    </div>
</div>


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda yakin mau keluar app?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('logout') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Logout</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Depedensi & Library Javascript-->
@stack('before-scripts')
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{asset('assets/vendor/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('assets/js/demo/datatables-demo.js')}}"></script>

<script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>

<!--select2-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(function () {
        $('.select2').select2();
    });
</script>
<script>
    const Toast = Swal.mixin({
        toast: true
        , position: 'top-end'
        , showConfirmButton: false
        , timer: 3000
        , timerProgressBar: true
        , onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

</script>

@if(\Session::has('message'))
    @php
        $message = Session::get('message');
    @endphp
    <script>
        $(function () {
            Toast.fire({
                icon: "{{$message[1]}}"
                , title: "{{$message[0]}}"
            });
        });

    </script>
@endif

@stack('page-scripts')
@stack('after-scripts')
</body>

</html>
