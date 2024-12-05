<style>
    /* Sidebar background with a gradient from dark blue to orange */
    .bg-gradient-orange {
        background: linear-gradient(to right, #ff8b07, #f8230b); /* Orange gradient */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    /* Sidebar link styling */
    .nav-link.modern-link {
        color: #f8f9fc;
        font-size: 16px;
        padding: 12px 20px;
        transition: all 0.3s ease;
        border-radius: 8px;
    }

    .nav-link.modern-link:hover {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.15);
        transform: translateX(10px); /* Slight hover movement */
    }

    /* Sidebar icons */
    .sidebar-brand-icon i {
        font-size: 30px;
        color: #ffffff;
        transition: color 0.3s ease;
    }

    .sidebar-brand-text {
        font-weight: bold;
        color: #f8f9fc;
        font-size: 18px;
        margin-left: 5px;
    }

    .sidebar-divider {
        border-color: rgba(255, 255, 255, 0.2);
    }

    /* Modern toggler button */
    .modern-toggler {
        background-color: #ffffff;
        border-radius: 50%;
        transition: transform 0.3s ease;
    }

    .modern-toggler:hover {
        transform: rotate(90deg);
        background-color: #ff7f00; /* Toggler hover effect */
    }

    /* Hover effect for icons */
    .sidebar-brand-icon i:hover {
        color: #ff7f00; /* Orange hover effect */
    }
</style>

<ul class="navbar-nav bg-gradient-orange sidebar sidebar-dark accordion modern-sidebar" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-mobile-alt"></i> <!-- Phone icon -->
        </div>
        <div class="sidebar-brand-text mx-3">Novan <sup>Shop</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link modern-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Nav Item - Products -->
    <li class="nav-item">
        <a class="nav-link modern-link" href="{{ route('products') }}">
            <i class="fas fa-fw fa-box-open"></i>
            <span>Products</span>
        </a>
    </li>

    <!-- Nav Item - Profile -->
    <li class="nav-item">
        <a class="nav-link modern-link" href="/profile">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span>
        </a>
    </li>

    <!-- Nav Item - Employee -->
    <li class="nav-item">
        <a class="nav-link modern-link" href="{{ route('kelola_karyawan.data') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Pegawai</span>
        </a>
    </li>

    <!-- Nav Item - Stok -->
    <li class="nav-item">
        <a class="nav-link modern-link" href="{{ route('kelola_stok.data') }}">
            <i class="fas fa-fw fa-database"></i>
            <span>Stok Handphone</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0 modern-toggler" id="sidebarToggle"></button>
    </div>
</ul>
