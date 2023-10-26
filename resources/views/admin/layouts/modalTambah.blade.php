<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label class="font-weight-bold">GAMBAR</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                    <!-- error message untuk title -->
                    @error('image')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">JUDUL</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Post">

                    <!-- error message untuk title -->
                    @error('title')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">KONTEN</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>

                    <!-- error message untuk content -->
                    @error('content')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                  </div>

            </form>
        </div>

      </div>
    </div>
  </div>
