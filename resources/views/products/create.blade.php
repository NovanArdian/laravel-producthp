@extends('layouts.app')
  
@section('title', 'Welcome to NovanShop')
  
@section('contents')
    <h1 class="mb-0">Daftar Handphone</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Nama Handphone">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="Code Produk">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Deskripsi"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </form>
@endsection