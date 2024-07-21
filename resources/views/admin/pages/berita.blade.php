@extends('admin.dashboard')
@section('main')
@include('admin.modal.modalNews')
@include('admin.modal.modalEdit') 

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Berita</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/berita">Home</a></li>
          <li class="breadcrumb-item">Berita</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

       
          <div class="card">
            
            <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div class="container col-12">
                    <div class="row">
                      <span class="card-title d-flex justify-content-between">
                        List Berita
                        <button class="btn btn-warning col-2" data-bs-toggle="modal" data-bs-target="#modalNews">Tambah Berita</button>
                      </span>

                    </div>
                  </div>
                  
                  <div class="d-flex align-items-center" id="divCheckAll" >

                    <div class="form-check">
                      <input class="form-check-input" id="checkAll" onclick="CheckAll(document.formTable.syifa)"  name="zaihan"  type="checkbox" style="display: none ;">
                      <label class="form-check-label" for="flexCheckChecked" id="checkAllLabel" style="display: none ;">
                        <strong>  
                           Pilih Semua
                        </strong>
                      </label>
                    
                    </div>
                  </div>
                </div>
                  
              <!-- Table with hoverable rows -->
              <div class="table-responsive">
                <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Berita</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Isi Berita</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Deskripsi Gambar</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $syifa)
                    
                 
                  <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td><a href="#"  class="dosen text-dark">{{ $syifa->judul }}</a>
                    </td>
                    <td>{{ $syifa->kategoriBerita->nama_kategori }}</td>
                    <td>{{ $syifa->isi }}</td>
                    <td><a style="color: black;" target="blank" href="{{ '/storage/gambar_berita/'.$syifa->gambar}}">{{ $syifa->gambar }}</a></td>
                    <td> 
                      {{$syifa->deskripsi_gambar}}
                    </td>
                    <td>{{\Carbon\Carbon::parse($syifa->tanggal)->isoFormat(' dddd, D MMMM Y').' '.\Carbon\Carbon::parse($syifa->tanggal)->format('H:i:s').' WIB' }}</td>                    
                    <td>
                        <div class="btn-group">
                          
                          <a href="/editNews/{{$syifa->id}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i>
                          </a>
                          <form method="POST" action="/deleteBerita/{{ $syifa->id }}">
                            @csrf
                            <button class="btn btn-danger"><i class="bi bi-trash-fill"></i>
                            </button>
                          </form>
                        </div>
                    </td>
                    
                  </tr>
                  @endforeach
                 
                
                </tbody>
              </table>
              </div>
              <div class="d-flex justify-content-start">

                {{ $data->links() }}
                
                 
              </div>
            </div>
         

          </div>

       
        </div>
      </div>
    </section>
   
    
  	

       
       
       

      
    
  </main>
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

  <script>
     document.querySelector('#formPengajuan').addEventListener('submit', function(e) {
      var form = this;
      
      e.preventDefault();
      
      swal({
          title: "Apakah Anda Yakin?",
          text: "Surat Sudah Selesai!",
          icon: "info",
          buttons: [
            'Batal',
            'Konfirmasi'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            swal({
              title: 'Surat Sedang Kami Kerjakan',
              text: 'Surat Dalam Proses',
              icon: 'success'
            }).then(function() {
              form.submit();
            });
          } else {
            swal("Batal", "Konfirmasi di Batalkan", "error");
          }
        });
    });


    document.querySelector('#form1').addEventListener('submit', function(e) {
      var form = this;
      
      e.preventDefault();
      
      swal({
          title: "Apakah Anda Yakin?",
          text: "Keluar Dari Halaman Admin!",
          icon: "info",
          buttons: [
            'Batal',
            'Keluar'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            swal({
              title: 'Log out!',
              text: 'Logout Berhasil, Semoga Hari Anda Menyenangkan',
              icon: 'success'
            }).then(function() {
              form.submit();
            });
          } else {
            swal("Batal", "Logout di Batalkan", "error");
          }
        });
    });

  </script>
@endsection