<div class="header_section">
  <div class="container">
     <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="navbar-brand"href="index.html"><img src="/images/navlogo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                 <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" target="blank" href="https://unira.ac.id/">Tentang Kami</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="/katalog">Katalog</a>
              </li>
              <li id="this_login" class="nav-item dropdown">
              @if (!Auth::check())
                 <a href="/dosen/signIn"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a>
              @else
                 <a data-bs-toggle="dropdown" ><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>{{Auth::user()->nama_depan}}</a>
               <ul id="theD" class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                  <li class="dropdown-header">
                    <a href="/dosen/listPengajuan" class="text-dark text-capitalize"><span>Pengajuan</span></a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
        
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <i class="bi bi-box-arrow-right"></i>
                      <form action="/logout" method="post">
                        @csrf
                        <button  class="dropdown-item"  type="submit">Keluar</button>
                      </form>
                    </a>
                  </li>
                </ul>
                @endif
               </li>
              <li class="nav-item">
               <form class="d-flex" id="pencarian" role="search">
                  <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
                  <button class="btn btn-outline-success" type="submit"><i class="text-light fa fa-search" aria-hidden="true"></i></button>
                </form>
              </li>
              
               
           </ul>
           {{-- <form class="form-inline my-2 my-lg-0">
              <div class="login_bt">
                 <ul>
                     <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                 </ul>
              </div>
           </form> --}}
        </div>
     </nav>
  </div>
  <!-- banner section start --> 
  <div class="banner_section layout_padding">
     <div class="container">
        <div id="banner_slider" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner">
              <div class="carousel-item active">
                 <div class="row">
                    <div class="col-md-12">
                       <div class="banner_taital_main">
                          <h1 class="banner_taital">Universitas <br>Madura</h1>
                          <p class="banner_text">Pilihan Bijak Masa Depan</p>
                          <div class="btn_main">
                             <div class="about_bt"><a href="https://unira.ac.id/">About Us</a></div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              
           </div>
           {{-- <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
           <i class="fa fa-arrow-left"></i>
           </a>
           <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
           <i class="fa fa-arrow-right"></i>
           </a> --}}
        </div>
     </div>
  </div>
  <!-- banner section end -->
</div>