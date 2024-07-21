<!doctype html>
<html class="no-js" lang="zxx">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Unira Press | Berita</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="manifest" href="site.webmanifest">
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

   <!-- CSS here -->
   <link rel="stylesheet" href="/newsAssets/assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="/newsAssets/assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="/newsAssets/assets/css/ticker-style.css">
   <link rel="stylesheet" href="/newsAssets/assets/css/flaticon.css">
   <link rel="stylesheet" href="/newsAssets/assets/css/slicknav.css">
   <link rel="stylesheet" href="/newsAssets/assets/css/animate.min.css">
   <link rel="stylesheet" href="/newsAssets/assets/css/magnific-popup.css">
   <link rel="stylesheet" href="/newsAssets/assets/css/fontawesome-all.min.css">
   <link rel="stylesheet" href="/newsAssets/assets/css/themify-icons.css">
   <link rel="stylesheet" href="/newsAssets/assets/css/slick.css">
   <link rel="stylesheet" href="/newsAssets/assets/css/nice-select.css">
   <link rel="stylesheet" href="/newsAssets/assets/css/style.css">
</head>

<body>
<!-- Preloader Start -->
<div id="preloader-active">
   <div class="preloader d-flex align-items-center justify-content-center">
         <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
               <img src="/newsAssets/assets/img/logo/logo.png" alt="">
            </div>
         </div>
   </div>
</div>
<!-- Preloader Start -->
<header>
   <!-- Header Start -->
   <div class="header-area">
         <div class="main-header ">
            
           
            <div class="header-bottom header-sticky">
                  <div class="container">
                     <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                           <!-- sticky -->
                           <div class="sticky-logo">
                              <a href="index.html"><img src="/newsAssets/assets/img/logo/logo.png" alt=""></a>
                           </div>
                           <!-- Main-menu -->
                           <div class="main-menu d-none d-md-block">
                              <nav>                  
                                 <ul id="navigation">
                                       <li><a href="/">Home</a></li>
                                       <li><a href="https://unira.ac.id/">About</a></li>
                                       
                                       <li><a href="/katalog">Katalog</a></li>
                                 </ul>
                              </nav>
                           </div>
                        </div>             
                        <div class="col-xl-4 col-lg-4 col-md-4">
                           <div class="header-right f-right d-none d-lg-block">
                              <!-- Heder social -->
                              <ul class="header-social">    
                                 <li><a href="https://www.facebook.com/unirapmk"><i class="fab fa-facebook-f"></i></a></li>
                                 <li><a href="https://www.instagram.com/univ.madura/"><i class="fab fa-instagram"></i></a></li>
                                 <li> <a href="https://www.youtube.com/@UniversitasMadurapamekasan"><i class="fab fa-youtube"></i></a></li>
                              </ul>
                              <!-- Search Nav -->
                              {{-- <div class="nav-search search-switch">
                                 <i class="fa fa-search"></i>
                              </div> --}}
                           </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                           <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
   </div>
   <!-- Header End -->
