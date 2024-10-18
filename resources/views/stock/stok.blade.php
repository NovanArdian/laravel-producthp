@extends('layouts.app')

@section('contents')
<div class="container">
    <h1>Stok Handphone</h1>
    <a href="{{ route('kelola_stok.tambah') }}" class="btn btn-primary mb-3">Tambah Stok</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Seri</th>
                <th>RAM</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stok as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->seri }}</td>
                    <td>{{ $item->ram }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>
                        <a href="{{ route('kelola_stok.ubah', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kelola_stok.hapus', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
