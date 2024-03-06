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
  
  @include('admin.modal.modalBerkas')
  @include('admin.modal.modalDosen')
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
  <script src="/AdminAssets/js/main.js"></script>
  <script src="/AdminAssets/js/modal.js"></script>
  
  <script type="text/javascript">

$(".dosen").click(function () {
  let name =  $(this).data('name');
  let id =  $(this).data('id');

  let alamat =  $(this).data('alamat');
  let email =  $(this).data('email');
  let noHp =  $(this).data('nohp');
  
  $("#modalUser").attr('action' , `/editDosen/${id}`);
  $("#namaLengkap").val(name);
  $("#alamat").val(alamat);
  $("#email").val(email);
  $("#noHp").val(noHp);

});

$(".draf").click(function () {
  let judul =  $(this).data('judul');
  let penulis =  $(this).data('penulis');
  let kategori =  $(this).data('kategori');
  let ukuran =  $(this).data('ukuran');
  let jumlah_halaman =  $(this).data('jumlah_halaman');
  let cover =  $(this).data('cover');
  let daftar_isi =  $(this).data('daftar_isi');
  let isi_buku =  $(this).data('isi_buku');
  let sinopsis =  $(this).data('sinopsis');
  let id =  $(this).data('id');
  
  $("#formBerkas").attr('action' , `/editBerkas/${id}`);
  $("#judul").val(judul);
  $("#penulis").val(penulis);
  $("#kategori").val(kategori);
  $("#ukuran").val(ukuran);
  $("#jumlah_halaman").val(jumlah_halaman);
  $("#cover").val(cover);
  $("#daftar_isi").val(daftar_isi);
  $("#isi_buku").val(isi_buku);
  $("#sinopsis").val(sinopsis);
  $("#drafCover").attr("href" , `{{ asset('/storage/cover/${cover}') }} ` );
  $("#drafDaftarIsi").attr("href" , `{{ asset('/storage/daftar_isi/${daftar_isi}') }} ` );
  $("#drafIsiBuku").attr("href" , `{{ asset('/storage/isi_buku/${isi_buku}') }} ` );


});
  

 


 

  

 


function check() {
  let syifa = document.getElementById("syifa").checked ; 
   syifa = true;
  if (syifa == true ) {
    document.getElementById('checkAllLabel').style.display = 'block' ; 
    document.getElementById('checkAll').style.display = 'block' ; 
  }
  
}