</header>
<main>
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="{{asset('storage/gambar_berita/'.$data->gambar)}}" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>{{$data->judul}}
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> {{$data->kategoriBerita->nama_kategori}}</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                     </ul>
                     <p class="excert">
                        {{$data->deskripsi_gambar}}
                     </p>
                     
                     <div class="quote-wrapper">
                        <div class="quotes text-center">
                            ADVERTISEMENT
                        </div>
                     </div>
                     <p>
                        {{$data->isi}}
                     </p>
                     
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="https://www.facebook.com/unirapmk"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/univ.madura/"><i class="fab fa-instagram"></i></a></li>
                       
                     </ul>
                  </div>
                 
               </div>
               
               
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="#" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btns" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Search</button>
                     </form>
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Category</h4>
                     <ul class="list cat-list">
                        @foreach ($kategori as $data)
                            
                        <li>
                            <a href="#" class="d-flex">
                                <p>{{$data->nama_kategori}}</p>
                            </a>
                        </li>
                        @endforeach
                        
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Berita Terbaru</h3>
                     @foreach ($recent as $rec)
                         
                     <div class="media post_item">
                         <img src="{{asset('storage/gambar_berita/'.$rec->gambar)}}" style="max-width: 200px" alt="post">
                         <div class="media-body">
                             <a href="/berita/{{$rec->id}}">
                                 <h3>{{$rec->judul}}</h3>
                                </a>
                                <p>{{\Carbon\Carbon::parse($rec->tanggal)->isoFormat(' dddd, D MMMM Y') }}</p>
                         </div>
                     </div>
                        
                        @endforeach
                  </aside>
                  
                  
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
</main>
<footer>
   <!-- Footer Start-->
   <div class="footer-main footer-bg">
      <div class="footer-area footer-padding">
         <div class="container">
            <div class="row d-flex justify-content-between">
                  <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
                     <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                              <!-- logo -->
                              <div class="footer-logo">
                                 <a href="index.html"><img src="/images/logoUnira.png" style="max-width: 100px;" alt=""></a>
                              </div>
                              <div class="footer-tittle">
                                 <div class="footer-pera">
                                    <p class="info1">Universitas Madura adalah perguruan tinggi yang terletak di Pamekasan, Madura, Jawa Timur.</p>
                                    <p class="info2">Jl. Raya Panglegur No.Km 3,5, Barat, Panglegur, Kec. Tlanakan, Kabupaten Pamekasan, Jawa Timur 69371</p>
                                    <p class="info2">(0324) 322231, 325786</p>
                              </div>
                              </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                     <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                              <h4>Popular post</h4>
                        </div>
                        <!-- Popular post -->
                        @foreach ($foot as $huk )
                            
                        <div class="whats-right-single mb-20">
                            <div class="whats-right-img">
                                <img src="{{asset('storage/gambar_berita/'.$huk->gambar)}}" alt="" style="max-width: 100px;">
                            </div>
                            <div class="whats-right-cap">
                                <h4><a href="details.html">{{$huk->judul}}</a></h4>
                                <p>{{\Carbon\Carbon::parse($rec->tanggal)->isoFormat(' dddd, D MMMM Y') }}</p> 
                            </div>
                        </div>
                        @endforeach
                        <!-- Popular post -->
                       
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                     <div class="single-footer-caption mb-50">
                        <div class="banner">
                              <img src="/newsAssets/assets/img/gallery/body_card4.png" alt="">
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
      <!-- footer-bottom aera -->
      <div class="footer-bottom-area footer-bg">
         <div class="container">
            <div class="footer-border">
                     <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                              <div class="footer-copy-right text-center">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Fahrosi Angger Kelana  
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                              </div>
                        </div>
                     </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Footer End-->
</footer>
<!-- Search model Begin -->
<div class="search-model-box">
   <div class="d-flex align-items-center h-100 justify-content-center">
         <div class="search-close-btn">+</div>
         <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
         </form>
   </div>
</div>
<!-- Search model end -->

   <!-- All JS Custom Plugins Link Here here -->
   
   <script src="/newsAssets/assets/js/vendor/modernizr-3.5.0.min.js"></script>
   <!-- Jquery, Popper, Bootstrap -->
   <script src="/newsAssets/assets/js/vendor/jquery-1.12.4.min.js"></script>
   <script src="/newsAssets/assets/js/popper.min.js"></script>
   <script src="/newsAssets/assets/js/bootstrap.min.js"></script>
   <!-- Jquery Mobile Menu -->
   <script src="/newsAssets/assets/js/jquery.slicknav.min.js"></script>

      <!-- Jquery Slick , Owl-Carousel Plugins -->
   <script src="/newsAssets/assets/js/owl.carousel.min.js"></script>
   <script src="/newsAssets/assets/js/slick.min.js"></script>
   <!-- Date Picker -->
   <script src="/newsAssets/assets/js/gijgo.min.js"></script>
   <!-- One Page, Animated-HeadLin -->
   <script src="/newsAssets/assets/js/wow.min.js"></script>
      <script src="/newsAssets/assets/js/animated.headline.js"></script>
   <script src="/newsAssets/assets/js/jquery.magnific-popup.js"></script>

      <!-- Scrollup, nice-select, sticky -->
   <script src="/newsAssets/assets/js/jquery.scrollUp.min.js"></script>
   <script src="/newsAssets/assets/js/jquery.nice-select.min.js"></script>
   <script src="/newsAssets/assets/js/jquery.sticky.js"></script>
   
   <!-- contact js -->
   <script src="/newsAssets/assets/js/contact.js"></script>
   <script src="/newsAssets/assets/js/jquery.form.js"></script>
   <script src="/newsAssets/assets/js/jquery.validate.min.js"></script>
   <script src="/newsAssets/assets/js/mail-script.js"></script>
   <script src="/newsAssets/assets/js/jquery.ajaxchimp.min.js"></script>
   
   <!-- Jquery Plugins, main Jquery -->	
   <script src="/newsAssets/assets/js/plugins.js"></script>
   <script src="/newsAssets/assets/js/main.js"></script>
      
</body>
</html>