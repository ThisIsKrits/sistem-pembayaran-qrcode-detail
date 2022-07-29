<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-cash-register"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Sistem Informasi Pembayaran</div>
    </a>

    
    <hr class="sidebar-divider">
    

   
    <!-- Heading -->
    <div class="sidebar-heading">
      Menu Utama
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('wifi-package.index')}}">
        <i class="fas fa-wifi"></i>
        <span>Data Wifi</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('payment.index')}}">
        <i class="fas fa-credit-card"></i>
        <span>Data Rekening</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('transaction.index')}}">
        <i class="fas fa-shopping-cart"></i>
        <span>Data Transaksi</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('user.index')}}">
        <i class="fas fa-user"></i>
        <span>Data Transaksi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>