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
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   </head>
   <body>
      @include('dosen.component.navbar')
      <!-- about section start -->
      <!-- coffee section start -->
      <div class="coffee_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <h1 class="coffee_taital">LIST BUKU</h1>
              </div>
           </div>
        </div>
        <div class="coffee_section_2">
           <div id="main_slider" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                 <div class="carousel-item active">
                    <div class="container-fluid">
                       <div class="row">
                        @foreach ($data as $sari )            
                          <div class="col-lg-3 col-md-6">
                             <div class="coffee_img"><img src="{{asset('/storage/cover/'.$sari->cover)}}"></div>
                             <div class="coffee_box">
                                <h3 class="types_text">{{$sari->judul_buku}}</h3>
                                {{-- <p class="looking_text">{{$sari->penulis}}</p> --}}
                                <div class="read_bt"><a href="#">Read More</a></div>
                             </div>
                          </div>
                        @endforeach
                       </div>
                    </div>
                 </div>
                 
                 
              </div>
              <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
              <i class="fa fa-arrow-left"></i>
              </a>
              <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
              <i class="fa fa-arrow-right"></i>
              </a>
           </div>
        </div>
      </div>

      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="footer_social_icon">
                     <ul>
                        <li><a target="blank" href="https://www.facebook.com/unirapmk"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a target="blank" href="https://www.instagram.com/univ.madura/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a target="blank" href="https://www.linkedin.com/school/universitas-madura/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a target="blank" href="https://www.youtube.com/@UniversitasMadurapamekasan"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">(0324) 322231, 325786</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">info@unira.ac.id</span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="form-group">
                     <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
                     <div class="subscribe_bt"><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
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
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

   </body>
</html>