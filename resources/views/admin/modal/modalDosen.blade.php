<div class="modal fade" id="modalDosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Profil Dosen</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4 py-5 p-md-5">      
            <form class="signup-form" id="modalUser">
                <div class="form-group mb-2">
                    <label for="namaLengkap" class="text-dark">Nama Lengkap</label>
                    <input type="text"  class="form-control" id="namaLengkap">
                </div>
                <div class="form-group mb-2">
                    <label for="alamat" class="text-dark">Alamat</label>
                    <input type="text"  class="form-control" id="alamat">
                </div>
                <div class="form-group mb-4">
                  <label for="email" class="text-dark">Email</label>
                  <input type="email"  class="form-control" id="email">
                </div>
                <div class="form-group mb-2">
                    <label for="noHp" class="text-dark">Nomor Telepon</label>
                    <input type="text"  class="form-control" id="noHp">
                </div>
                {{-- <div class="d-flex justify-content-end">
                  <button id="buttonEdit" class="btn btn-warning">Update</button>
                </div>   --}}
          </form>
        </div>
       
      </div>
    </div>
  </div>