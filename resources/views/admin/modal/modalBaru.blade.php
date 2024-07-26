<div class="modal fade" id="modalBaru" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-center">
            <h5 class="modal-title ">Berikan Komentar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4 py-5 p-md-5">        
            <form id="formComment" class="signup-form" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group mb-2">
                    <label for="sinopsis" class="text-dark">Komentar</label>
                    <textarea name="comment" required id="isi_komen" class="form-control"></textarea>
                </div>
                <input type="text" name="theId" id="theId" hidden>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Konfirmasi</button>
            </div>
        </form>
      </div>
    </div>
  </div>