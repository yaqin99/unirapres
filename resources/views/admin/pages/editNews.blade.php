@extends('admin.dashboard')
@section('main')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Berita</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Home</a></li>
          <li class="breadcrumb-item">Edit Berita</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

       
          <div class="card">
           
            <div class="card-body">
                <div class="d-flex justify-content-between">

                  <h5 class="card-title d-flex justify-content-center"></h5>
                  <div class="d-flex align-items-center" id="divCheckAll" >

                   
                  </div>
                </div>
                  
              <!-- Table with hoverable rows -->
              <form action="/editNews/{{$data->id}}" class="signup-form" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group mb-2">
                    <label for="judul" class="text-dark">Judul Berita</label>
                    <div class="input-group">
                      <input type="text" class="form-control" value="{{$data->judul}}" name="judul_berita" id="judul_berita_edit"  aria-describedby="button-addon2">
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="ukuran" class="text-dark" >Gambar</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="gambar" id="gambar_edit"  aria-describedby="button-addon2">
                    </div>
                </div>
                <div class="form-group mb-2">
                    <img style="max-width:300px; height:auto;" src="{{ asset('/storage/gambar_berita/'.$data->gambar) }}" alt="">

                </div>
                <div class="form-group mb-2">
                    <label for="kategori" class="text-dark" >Deskripsi Gambar</label>
                    <div class="input-group">
                        <input type="text" class="form-control" value="{{$data->deskripsi_gambar}}" name="deskripsi_gambar" id="deskripsi_gambar_edit"  aria-describedby="button-addon2">
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label  class="form-label">Kategori Berita</label>
                    <select class="form-select" required name="kategori" id="kategori_berita_edit" aria-label="Default select example">                    
                      <option value="{{$data->kategoriBerita->id}}" selected>{{$data->kategoriBerita->nama_kategori}}</option>
                      @foreach ($kategori as $k)        
                      <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                      @endforeach
                      
                    </select>
                  </div>
                
                <div class="form-group mb-2">
                    <label for="jumlah_halaman" class="text-dark" >Tanggal</label>
                    <div class="input-group">
                        <input type="datetime-local" class="form-control" value="{{$data->tanggal}}" name="tanggal" id="tanggal_edit"  aria-describedby="button-addon2">
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="sinopsis" class="text-dark">Isi Berita</label>
                    <textarea name="isi_berita" id="isi_berita_edit"  class="form-control"  >{{$data->isi}}</textarea>
                </div>
                <div class="form-group mb-2">
                    <label for="ukuran" class="text-dark" >Author</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="author" value="{{$data->pengirim}}" id="author_edit"  aria-describedby="button-addon2">
                    </div>
                </div>
                <div class="form-group mb-2 d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Konfirmasi</button>
                </div>
            </div>
        </form>
              
              <!-- End Table with hoverable rows -->

       
              

            </div>
         

          </div>

       
        </div>
      </div>
    </section>

      
    
  

  
@endsection