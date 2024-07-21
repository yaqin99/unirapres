<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Unira Press | Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('202fd5e3645191f0a99b', {
      cluster: 'ap1'
    });
    
    const playSound = () => {
      var audio =  new Audio('/sounds/bell.mp3');
      audio.play();

    }
    const stopSound = () => {
      var audio =  new Audio('/sounds/bell.mp3');
      audio.pause();

    }
   
    // audio.muted = true ; 
    // audio.autoplay = true ; 
    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data)  {
      playSound();
      swal({
              title: `Ada Pengajuan Surat Baru`,
              text: 'Harap Segera di Proses',
              icon: 'info'
            }).then(() => {
              stopSound();
              window.location.href = "/admin";
              // window.location.reload();
            })
      // alert(JSON.stringify(data));
    });
  </script>

  <!-- Favicons -->
  <link href="/AdminAssets/img/unira.png" rel="icon">
  <link href="/AdminAssets/img/unira.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="/modalAssets/css/ionicons.min.css">
	<link rel="stylesheet" href="/modalAssets/css/style.css">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="/AdminAssets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/AdminAssets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/AdminAssets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/AdminAssets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/AdminAssets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/AdminAssets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/AdminAssets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

  <!-- Template Main CSS File -->
  <link href="/AdminAssets/css/style.css" rel="stylesheet">

  <style>
    .swal-button--confirm {
      background-color: #DD6B55;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.component.sideBar')
  @include('admin.component.navBar')
  <!-- End Sidebar-->
 
  @yield('main')
  
  @include('admin.modal.modalBaru')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Universitas Madura</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      {{-- Programed by <a href="https://bootstrapmade.com/">Moh. Ainul Yaqin</a> --}}
      Programed by <a >Fahrosi Angger Kelana</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/js/app.js"></script>
  <script src="/AdminAssets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/AdminAssets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/AdminAssets/vendor/chart.js/chart.umd.js"></script>
  <script src="/AdminAssets/vendor/echarts/echarts.min.js"></script>
  <script src="/AdminAssets/vendor/quill/quill.min.js"></script>
  <script src="/AdminAssets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/AdminAssets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/AdminAssets/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="/modalAssets/js/jquery.min.js"></script>
  <script src="/modalAssets/js/popper.js"></script>
  <script src="/modalAssets/js/bootstrap.min.js"></script>
  <script src="/modalAssets/js/main.js"></script>

 
  <!-- Template Main JS File -->
  <script src="AdminAssets/js/main.js"></script>
  
  <script type="text/javascript">




function setComment(data){
  $("#formComment").attr('action' , `/admin/pengajuan/editComment/${data.id}`);
  $("#theId").val(data.id);
  $("#isi_komen").val(data.comment.body);
  console.log([
    data.id , 
    data.comment.body
  ]);
}


function setDosen (data){
  $("#namaLengkap").val(data.nama_depan.concat(" ",data.nama_belakang));
  $("#alamat").val(data.alamat);
  $("#email").val(data.email);
  $("#no_hp").val(data.no_hp);
}



function berkas (data) {

  // let judul =  $(this).data('judul');
  // let penulis =  $(this).data('penulis');
  // let kategori =  $(this).data('kategori');
  // let ukuran =  $(this).data('ukuran');
  // let jumlah_halaman =  $(this).data('jumlah_halaman');
  // let cover =  $(this).data('cover');
  // let daftar_isi =  $(this).data('daftar_isi');
  // let isi_buku =  $(this).data('isi_buku');
  // let sinopsis =  $(this).data('sinopsis');
  // let id =  $(this).data('id');

  // $("#judul").attr('action' , `/editUser/${id}`);

  $("#judul").val(data.judul_buku);
  $("#penulis").val(data.penulis);
  $("#kategori").val(data.kategori.nama_kategori);
  $("#ukuran").val(data.ukuran);
  $("#jumlah_halaman").val(data.jumlah_halaman);
  $("#cover").val(data.cover);
  $("#drafCover").attr("href" , `{{ asset('/storage/cover/${data.cover}') }}` );
  $("#daftar_isi").val(data.daftar_isi);
  $("#drafDaftarIsi").attr("href" , `{{ asset('/storage/daftar_isi/${data.daftar_isi}') }}` );
  $("#isi_buku").val(data.isi_buku);
  $("#drafIsiBuku").attr("href" , `{{ asset('/storage/isi_buku/${data.isi_buku}') }}` );
  $("#sinopsis").val(data.sinopsis);



}

</script>
</body>

</html>