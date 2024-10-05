<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-users"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Kost</div>
    </a>
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if (Request::segment(2) == 'dashboard') active @endif">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">Master Data</div>
    <li class="nav-item @if (Request::segment(3) == 'categories') active @endif">
        <a class="nav-link" href="{{route('categories.index')}}">
            <i class="fas fa-fw fa-box"></i>
            <span>Kategori</span></a>
    </li>
    <li class="nav-item @if (Request::segment(3) == 'fasilitas') active @endif">
        <a class="nav-link" href="{{route('fasilitas.index')}}">
            <i class="fas fa-fw fa-box"></i>
            <span>Fasilitas</span></a>
    </li>
    <li class="nav-item @if (Request::segment(3) == 'kost') active @endif">
        <a class="nav-link" href="{{route('kost.index')}}">
            <i class="fas fa-fw fa-home"></i>
            <span>Kost</span></a>
    </li>
    <li class="nav-item @if (Request::segment(3) == 'penyewaan') active @endif">
        <a class="nav-link" href="{{route('penyewaan.index')}}">
            <i class="fas fa-fw fa-box"></i>
            <span>Penyewaan</span></a>
    </li>
    <li class="nav-item @if (Request::segment(3) == 'customer') active @endif">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-box"></i>
            <span>Pelanggan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Transaction
    </div>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-file"></i>
            <span>Data Transaksi</span></a>
    </li>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Detail Transaksi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
