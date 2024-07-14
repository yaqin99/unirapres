<div class="modal fade" id="modalNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-center">
            <h5 class="modal-title ">Tambah Berita</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4 py-5 p-md-5">        
            <form action="/addNews" class="signup-form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                    <label for="judul" class="text-dark">Judul Berita</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="judul_berita" id="judul_berita"  aria-describedby="button-addon2">
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="ukuran" class="text-dark" >Gambar</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="gambar" id="gambar"  aria-describedby="button-addon2">
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="kategori" class="text-dark" >Deskripsi Gambar</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="deskripsi_gambar"   aria-describedby="button-addon2">
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label  class="form-label">Kategori Berita</label>
                    <select class="form-select" required name="kategori"  aria-label="Default select example">                    
                      <option selected>Pilih -</option>
                      @foreach ($kategori as $k)        
                      <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                      @endforeach
                      
                    </select>
                  </div>
                
                <div class="form-group mb-2">
                    <label for="jumlah_halaman" class="text-dark" >Tanggal</label>
                    <div class="input-group">
                        <input type="datetime-local" class="form-control"  name="tanggal"  aria-describedby="button-addon2">
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="sinopsis" class="text-dark">Isi Berita</label>
                    <textarea name="isi_berita" class="form-control"  ></textarea>
                </div>
                <div class="form-group mb-2">
                    <label for="ukuran" class="text-dark" >Author</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="author" id="author"  aria-describedby="button-addon2">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Konfirmasi</button>
            </div>
        </form>
      </div>
    </div>
  </div>