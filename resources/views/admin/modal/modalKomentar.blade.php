<div class="modal fade" id="modalKomentar" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambahkan Catatan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4 py-5 p-md-5">      
            <form class="signup-form" method="POST" action="/addCatatan">
                @csrf
                <div class="form-group mb-2">
                    <label for="namaLengkap" class="text-dark">Catatan</label>
                    <textarea class="form-control" name="catatan">
                </div>
                <div class="d-flex justify-content-end">
                  <button  class="btn btn-warning">Konfirmasi</button>
                </div>  
          </form>
        </div>
       
      </div>
    </div>
</div>