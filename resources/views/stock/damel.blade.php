@extends('layouts.app')

@section('contents')
<div class="container">
    <h1>Tambah Stok Handphone</h1>

    <form action="{{ route('kelola_stok.tambah.proses') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Handphone</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Seri Handphone</label>
            <input type="text" name="seri" class="form-control" required>
        </div>

        <div class="form-group">
            <label>RAM</label>
            <input type="text" name="ram" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Jumlah Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
