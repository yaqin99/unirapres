
        <div class="col-3">
        <h2 class="text-center">Form Dosen</h2>
        <form method="POST" action="/addDosen" name="form" enctype="multipart/form-data">
          @csrf
          <div class="mb-3" id="divNama">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text"  class="form-control" name="nama" id="nama">
          </div>
          <div class="mb-3" id="divUsername">
            <label for="username" class="form-label">Username</label>
            <input type="text"  class="form-control" name="username" id="username">
          </div>
          <div class="mb-3" id="divPassword">
            <label for="password" class="form-label">Password</label>
            <input type="text"  class="form-control" name="password" id="password">
          </div>
          <div class="mb-3" id="divEmail">
            <label for="email"  class="form-label">Email</label>
            <input type="text"  class="form-control" name="email" id="email">
          </div>
          <div class="mb-3" id="divAlamat">
            <label for="alamat"  class="form-label">Alamat</label>
            <input type="text"  class="form-control" name="alamat" id="alamat">
          </div>
          <div class="mb-3" id="divNoHp">
            <label for="no_hp"  class="form-label">No. Telepon</label>
            <input type="text"  class="form-control" name="no_hp" id="no_hp">
          </div>
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <button type="submit" id="confirm_button" class="btn btn-success">Konfirmasi</button>
        
       </form>
      </div>
      
   