<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="/admin">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="/admin/pengajuan">
            <i class="bi bi-circle"></i><span>Pengajuan Surat</span>
          </a>
        </li>
        <li>
          <a href="/admin/berita">
            <i class="bi bi-circle"></i><span>Berita</span>
          </a>
        </li>
       
        
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#papparapparapparappa" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-gear"></i><span>Manajemen User</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="papparapparapparappa" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="/user">
            <i class="bi bi-circle"></i><span>Data User</span>
          </a>
        </li>
       
        
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#doddoroddoro" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-gear"></i><span>Kritik dan Saran</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="doddoroddoro" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="/saran">
            <i class="bi bi-circle"></i><span>Data Kritik dan Saran</span>
          </a>
        </li>
       
        
      </ul>
    </li>

    {{-- @can('superAdmin') --}}
    {{-- @if(auth()->guard('admin')->user()->role == 'admin') --}}
    {{-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#zaihanolif" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-gear"></i><span>Manajemen Admin</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="zaihanolif" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="/akunAdmin">
            <i class="bi bi-circle"></i><span>Data Admin</span>
          </a>
        </li>
       
        
      </ul>
    </li> --}}
    
      
    {{-- @endif --}}
    
    
    {{-- @endcan --}}
    <!-- End Tables Nav -->

 
  
 
  </ul>

</aside>