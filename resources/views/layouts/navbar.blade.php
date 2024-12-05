<style>
  /* Navbar Background */
  .navbar {
    background-color: #f4b20a;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  /* Navbar Items */
  .navbar-nav .nav-item .nav-link {
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    transition: color 0.3s ease;
  }

  /* Hover effect for nav items */
  .navbar-nav .nav-item .nav-link:hover {
    color: #ff9e0d;
    text-decoration: underline;
  }

  /* Active link style */
  .navbar-nav .nav-item.active .nav-link {
    color: #ffa600;
    font-weight: 700;
  }

  /* Search Form */
  .navbar-search .form-control {
    border-radius: 20px;
    padding: 10px;
    font-size: 14px;
  }

  /* Search Button */
  .navbar-search .btn-primary {
    border-radius: 50%;
    padding: 10px;
    background-color: #ffb702;
    border: none;
  }

  /* Dropdown Menu */
  .dropdown-menu {
    background-color: #ffb701;
    border: none;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  }

  .dropdown-menu a {
    color: #fff;
    padding: 10px 15px;
    transition: background-color 0.3s ease;
  }

  .dropdown-menu a:hover {
    background-color: #ffffff;
  }

  /* Profile Image and User Info */
  .img-profile {
    width: 35px;
    height: 35px;
    object-fit: cover;
  }

  /* User dropdown item active */
  .dropdown-item.active {
    background-color: #ffd700;
    color: #ffb700;
  }

  /* Divider Line */
  .topbar-divider {
    height: 30px;
    width: 1px;
    background-color: #ddd;
  }
</style>

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  
  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <!-- Topbar Search -->
  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button">
          <i class="fas fa-search fa-sm"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- User Information Dropdown -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
          {{ auth()->user()->name }}<br>
          <small>{{ auth()->user()->level }}</small>
        </span>
        <img class="img-profile rounded-circle" src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile.svg">
      </a>
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="/profile">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Profile
        </a>
        <a class="dropdown-item" href="#">
          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
          Settings
        </a>
        <a class="dropdown-item" href="/logout">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>

  </ul>
</nav>
