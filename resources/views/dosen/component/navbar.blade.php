<header id="header" class="site-header header-scrolled position-fixed text-light bg-primary">
    <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          {{-- <img src="images/main-logo.png" class="logo"> --}}
          <h1 class="text-light">Unira Press</h1>
        </a>

        <button class="navbar-toggler d-flex d-lg-none order-3 p-2 " type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="navbar-icon">
            <use xlink:href="#navbar-icon" fill="white"></use>
          </svg>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
          <div class="offcanvas-header px-4 pb-0">
            <a class="navbar-brand" href="index.html">
              {{-- <img src="images/main-logo.png" class="logo"> --}}
              <h1 class="text-light">Unira Press</h1>
            </a>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
          </div>
          <div class="offcanvas-body">
            <ul id="navbar" class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link me-4 active text-light" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4 text-light" href="#company-services">Katalog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4 text-light" href="#mobile-products">Tentang Kami</a>
              </li>
             
              <li class="nav-item">
                <div class="user-items ps-5">
                  <ul class="d-flex justify-content-end list-unstyled">
                     <li class="dropdown">
                      <a class="me-4 dropdown-toggle link-dark text-light" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <i class="bi bi-person-fill"></i></a>
                      <ul class="dropdown-menu">
                        <li>
                          @if (!Auth::check())
                          <a href="/dosen/signIn" class="dropdown-item">Login</a>
                          @else

                          <a href="/dosen/signIn" class="dropdown-item">{{ Auth::user()->name}}</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a href="/dosen/listPengajuan" class="dropdown-item">Pengajuan</a>
                        </li>
                        <li>
                          <form action="/logout" method="post" >
                            @csrf
                            <button class="dropdown-item" type="submit">LOGOUT</button>
                          </form>
                        </li>
                        @endif
                        
                      </ul>
                    </li>
                    <li class="search-item pe-3" >
                      <a href="#" class="search-button text-light">
                        <svg class="search">
                          <use xlink:href="#search"></use>
                        </svg>
                      </a>
                    </li>
                   
                    
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>