function checkSemua(){  
  let cek = document.getElementById('checkAll').checked ;
  if (cek == true) {
    console.log('penampakan');
     document.getElementById("syifa").checked = true  ; 
   
  }
      
  }  
  
  function CheckAll(chk)
{
  let cek = document.getElementById('checkAll').checked ;
  if (cek == true) {
    for (i = 0; i < chk.length; i++)
	chk[i].checked = true ;
   
  }
  if (cek == false) {
    for (i = 0; i < chk.length; i++)
	chk[i].checked = false ;
  document.getElementById('checkAllLabel').style.display = 'none' ; 
    document.getElementById('checkAll').style.display = 'none' ; 
  }

 
}

    // const buttonDis = () => {
    //   document.getElementById('buttonEdit').style.display = 'none';
    // }



    $(".user").click(function () {
      let name =  $(this).data('name');
      let id =  $(this).data('id');
      let rt =  $(this).data('rt');
      let rw =  $(this).data('rw');
      let alamat =  $(this).data('alamat');
      let email =  $(this).data('email');
      let nik =  $(this).data('nik');
      let noHp =  $(this).data('nohp');
      
      $("#modalUser").attr('action' , `/editUser/${id}`);
      $("#modalNama").html(name);
      $("#modalAlamat").val(alamat);
      $("#modalRt").val(rt);
      $("#modalRw").val(rw);
      $("#modalNik").val(nik);
      $("#modalNoHp").val(noHp);
      $("#modalEmail").val(email);

});

    $(".edit").click(function () {
      let name =  $(this).data('name');
      let id =  $(this).data('id');
      let rt =  $(this).data('rt');
      let rw =  $(this).data('rw');
      let alamat =  $(this).data('alamat');
      let email =  $(this).data('email');
      let nik =  $(this).data('nik');
      let noHp =  $(this).data('nohp');
      
      $("#modalEdit").attr('action' , `/editUser/${id}`);
      $("#modalNama").html(name);
      $("#modalAlamat").val(alamat);
      $("#modalRt").val(rt);
      $("#modalRw").val(rw);
      $("#modalNik").val(nik);
      $("#modalNoHp").val(noHp);
      $("#modalEmail").val(email);

});

      const makeBidan = () => {
      if (document.getElementById('kelahiranBidan') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const a = document.createElement("a");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','kelahiranBidan');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_kelahiran');
      label.setAttribute('for' , 'modalKelahiran');
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_kelahiran');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'kelahiranButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_kelahiran').innerHTML = 'Bukti Asli Kelahiran dari Bidan';
      
     
    }

      const makeSuratNikah = () => {
      if (document.getElementById('suratNikah') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const a = document.createElement("a");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','suratNikah');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_nikah');
      label.setAttribute('for' , 'modalNikah');
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_nikah');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'nikahButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_nikah').innerHTML = 'Foto Copy Surat Nikah';
      
     
    }

      const makeSuratRs = () => {
      if (document.getElementById('keteranganRs') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const a = document.createElement("a");
      const target = document.getElementById('divKtp');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','keteranganRs');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_suratRs');
      label.setAttribute('for' , 'modalRs');
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_Rs');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'suratRsButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_suratRs').innerHTML = 'Surat Keterangan Dari Rumah Sakit';
      
     
    }
      const makeKtpSaksi1 = () => {
      if (document.getElementById('divSaksi1') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const a = document.createElement("a");
      const target = document.getElementById('kelahiranBidan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divSaksi1');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_saksi1');
      label.setAttribute('for' , 'modalSaksi1');
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_saksi1');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'saksiButton1');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_saksi1').innerHTML = 'Foto Copy KTP Saksi 1';
      
     
    }

      const makeKtpSaksi1Kematian = () => {
      if (document.getElementById('divSaksi1') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const a = document.createElement("a");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divSaksi1');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_saksi1');
      label.setAttribute('for' , 'modalSaksi1');
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_saksi1');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'saksiButton1');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_saksi1').innerHTML = 'Foto Copy KTP Saksi 1';
      
     
    }
      const makeKtpSaksi1Kematian2 = () => {
      if (document.getElementById('divSaksi2') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const a = document.createElement("a");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divSaksi2');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_saksi2');
      label.setAttribute('for' , 'modalSaksi2');
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_saksi2');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'saksiButton2');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_saksi2').innerHTML = 'Foto Copy KTP Saksi 2';
      
     
    }
      const makeKtpSaksi2 = () => {
      if (document.getElementById('divSaksi2') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const a = document.createElement("a");
      const target = document.getElementById('kelahiranBidan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divSaksi2');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_saksi2');
      label.setAttribute('for' , 'modalSaksi2');
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_saksi2');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'saksiButton2');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_saksi2').innerHTML = 'Foto Copy KTP Saksi 2';
      
     
    }

      const makeKtpPelapor = () => {
      if (document.getElementById('divKtpPelapor') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const a = document.createElement("a");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divKtpPelapor');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_pelapor');
      label.setAttribute('for' , 'modalSaksi2'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_pelapor');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'pelaporButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_pelapor').innerHTML = 'Foto Copy KTP Pelapor';
      
     
    }

      const makeNoPelapor = () => {
      if (document.getElementById('divNoPelapor') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divNoPelapor');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_noPelapor');
      label.setAttribute('for' , 'modal_pelapor'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_no');
      input.setAttribute('aria-describedby' , 'button-addon2');
      
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_noPelapor').innerHTML = 'Nomor Telepon Pelapor';
      
     
    }

      const makeKtpIbu = () => {
      if (document.getElementById('divKtpIbu') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const a = document.createElement("a");
      const input = document.createElement("input");
      const target = document.getElementById('divKk');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divKtpIbu');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_ktpIbu');
      label.setAttribute('for' , 'modalKtpIbu'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_ktpIbu');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'ktpIbuButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);

      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_ktpIbu').innerHTML = 'Foto Copy KTP Ibu';
      
     
    }

      const makeKtpAsli = () => {
      if (document.getElementById('divKtpAsli') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const a = document.createElement("a");
      const input = document.createElement("input");
      const target = document.getElementById('divKtp');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divKtpAsli');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'labelKtpAsli');
      label.setAttribute('for' , 'modalKtpAsli'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_ktpAsli');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'ktpAsliButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);

      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('labelKtpAsli').innerHTML = 'KTP Asli';
      
     
    }

      const makeKkOrtu = () => {
      if (document.getElementById('divKkOrtu') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const a = document.createElement("a");
      const input = document.createElement("input");
      const target = document.getElementById('divKk');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divKkOrtu');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_kkOrtu');
      label.setAttribute('for' , 'modalKkOrtu'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_kkOrtu');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'kkOrtuButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);

      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_kkOrtu').innerHTML = 'Foto Copy atau KK Asli Orang Tua';
      
     
    }

      const makePolres = () => {
      if (document.getElementById('divPolres') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const a = document.createElement("a");
      const input = document.createElement("input");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divPolres');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_polres');
      label.setAttribute('for' , 'modalPolres'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_polres');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'polresButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);

      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_polres').innerHTML = 'Surat Keterangan Kehilangan Dari Polsek atau Polres';
      
     
    }

      const makePindah = () => {
      if (document.getElementById('divPindah') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const a = document.createElement("a");
      const input = document.createElement("input");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divPindah');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_pindah');
      label.setAttribute('for' , 'modalPindah'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_pindah');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'pindahButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);

      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_pindah').innerHTML = 'Surat Pindah Dari Kelurahan/Desa/Kota Sebelumny';
      
     
    }

      const makeKuasa = () => {
      if (document.getElementById('divKuasa') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const a = document.createElement("a");
      const input = document.createElement("input");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divKuasa');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_kuasa');
      label.setAttribute('for' , 'modalKuasa'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_kuasa');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'kuasaButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);

      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_kuasa').innerHTML = 'Surat Kuasa Apabila Bukan yang Bersangkutan';
      
     
    }


      const makeIjazahLaki = () => {
      if (document.getElementById('divIjazahLaki') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const a = document.createElement("a");
      const input = document.createElement("input");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divIjazahLaki');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_ijazahLaki');
      label.setAttribute('for' , 'modaIjazahLaki'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_ijazahLaki');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'IjazahLakiButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);

      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_ijazahLaki').innerHTML = 'Foto Copy Ijazah Pengantin Laki - laki';
      
     
    }

      const makeIjazahPerempuan = () => {
      if (document.getElementById('divIjazahPerempuan') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const a = document.createElement("a");
      const input = document.createElement("input");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divIjazahPerempuan');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_ijazahPerempuan');
      label.setAttribute('for' , 'modaIjazahPerempuan'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_ijazahPerempuan');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'IjazahPerempuanButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);

      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_ijazahPerempuan').innerHTML = 'Foto Copy Ijazah Pengantin Perempuan';
      
     
    }

      const makeKtpWanita = () => {
      if (document.getElementById('divKtpWanita') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const a = document.createElement("a");
      const input = document.createElement("input");
      const target = document.getElementById('divKk');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divKtpWanita');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_ktpWanita');
      label.setAttribute('for' , 'modalKtpWanita'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_ktpWanita');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'ktpWanitaButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);

      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_ktpWanita').innerHTML = 'KTP Pengantin Wanita';
      
     
    }

      const makeKkAsliMertua = () => {
      if (document.getElementById('divKkMertua') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const a = document.createElement("a");
      const input = document.createElement("input");
      const target = document.getElementById('divIjazahLaki');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divKkMertua');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_kkMertua');
      label.setAttribute('for' , 'modalKkMertua'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_kkMertua');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'kkMertuaButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);

      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_kkMertua').innerHTML = 'KK Asli Mertua';
    }

      const makeSuratNikahMertua = () => {
      if (document.getElementById('divNikahMertua') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const a = document.createElement("a");
      const input = document.createElement("input");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divNikahMertua');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_nikahMertua');
      label.setAttribute('for' , 'modalNikahMertua'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'inputNikahMertua');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'nikahMertuaButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);

      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_nikahMertua').innerHTML = 'Foto Copy Surat Nikah Mertua';
    }

      const makeSuratNikahOrtu = () => {
      if (document.getElementById('divNikahOrtu') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const a = document.createElement("a");
      const input = document.createElement("input");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divNikahOrtu');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_nikahOrtu');
      label.setAttribute('for' , 'modalNikahOrtu'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'inputNikahOrtu');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'nikahOrtuButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);

      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_nikahOrtu').innerHTML = 'Foto Copy Surat Nikah Orang Tua';
    }

  

    const dismissKelahiran = () => {
      if (document.getElementById("divKtpIbu") != null) {
        document.getElementById('labelKtp').innerHTML = 'KTP ' ;
        document.getElementById('labelKk').innerHTML = 'KK' ;
        document.getElementById("divKtpIbu").remove();
        document.getElementById("divKtpPelapor").remove();
        document.getElementById("divSaksi1").remove();
        document.getElementById("divSaksi2").remove();
        document.getElementById("kelahiranBidan").remove();
        document.getElementById("suratNikah").remove();
        document.getElementById("divNoPelapor").remove();
      } 
     
    }
    const dismissKelahilangan = () => {
      if (document.getElementById("divPolres") != null) {
        document.getElementById('labelKtp').innerHTML = 'KTP ' ;
        document.getElementById('labelKk').innerHTML = 'KK' ;
        document.getElementById("divPolres").remove();
       
      } 
     
    }

    const dismissPindah = () => {
      if (document.getElementById("divPindah") != null) {
        document.getElementById('labelKtp').innerHTML = 'KTP ' ;
        document.getElementById('labelKk').innerHTML = 'KK' ;
        document.getElementById("divPindah").remove();
        document.getElementById("divKuasa").remove();
       
      } 
     
    }

    const dismissKematian = () => {
      if (document.getElementById("keteranganRs") != null) {
        document.getElementById('labelKtp').innerHTML = 'KTP ' ;
        document.getElementById('labelKk').innerHTML = 'KK' ;

        document.getElementById("keteranganRs").remove();
        document.getElementById("divKtpAsli").remove();
        document.getElementById("divKkOrtu").remove();
        document.getElementById("divKtpPelapor").remove();
        document.getElementById("divSaksi1").remove();
        document.getElementById("divNoPelapor").remove();
      } 
     
    }

    const dismissPecah = () => {
      if (document.getElementById("divIjazahLaki") != null) {
        document.getElementById('labelKtp').innerHTML = 'KTP ' ;
        document.getElementById('labelKk').innerHTML = 'KK' ;

        document.getElementById("divIjazahLaki").remove();
        document.getElementById("divIjazahPerempuan").remove();
        document.getElementById("divKtpWanita").remove();
        document.getElementById("divKkMertua").remove();
        document.getElementById("suratNikah").remove();
        document.getElementById("divNikahOrtu").remove();
        document.getElementById("divNikahMertua").remove();
        document.getElementById("divNoPelapor").remove();
      } 
     
    }



    $(".jenis").click(function () {
      dismissKelahiran();
      dismissKematian();
      dismissKelahilangan();
      dismissPindah();
      dismissPecah();
      let ktp =  $(this).data('ktp');
      let ktp2 =  $(this).data('ktp2');
      let ktp_pelapor =  $(this).data('ktp_pelapor');
      let ktp_saksi1 =  $(this).data('ktp_saksi1');
      let ktp_saksi2 =  $(this).data('ktp_saksi2');
      let kk =  $(this).data('kk');
      let kk2 =  $(this).data('kk2');
      let surat_nikah =  $(this).data('surat_nikah');
      let surat_nikah2 =  $(this).data('surat_nikah2');
      let surat_nikah3 =  $(this).data('surat_nikah3');
      let surat_keterangan =  $(this).data('surat_keterangan');
      let no_pelapor =  $(this).data('no_pelapor');
      let nama =  $(this).data('nama');
      let keterangan =  $(this).data('keterangan');
      
      
      $("#modalJenisNama").html(nama);
      $("#modalKTP").val(ktp);
      $("#modalKK").val(kk);
      $("#modalKeterangan").val(keterangan);
      
      $("#ktpButton").attr("href" , `{{ asset('/storage/ktp/${ktp}') }} ` );
      $("#kkButton").attr("href" , `{{ asset('/storage/kk/${kk}') }} ` );
      

      //   KELAHIRAN 
      if (nama === 'Surat Keterangan Kelahiran') {
        document.getElementById('labelKtp').innerHTML = 'Foto Copy Ktp Bapak' ;
        document.getElementById('labelKk').innerHTML = 'KK Asli' ;
        makeBidan();
        makeSuratNikah();
        makeKtpSaksi1();
        makeKtpSaksi2();
        makeKtpPelapor();
        makeNoPelapor();
        makeKtpIbu();
        $("#input_ktpIbu").val(ktp2);
        $("#ktpIbuButton").attr("href" , `{{ asset('/storage/ktpIbu/${ktp2}') }}` );

        $("#input_pelapor").val(ktp_pelapor);
        $("#pelaporButton").attr("href" , `{{ asset('/storage/ktpPelapor/${ktp_pelapor}') }}` );

        $("#input_saksi1").val(ktp_saksi1);
        $("#saksiButton1").attr("href" , `{{ asset('/storage/saksi1/${ktp_saksi1}') }}` );

        $("#input_saksi2").val(ktp_saksi2);
        $("#saksiButton2").attr("href" , `{{ asset('/storage/saksi2/${ktp_saksi2}') }}` );

        $("#input_kelahiran").val(surat_keterangan);
        $("#kelahiranButton").attr("href" , `{{ asset('/storage/kelahiranBidan/${surat_keterangan}') }}` );

        $("#input_nikah").val(surat_nikah);
        $("#nikahButton").attr("href" , `{{ asset('/storage/suratNikah/${surat_nikah}') }}` );

        $("#input_no").val(no_pelapor);
       

      }

      // KEMATIAN
      if (nama === 'Surat Keterangan Pecah KK') {
        document.getElementById('labelKtp').innerHTML = 'KTP Pengantin Laki - laki' ;
        document.getElementById('labelKk').innerHTML = 'KK Asli Orang Tua' ;
        makeIjazahLaki();
        makeIjazahPerempuan();
        makeKtpWanita();
        makeKkAsliMertua();
        makeSuratNikah();
        makeSuratNikahOrtu();
        makeSuratNikahMertua();
        makeNoPelapor();

        $("#input_ijazahLaki").val(surat_keterangan);
        $("#IjazahLakiButton").attr("href" , `{{ asset('/storage/ijazah/${surat_keterangan}') }}` );
        $("#input_ijazahPerempuan").val(ktp_saksi2);
        $("#IjazahPerempuanButton").attr("href" , `{{ asset('/storage/ijazahPerempuan/${ktp_saksi2}') }}` );

        $("#input_ktpWanita").val(ktp2);
        $("#ktpWanitaButton").attr("href" , `{{ asset('/storage/input_ktpWanita/${ktp2}') }}` );

        $("#input_kkMertua").val(kk2);
        $("#kkMertuaButton").attr("href" , `{{ asset('/storage/kkMertua/${kk2}') }}` );

        $("#input_nikah").val(surat_nikah);
        $("#nikahButton").attr("href" , `{{ asset('/storage/suratNikah/${surat_nikah}') }}` );
        $("#inputNikahOrtu").val(surat_nikah2);
        $("#nikahOrtuButton").attr("href" , `{{ asset('/storage/suratOrtu/${surat_nikah2}') }}` );
        $("#inputNikahMertua").val(surat_nikah3);
        $("#nikahMertuaButton").attr("href" , `{{ asset('/storage/suratMertua/${surat_nikah3}') }}` );
       
        
        $("#input_no").val(no_pelapor);
       

      }

      if (nama === 'Surat Keterangan Kematian') {
        document.getElementById('labelKtp').innerHTML = 'Foto Copy KTP' ;
        document.getElementById('labelKk').innerHTML = 'KK Asli' ;
        makeSuratRs();
        makeKtpAsli();
        makeKkOrtu();
        makeKtpSaksi1Kematian();
        makeKtpSaksi1Kematian2();
        makeKtpPelapor();
        makeNoPelapor();

        $("#input_Rs").val(surat_keterangan);
        $("#suratRsButton").attr("href" , `{{ asset('/storage/keteranganRs/${surat_keterangan}') }}` );

        $("#input_ktpAsli").val(ktp2);
        $("#ktpAsliButton").attr("href" , `{{ asset('/storage/ktpAsli/${ktp2}') }}` );

        $("#input_kkOrtu").val(kk2);
        $("#kkOrtuButton").attr("href" , `{{ asset('/storage/kkOrtu/${kk2}') }}` );

        $("#input_pelapor").val(ktp_pelapor);
        $("#pelaporButton").attr("href" , `{{ asset('/storage/ktpPelapor/${ktp_pelapor}') }}` );
        $("#input_saksi1").val(ktp_saksi1);
        $("#saksiButton1").attr("href" , `{{ asset('/storage/saksi1/${ktp_saksi1}') }}` );
        
        $("#input_saksi2").val(ktp_saksi2);
        $("#saksiButton2").attr("href" , `{{ asset('/storage/saksi2/${ktp_saksi2}') }}` );
        
        $("#input_no").val(no_pelapor);
       

      }

      if (nama === 'Surat Keterangan Kehilangan') {
        
       makePolres();

        $("#input_polres").val(surat_keterangan);
        $("#polresButton").attr("href" , `{{ asset('/storage/suratPolsek/${surat_keterangan}') }}` );

       
       

      }

      if (nama === 'Surat Keterangan Pindah Datang') {
        
       makePindah();
      //  makeKuasa();

        $("#input_pindah").val(surat_keterangan);
        $("#pindahButton").attr("href" , `{{ asset('/storage/pindah/${surat_keterangan}') }}` );
        $("#input_kuasa").val(surat_nikah3);
        $("#kuasaButton").attr("href" , `{{ asset('/storage/kuasa/${surat_nikah3}') }}` );

       
       

      }

});
</script>
</body>

</html>