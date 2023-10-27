@extends('layouts.admin')

@section('title')
    Dashboard Admin
@endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="bi bi-speedometer"></i> Dashboard Admin</h1>
            <p>Tampilan awal laman admin!</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item"><a href="/dashboard_admin">Dashboard</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon bi bi-people fs-1"></i>
                <div class="info">
                    <h4>User Terdaftar</h4>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalUser"
                        class="btn btn-warning font-extrabold mb-0 purecounter" data-purecounter-start="0"
                        data-purecounter-end="{{ $users }}" data-purecounter-duration="1"
                        style="color: rgb(20, 0, 73)"></button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon"><i class="icon bi bi-folder2 fs-1"></i>
                <div class="info">
                    <h4>Data Terinput</h4>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalData"
                        class="btn btn-warning font-extrabold mb-0 purecounter" data-purecounter-start="0"
                        data-purecounter-end="{{ $posts }}" data-purecounter-duration="1"
                        style="color: rgb(20, 0, 73)"></button>
                </div>
            </div>
        </div>
        @include('admin.includes.modalData')
        @include('admin.includes.modalUser')
        {{-- <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class="icon bi bi-heart fs-1"></i>
                <div class="info">
                    <h4>Likes</h4>
                    <p><b>25</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon"><i class="icon bi bi-star fs-1"></i>
                <div class="info">
                    <h4>Stars</h4>
                    <p><b>500</b></p>
                </div>
            </div>
        </div> --}}
    </div>
@endsection

@push('script')

    <!-- Page specific javascripts-->
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css">
    <!-- Data table plugin-->
    <script type="text/javascript" src=" {{ asset('admin/js/plugins/jquery.dataTables.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $('#sampleTable').DataTable({
            "lengthMenu": [5, 10, 20, 30, 50],
            "pageLength": 5
        });
    </script>


    {{-- Pure Counter --}}
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script>
        new PureCounter();
    </script>

    {{-- Sweet Alert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Halo Admin!',
                text: '{{ session('success') }}',
                icon: 'success',
                showConfirmButton: false,
                timer: 1000
            });
        </script>
    @endif

    @if (session('logout'))
        <script>
            Swal.fire({
                title: 'Kamu Berhasil Logout!',
                icon: 'warning',
                showConfirmButton: false,
                timer: 1000
            });
        </script>
    @endif

    <script>
        function confirmLogout() {
            Swal.fire({
                title: 'Konfirmasi Logout',
                text: 'Anda yakin ingin logout?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Logout',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logout-form').submit();
                }
            });
        }
    </script>
@endpush
