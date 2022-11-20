@extends('backend.app')
@section('title' , 'Tambah User | HIMADITI')
@section('content')

<nav class="navbar navbar-expand-lg navbar-light py-3">
    <div class="container-fluid" style="padding: 0">
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/dashboard">Home</a>
                </li>
                <li class="nav-item px-5">
                    <a class="nav-link active" href="/dashboard/{dashboard}/user">Data User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/admin/dashboard/pendaftar">Data Pendaftar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="col-12 section my-3 px-5 py-5">
    <h6>Tambah User</h6>
    <div class="line mb-5"></div>
    <form action="/dashboard/{dashboard}/user" method="POST">
        @csrf
        <div class="col-12 d-flex form-container mb-5">
            <div class="col-6 left-form">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input name="nama" class="form-control @error('nama') is-invalid @enderror" type="text" id="nama" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" class="form-control @error('email') is-invalid @enderror" type="email" id="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" class="form-control @error('password') is-invalid @enderror" type="password" id="password" value="{{ old('password') }}">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Ulangi Password</label>
                    <input name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" type="password" id="password_confirmation" value="{{ old('password_confirmation') }}">
                    @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-6 right-form">
                <div class="mb-3">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <select name="gender" class="form-select @error('jenis_kelamin') is-invalid @enderror" aria-label="Default select example" id="gender" {{ old('gender') }}>
                        @if (old('gender') === 'L')
                            <option>Pilih Jenis Kelamin</option>
                            <option selected value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        @elseif (old('gender') === 'P')
                            <option>Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option selected value="P">Perempuan</option>
                        @else
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        @endif
                    </select>
                    @error('gender')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" class="form-select @error('role') is-invalid @enderror" aria-label="Default select example" id="role">
                        @if (old('role') === '0')
                            <option>Pilih Role</option>
                            <option selected value="0">Admin</option>
                            <option value="1">Super Admin</option>
                        @elseif (old('role') === '1')
                            <option>Pilih Role</option>
                            <option value="0">Admin</option>
                            <option selected value="1">Super Admin</option>
                        @else
                            <option selected>Pilih Role</option>
                            <option value="0">Admin</option>
                            <option value="1">Super Admin</option>
                        @endif
                    </select>
                    @error('role')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="dflex">
                    <button type="submit" class="btn btn-secondary"><i class="bi bi-pencil-square"></i> Simpan</button>
                    <a href="/dashboard/{dashboard}/user" class="btn btn-primary"><i class="bi bi-box-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </div>

    </form>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>

@endsection
