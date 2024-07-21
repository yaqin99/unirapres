@extends('admin.dashboard')
@section('main')

@include('admin.modal.modalBerkas')
@include('admin.modal.modalDosen')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Pengajuan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Home</a></li>
          <li class="breadcrumb-item">Pengajuan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

       
          <div class="card">
            
            <div class="card-body">
                <div class="d-flex justify-content-between">

                  <h5 class="card-title d-flex justify-content-center">List Pengajuan</h5>
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
                    <th scope="col">Catatan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                 
                  @foreach ($data as $syifa)
                    
                 
                  <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td><a href="#" onclick="setDosen({{$syifa->dosen}})"  class="dosen text-dark" data-bs-toggle="modal" data-bs-target="#modalDosen">
                      
                      {{ $syifa->dosen->nama_depan." ".$syifa->dosen->nama_belakang }}</a>
                    </td>

                    <td>{{ $syifa->judul_buku }}</td>
                    <td>{{\Carbon\Carbon::parse($syifa->tanggal)->isoFormat(' dddd, D MMMM Y') }}</td>
                   
                    <td><a href="#" onclick="berkas({{$syifa}})"  class="draf  btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalBerkas"><i class="bi bi-file-earmark-pdf-fill"></a></td>
                    <td><a href="#" onclick="setComment({{$syifa}})" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalBaru" ><i class="bi bi-chat-dots-fill"></i></a></td>
                    <form action="/terbit/{{ $syifa->id }}" method="POST">
                      @method('put')
                      @csrf
                      <td><button type="submit" onclick="return confirm('Apakah Anda Yaqin Menerbitkan Buku Ini?')" class="{{$syifa->status == 'Terbit' ? 'btn btn-success' : 'btn btn-secondary'}}">{{ $syifa->status == 'Terbit' ? 'Terbit' : 'Belum Terbit'}}</button></td>
                    </form>
                    <td>
                      <div class="btn-group">
  
                        <form method="POST" action="/deletePengajuan/{{ $syifa->id }}">
                          @csrf
                          <button onclick="return confirm('Apakah Anda Yakin Menghapus Buku Ini ?')" class="btn btn-danger"><i class="bi bi-trash-fill"></i>
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