@extends('templates.auth')
@section('title')
    Login
@endsection

@section('content')
    <h3>Register</h3>
    <span class="text-secondary">Lengkapi data dibawah ini dengan benar</span>

    <form action="" method="POST" class="mt-4">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputValue" placeholder="contoh rizki maulana" value="Jhon Due">
            <label for="floatingInputValue">Nama Lengkap</label>
        </div>
        <div class="form-floating mt-3">
            <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="test@example.com">
            <label for="floatingInputValue">Email</label>
        </div>
        <div class="form-floating mt-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
            <option selected>Pilih Jenis Akun</option>
            <option value="dosen">Dosen</option>
            <option value="mahasiswa">Mahasiswa</option>
            </select>
            <label for="floatingSelect">Jenis Akun</label>
        </div>
        <div class="form-floating mt-3">
            <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="192102...">
            <label for="floatingInputValue">NIM/NIP</label>
        </div>
        <div class="form-floating mt-3">
            <input type="password" class="form-control" id="floatingInputValue" placeholder="Masukan password" value="...">
            <label for="floatingInputValue">Password Baru</label>
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