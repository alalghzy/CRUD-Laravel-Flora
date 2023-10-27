<!-- Modal -->
<div class="modal fade" id="modalData" tabindex="-1" aria-labelledby="modalDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalDataLabel">Data Terinput</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <th>GAMBAR</th>
                            <th>NAMA</th>
                            <th>DESKRIPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($datas->count())
                            @foreach ($datas as $key => $post)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ asset('/storage/posts/' . $post->image) }}" class="shadow-sm rounded"
                                            style="width: 150px">
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{!! $post->content !!}</td>
                            @endforeach
                        @else
                            <div class="alert alert-danger">
                                Data belum tersedia !
                            </div>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Kembali</button>
              </div>
        </div>
    </div>
</div>
</div>
