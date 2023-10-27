<!-- Modal -->
<div class="modal fade" id="modalData" tabindex="-1" aria-labelledby="modalDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalDataLabel">Data Terinput</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div id="post-list">
                    @include('admin.includes.post-list')
                </div>

                <nav id="pagination">
                    <ul class="pagination">
                        <li class="page-item" data-page="{{ $datas->previousPageUrl() ? $datas->currentPage() - 1 : null }}">
                            <a class="page-link" href="javascript:void(0)">Previous</a>
                        </li>
                        <li class="page-item" data-page="{{ $datas->nextPageUrl() ? $datas->currentPage() + 1 : null }}">
                            <a class="page-link" href="javascript:void(0)">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>
