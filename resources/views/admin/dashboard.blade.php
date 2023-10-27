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
          <h4>Users</h4>
          <p><b>5</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small info coloured-icon"><i class="icon bi bi-heart fs-1"></i>
        <div class="info">
          <h4>Likes</h4>
          <p><b>25</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small warning coloured-icon"><i class="icon bi bi-folder2 fs-1"></i>
        <div class="info">
          <h4>Uploades</h4>
          <p><b>10</b></p>
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
    </div>
  </div>
@endsection

@push('script')
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
