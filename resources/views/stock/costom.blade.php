@extends('layouts.app')

@section('contents')
<div class="container">
    <h2>Edit Stok</h2>
    <form action="{{ route('kelola_stok.ubah.proses', $stok->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $stok->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="seri" class="form-label">Seri</label>
            <input type="text" class="form-control" id="seri" name="seri" value="{{ $stok->seri }}" required>
        </div>

        <div class="mb-3">
            <label for="ram" class="form-label">Ram</label>
            <textarea class="form-control" id="ram" name="ram" required>{{ $stok->ram }}</textarea>
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="text" class="form-control" id="stok" name="stok" value="{{ $stok->stok }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
       
    </form>
</div>
@endsection
