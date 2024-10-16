@extends('layouts.app')

@section('title', 'Dashboard - Selamat Anda berhasil login di NovanShop')

@section('contents')
<div class="container mt-5">
  <!-- Welcome Section -->
  <div class="row justify-content-center mb-4">
    <div class="col-md-8">
      <div class="alert alert-primary shadow-sm rounded-lg text-center py-4">
        <h4 class="alert-heading font-weight-bold">Selamat Datang di NovanShop!</h4>
        <p class="lead">Anda berhasil login. Yowww yang jauh mendekat, yang dekat merapattt!</p>
      </div>
    </div>
  </div>
  <br>

  <!-- Dashboard Cards Section -->
  <div class="row text-center">
    <!-- Lokasi Card -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm border-0 rounded-lg hover-zoom">
        <div class="card-body">
          <i class="fas fa-map-marker-alt fa-3x mb-3 text-danger"></i>
          <h5 class="card-title font-weight-bold">Lokasi Toko</h5>
          <p class="card-text">Jl. Raya Pasir Angin Gadog</p>
        </div>
      </div>
    </div>

    <!-- Android Phone Card -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm border-0 rounded-lg hover-zoom">
        <div class="card-body">
          <i class="fas fa-mobile-alt fa-3x mb-3 text-success"></i>
          <h5 class="card-title font-weight-bold">Handphone Android</h5>
          <p class="card-text">Koleksi handphone terbaru</p>
        </div>
      </div>
    </div>

    <!-- iOS Phone Card -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm border-0 rounded-lg hover-zoom">
        <div class="card-body">
          <i class="fas fa-mobile-alt fa-3x mb-3 text-info"></i>
          <h5 class="card-title font-weight-bold">Handphone iOS</h5>
          <p class="card-text">Koleksi handphone terbaru</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add some CSS for hover effects and smooth transitions -->
<style>
  .hover-zoom {
    transition: transform 0.3s ease;
  }

  .hover-zoom:hover {
    transform: scale(1.05);
  }

  .card-body i {
    transition: color 0.3s ease;
  }

  .card-body:hover i {
    color: #20e391;
  }
</style>
@endsection
