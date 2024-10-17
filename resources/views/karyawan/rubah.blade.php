@extends('layouts.app')

@section('contents')
<div class="container">
    <h2>Edit Pegawai</h2>
    <form action="{{ route('kelola_karyawan.ubah.proses', $employee->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $employee->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="number" class="form-control" id="umur" name="umur" value="{{ $employee->umur }}" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required>{{ $employee->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{ $employee->pekerjaan }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
       
    </form>
</div>
@endsection
