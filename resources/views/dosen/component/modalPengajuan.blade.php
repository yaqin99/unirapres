<div class="modal fade" id="pengajuan" tabindex="-1" aria-labelledby="pengajuan" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="judulModal">Formulir Pengajuan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="dismiss()" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" id="form_input" action="/addPengajuan" name="form" enctype="multipart/form-data">
            @csrf
            <div class="mb-3" id="divJudul">
              <label for="judul" class="form-label">Judul Buku</label>
              <input type="text"  class="form-control" required name="judul" id="judul">
            </div>
            <div class="mb-3" id="divPenulis">
              <label for="penulis" class="form-label">Penulis</label>
              <input type="text"  class="form-control" required name="penulis" id="penulis">
            </div>
            <div class="mb-3" id="divUkuran">
              <label for="ukuran" class="form-label">Ukuran</label>
              <input type="text"  class="form-control" required name="ukuran" id="ukuran">
            </div>
            <div class="mb-3" id="divJumlah">
              <label for="jumlah_halaman"  class="form-label">Jumlah Halaman</label>
              <input type="text"  class="form-control" required name="jumlah_halaman" id="jumlah_halaman">
            </div>
            <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" required name="kategori" id="kategori" aria-label="Default select example">                    
                      <option selected>Pilih -</option>
                      @foreach ($kategori as $k)        
                      <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                      @endforeach
                      
                    </select>
                  </div>
            <div class="mb-3" id="divTanggal">
              <label for="tanggal"  class="form-label">Tanggal</label>
              <input type="date"  class="form-control" required name="tanggal" id="tanggal">
            </div>
            <div class="mb-3" id="divCover">
              <label for="cover" class="form-label">Cover</label>
              <input type="file"  class="form-control" required name="cover" id="cover">
            </div>
            <div class="mb-3" id="divDaftarIsi">
              <label for="daftar_isi" class="form-label">Daftar Isi</label>
              <input type="file"  class="form-control" required name="daftar_isi" id="daftar_isi">
            </div>
            <div class="mb-3" id="divIsiBuku">
              <label for="isi_buku" class="form-label">Isi Buku</label>
              <input type="file"  class="form-control" required name="isi_buku" id="isi_buku">
            </div>
            
            <div class="mb-3" id="divSinopsis">
              <label for="sinopsis" class="form-label mb-2">Sinopsis</label>
              <textarea class="form-control" required name="sinopsis"  id="sinopsis" ></textarea>
            </div>
            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
          </div>
          <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="confirm_button" class="btn btn-success">Konfirmasi</button>
          </div>
        </form>
      </div>
    </div>
  </div>