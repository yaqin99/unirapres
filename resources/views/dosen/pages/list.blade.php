<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Unira Press</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="/images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   </head>
   <body>
      @include('dosen.component.navbar')
      <!-- about section start -->
      <!-- about section end -->

      <div class="coffee_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="coffee_taital">List Pengajuan</h1>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row col-2 d-flex justify-content-start mb-3">
               <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#pengajuan">Tambah Buku</button>
            </div>
         </div>
       </div>
       <div class="container">
         <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                {{-- <th scope="col">Tanggal</th> --}}
                <th scope="col">Rincian</th>
                <th scope="col">Catatan</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
               @foreach ($buku as $sari)
                 
               <tr>
                 <th scope="row">{{ $loop->index + 1}}</th>
                 <td>{{ $sari->judul_buku}}</td>
                 {{-- <td>{{ \Carbon\Carbon::parse($sari->tanggal)->isoFormat(' dddd, D MMMM Y')}}</td> --}}
                 <td><a href="" id="buttonBerkas" onclick="set({{$sari}})" data-bs-toggle="modal" data-bs-target="#modalBerkasBuku" class="btn btn-outline-secondary"><i class="bi bi-file-earmark-pdf-fill"></i></a></td>
                 <td><a href="" class="btn btn-outline-secondary"
                  onclick="setComment({{$sari->comment}})" data-bs-toggle="modal" data-bs-target="#modalComment" class="btn btn-secondary"><i class="bi bi-chat-dots-fill"></i></a></td>
                 <td>{{ $sari->status}}</td>
               </tr>
               @endforeach
             </tbody>
          </table>
       </div>

        
      @include('dosen.component.footer')
      <!-- footer section end -->
      @include('dosen.component.modalPengajuan')
      @include('dosen.component.modalBerkasBuku')
      @include('dosen.component.modalComment')
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">Programmed By Fahrosi Angger Kelana 2024</p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="/js/jquery.min.js"></script>
      <script src="/js/popper.min.js"></script>
      <script src="/js/bootstrap.bundle.min.js"></script>
      <script src="/js/jquery-3.0.0.min.js"></script>
      <script src="/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="/js/custom.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
      <script>

         function setComment (data){
            console.log(data.body);
            $("#komentar").text(data.body);


         }
         
         function set (data) {

         $("#edit_sinopsis").val(data.sinopsis);
         $("#form_edit_pengajuan").attr('action' , `/dosen/listPengajuan/editPengajuan/${data.id}`);
         $("#edit_judul").val(data.judul_buku);
         $("#edit_penulis").val(data.penulis);
         $("#edit_ukuran").val(data.ukuran);
         $("#edit_jumlah_halaman").val(data.jumlah_halaman);
         $("#edit_tanggal_buku").val(data.tanggal);
        
         $("#edit_cover").val(data.cover);
         $("#edit_cover_view").attr('href',`{{ asset('/storage/cover/${data.cover}') }}`);
         $("#edit_daftar_isi_view").attr('href',`{{ asset('/storage/daftar_isi/${data.daftar_isi}') }}`);
         $("#edit_isi_buku_view").attr('href',`{{ asset('/storage/isi_buku/${data.isi_buku}') }}`);
         $("#edit_daftar_isi").val(data.daftar_isi);
         $("#edit_isi_buku").val(data.isi_buku);
         

         

         }
      </script>
   </body>
</html>