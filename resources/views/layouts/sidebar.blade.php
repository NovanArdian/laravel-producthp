  <style>
      /* Sidebar background with darker blue gradient */
      .bg-gradient-dark-blue {
          background: linear-gradient(135deg, #003366, #001f4d);
          /* Darker blue tones */
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      }

      /* Sidebar link styling */
      .nav-link.modern-link {
          color: #e9ecef;
          font-size: 16px;
          padding: 15px;
          transition: all 0.3s ease;
      }

      .nav-link.modern-link:hover {
          color: #ffffff;
          background-color: rgba(255, 255, 255, 0.1);
          border-radius: 5px;
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
      }

      .sidebar-divider {
          border-color: rgba(255, 255, 255, 0.1);
      }

      /* Modern toggler */
      .modern-toggler {
          background-color: #ffffff;
          transition: transform 0.3s ease;
      }

      .modern-toggler:hover {
          transform: rotate(90deg);
      }

      /* Hover effect for icons */
      .sidebar-brand-icon i:hover {
          color: #003366;
          /* Darker hover effect */
      }
  </style>


<ul class="navbar-nav bg-gradient-dark-blue sidebar sidebar-dark accordion modern-sidebar" id="accordionSidebar">

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
        <a class="nav-link modern-link"  href="{{ route('kelola_karyawan.data') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Pegawai</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0 modern-toggler" id="sidebarToggle"></button>
    </div>
</ul>
