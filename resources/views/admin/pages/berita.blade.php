@extends('admin.dashboard')
@section('main')

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

                  <h5 class="card-title d-flex justify-content-center">List Berita</h5>
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
                <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Dosen</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Rincian</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                 
                  @foreach ($data as $syifa)
                    
                 
                  <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td><a href="#"  class="dosen text-dark" data-bs-toggle="modal" data-bs-target="#modalDosen" 
                      data-name="{{ $syifa->dosen->name }}"
                     
                      data-alamat="{{ $syifa->dosen->alamat }}"
                      data-email="{{ $syifa->dosen->email }}" 
                     
                      data-noHp="{{ $syifa->dosen->no_hp }}"
                      data-id="{{ $syifa->dosen->id }}" 
                      >
                      
                      {{ $syifa->dosen->name }}</a>
                    </td>

                    <td>{{ $syifa->judul_buku }}</td>
                    <td>{{\Carbon\Carbon::parse($syifa->tanggal)->isoFormat(' dddd, D MMMM Y').' '.\Carbon\Carbon::parse($syifa->tanggal)->format('H:i:s').' WIB' }}</td>
                   
                    <td><a href="#" id="change"  class="draf text-dark" data-bs-toggle="modal" data-bs-target="#modalBerkas" 
                      data-judul="{{ $syifa->judul_buku }}"
                     
                      data-penulis="{{ $syifa->penulis }}"
                      data-kategori="{{ $syifa->kategori->nama_kategori }}" 
                      data-ukuran="{{ $syifa->ukuran }}"
                      data-jumlah_halaman="{{ $syifa->jumlah_halaman }}"
                      data-cover="{{ $syifa->cover }}"
                      data-daftar_isi="{{ $syifa->daftar_isi }}"
                      data-isi_buku="{{ $syifa->isi_buku }}"
                      data-sinopsis="{{ $syifa->sinopsis }}"
                      data-id="{{ $syifa->dosen->id }}" 
                      >
                      
                      Rincian</a>
                    </td>
                    <td>{{ $syifa->status }}</td>
                    <form action="/terbit/{{ $syifa->id }}" method="POST">
                      @method('put')
                      @csrf
                      <td><button type="submit" class="btn btn-warning">Terbitkan</button></td>
                    </form>
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