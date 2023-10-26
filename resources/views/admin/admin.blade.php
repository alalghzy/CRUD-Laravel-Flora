@extends('layouts.app')

@section('tittle')
Dashboard Admin
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-start">
        <div class="col-md-12">
            <div class="card px">
                <div class="card-header" style="background:  #fd7e14; color:azure;">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Selamat datang
                        @if (Auth::check())
                        {{ Auth::user()->name}}
                        @endif
                         !</h3>
                    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
                    @include('admin.layouts.modalTambah')
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">GAMBAR</th>
                <th scope="col">JUDUL</th>
                <th scope="col">CONTENT</th>
                <th scope="col">AKSI</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($posts as $post)
                <tr>
                    <td class="text-center">
                        <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
                    </td>
                    <td>{{ $post->title }}</td>
                    <td>{!! $post->content !!}</td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('dashboard_admin.destroy', $post->id) }}" method="POST">
                            <a href="{{ route('dashboard_admin.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                            <a href="{{ route('dashboard_admin.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                    </td>
                </tr>
              @empty
                  <div class="alert alert-danger">
                      Data Post belum Tersedia.
                  </div>
              @endforelse
            </tbody>
          </table>
          {{ $posts->links() }}

          <nav aria-label="Page navigation example">
            <ul class="pagination">

              <li class="page-item"><a class="page-link" href="#"></a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>

                </div>
            </div>
        </div>

        {{-- <div class="col-md-1">
            <div class="card px">
                <div class="card-header" style="background:  #fd7e14; color:azure;">+</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <h3><strong>+</strong></h3>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
