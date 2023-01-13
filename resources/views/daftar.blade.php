@extends('templates.auth')
@section('title')
    Login
@endsection

@section('content')
    <h3>Register</h3>
    <span class="text-secondary">Lengkapi data dibawah ini dengan benar</span>

    @if($message = Session::get("failed"))
        <div class="alert alert-danger mt-3">
            <span>{{$message}}</span>
        </div>
    @endif

    <form action="/daftar/proses" method="POST" class="mt-4">
        @csrf
        <div class="form-floating">
            <input  
                type="text"
                class="form-control @error('nama') is-invalid @enderror"
                id="floatingInputValue"
                placeholder="contoh rizki maulana"
                name="nama"
                autofocus
                >
            <label for="floatingInputValue">Nama Lengkap</label>
            @error("nama")
            <span class="text-danger mt-2 d-block">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-floating mt-3">
            <input 
                type="email"
                class="form-control @error('nama') is-invalid @enderror" 
                id="floatingInputValue" 
                placeholder="name@example.com"
                name="email"
            >
            <label for="floatingInputValue">Email</label>

            @error("email")
            <span class="text-danger mt-2 d-block">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-floating mt-3">
            <select class="form-select" name="jabatan" id="floatingSelect" aria-label="Floating label select example">
            <option>Pilih Jenis Akun</option>
            <option selected value="dosen">Dosen</option>
            <option value="mahasiswa">Mahasiswa</option>
            </select>
            <label for="floatingSelect">Jenis Akun</label>
        </div>
        <div class="form-floating mt-3">
            <input
                type="text"
                class="form-control @error('nomor_identitas') is-invalid @enderror"
                id="floatingInputValue"
                placeholder="name@example.com"
                name="nomor_identitas"
            >
            <label for="floatingInputValue">NIM/NIP</label>
            @error("nomor_identitas")
            <span class="text-danger mt-2 d-block">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-floating mt-3">
            <input 
                type="password"
                class="form-control @error('password') is-invalid @enderror"
                id="floatingInputValue"
                placeholder="Masukan password"
                name="password"
            >
            <label for="floatingInputValue">Password Baru</label>
            @error("password")
            <span class="text-danger mt-2 d-block">{{ $message }}</span>
            @enderror
        </div>
        <div class="d-grid gap-2 mt-3">
            <button class="btn btn-primary" type="submit">Buat Akun</button>
        </div>
        <span class="text-secondary mt-3 d-block fs-6">
            sudah punya akun ?
            <a href="/login">Login</a>
        </span>
    </form>
@endsection