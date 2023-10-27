<!-- Modal Edit -->
<div class="modal fade" id="modalLihat-{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">{{$post->title}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="background-color:rgb(255, 255, 255)" >
            <div class="container mt-5 mb-5" >
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card border-0 shadow-sm rounded">
                            <div class="card-body" >
                                <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded">
                                <hr>
                                <h4>{{ $post->title }}</h4>
                                <p class="tmt-3">
                                    {!! $post->content !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</div>
