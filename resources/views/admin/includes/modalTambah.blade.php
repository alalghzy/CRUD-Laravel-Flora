<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('crud.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label class="font-weight-bold mb-2">GAMBAR</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                    <!-- error message untuk image -->
                    @error('image')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold mb-2 mt-3">JUDUL</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Post">

                    <!-- error message untuk title -->
                    @error('title')
                        <div class="alert alert-danger mt-2 ">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold mb-2 mt-3">KONTEN</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>

                    <!-- error message untuk content -->
                    @error('content')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-chevron-left"></i> Kembali</button>
                    <button type="submit" class="btn btn-success"><i class="bi bi-plus-square "></i> Tambah Data</button>
                </div>

            </form>
        </div>

    </div>
    </div>
</div>
