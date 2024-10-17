@extends('layouts.app')

@section('contents')
<div class="container">
    <h2 class="my-4">Data Pegawai</h2>
    <a href="{{ route('kelola_karyawan.tambah') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employee as $employee => $emp)
                <tr>
                    <td>{{ $employee + 1 }}</td>
                    <td>{{ $emp->nama }}</td>
                    <td>{{ $emp->umur }}</td>
                    <td>{{ $emp->alamat }}</td>
                    <td>{{ $emp->pekerjaan }}</td>
                    <td>
                        <a href="{{ route('kelola_karyawan.ubah', $emp) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kelola_karyawan.hapus', $emp) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" 
                                    onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
