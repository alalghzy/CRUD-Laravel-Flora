@extends('layouts.admin')

@section('title')
    CRUD
@endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> Laman CRUD</h1>
            <p>Disini Anda bisa menambahkan, melihat, mengedit, dan menghapus data!</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item active"><a href="/crud">CRUD</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal"
                            data-bs-target="#modalTambah"><i class="bi bi-plus-square "></i> Tambah Data</button>
                        @include('admin.includes.modalTambah')
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>GAMBAR</th>
                                    <th>NAMA</th>
                                    <th>DESKRIPSI</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($posts->count())
                                    @foreach ($posts as $key => $post)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ asset('/storage/posts/' . $post->image) }}" class="shadow-sm rounded"
                                                    style="width: 150px">
                                            </td>
                                            <td>{{ $post->title }}</td>
                                            <td>{!! $post->content !!}</td>
                                            <td class="text-center edit" style="align-content: center; align-items: center; ">
                                                <form action="{{ route('crud.destroy', $post->id) }}" method="POST">
                                                        <button type="button" class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#modalLihat-{{ $post->id }}"><i class="bi bi-eye"></i></button>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modalEdit-{{ $post->id }}"><i
                                                            class="bi bi-pencil-square"></i></button>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modalHapus-{{ $post->id }}"><i
                                                            class="bi bi-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @include('admin.includes.modalHapus')
                                        @include('admin.includes.modalEdit')
                                        @include('admin.includes.modalLihat')
                                    @endforeach
                                @else
                                    <div class="alert alert-danger">
                                        Data belum tersedia, silahkan &ensp;<button style="font-size: 10px;" type="button"
                                            class="btn btn-sm btn-success" data-bs-toggle="modal"
                                            data-bs-target="#modalTambah" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Edit data"><i class="bi bi-plus-square "></i> Tambah Data</button>
                                        &ensp;!
                                    </div>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    {{-- Sweet Alert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('data'))
        <script>
            Swal.fire({
                title: 'Sukses!',
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

    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>

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

        CKEDITOR.replaceAll('edit');
    </script>

@endpush
