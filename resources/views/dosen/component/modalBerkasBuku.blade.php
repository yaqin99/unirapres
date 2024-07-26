<div class="modal fade" id="modalBerkasBuku" tabindex="-1" aria-labelledby="pengajuan" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="judulModal">Rincian Pengajuan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="dismiss()" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" id="form_edit_pengajuan" name="form" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3" >
              <label for="judul" class="form-label">Judul Buku</label>
              <input type="text"  class="form-control" required name="edit_judul" id="edit_judul">
            </div>
            <div class="mb-3" >
              <label for="penulis" class="form-label">Penulis</label>
              <input type="text"  class="form-control" required name="edit_penulis" id="edit_penulis">
            </div>
            <div class="mb-3" >
              <label for="ukuran" class="form-label">Ukuran</label>
              <input type="text"  class="form-control" required name="edit_ukuran" id="edit_ukuran">
            </div>
            <div class="mb-3" >
              <label for="jumlah_halaman"  class="form-label">Jumlah Halaman</label>
              <input type="text"  class="form-control" required name="edit_jumlah_halaman" id="edit_jumlah_halaman">
            </div>
            {{-- <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" required name="edit_kategori" id="edit_kategori" aria-label="Default select example">                    
                      <option  selected>Pilih -</option>
                      @foreach ($kategori as $k)        
                      <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                      @endforeach
                      
                    </select>
                  </div> --}}
            <div class="mb-3" >
              <label for="tanggal"  class="form-label">Tanggal</label>
              <input type="datetime-local"  class="form-control" required name="edit_tanggal" id="edit_tanggal_buku">
            </div>
            <div class="mb-3" >
              <label for="cover" class="form-label">Cover</label>
              <div class="input-group">
                <input type="text" class="form-control" id="edit_cover" required  aria-describedby="button-addon2">
                <a target="blank" class="btn btn-outline-secondary" id="edit_cover_view">View</a>
                <input type="file"  class="form-control ml-3"  name="cover_ubah" >

            </div>
            </div>
            <div class="mb-3" >
              <label for="daftar_isi" class="form-label">Daftar Isi</label>
              <div class="input-group">

              <input type="text"  class="form-control" required name="edit_daftar_isi" id="edit_daftar_isi" aria-describedby="button-addon2">
              <a target="blank" class="btn btn-outline-secondary" id="edit_daftar_isi_view">View</a>
              <input type="file"  class="form-control ml-3"  name="daftar_isi_ubah" >

            </div>
            </div>
            <div class="mb-3" >
              <label for="isi_buku" class="form-label">Isi Buku</label>
              <div class="input-group">

              <input type="text"  class="form-control" required name="edit_isi_buku" id="edit_isi_buku" aria-describedby="button-addon2">
              <a target="blank" class="btn btn-outline-secondary" id="edit_isi_buku_view">View</a>
              <input type="file"  class="form-control ml-3"  name="isi_buku_ubah" >

            </div>
            </div>
            
            <div class="mb-3" >
              <label for="sinopsis" class="form-label mb-2">Sinopsis</label>
              <textarea class="form-control" name="edit_sinopsis" required id="edit_sinopsis" ></textarea>
            </div>
          </div>
          <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="confirm_button" class="btn btn-success">Konfirmasi</button>
          </div>
        </form>
      </div>
    </div>
  </div>