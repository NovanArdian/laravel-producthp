@extends('layouts.app')

@section('title', 'Profile')

@section('contents')
    <h1 class="mb-0">Profile</h1>
    <hr />
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="{{ route('profile.update') }}">
        @csrf
        <div class="row">
            <div class="col-md-12 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Anda</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Nama</label>
                            <input type="text" name="name" class="form-control" 
                                   placeholder="First name" value="{{ auth()->user()->name }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Email</label>
                            <input type="text" name="email" disabled class="form-control" 
                                   value="{{ auth()->user()->email }}" placeholder="Email">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Nomor Telepon</label>
                            <input type="text" name="phone" class="form-control" 
                                   placeholder="Phone Number" value="{{ auth()->user()->phone }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Alamat</label>
                            <input type="text" name="address" class="form-control" 
                                   value="{{ auth()->user()->address }}" placeholder="Address">
                        </div>
                    </div>

                    <!-- Tambahan form untuk mengubah password -->
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <label class="labels">Password Lama</label>
                            <input type="password" name="current_password" class="form-control" placeholder="Password Lama">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Password Baru</label>
                            <input type="password" name="new_password" class="form-control" placeholder="Password Baru">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Konfirmasi Password Baru</label>
                            <input type="password" name="new_password_confirmation" class="form-control" placeholder="Konfirmasi Password Baru">
                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <button id="btn" class="btn btn-primary profile-button" type="submit">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
