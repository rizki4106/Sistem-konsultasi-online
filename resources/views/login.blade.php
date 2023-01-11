@extends('templates.auth')
@section('title')
    Login
@endsection

@section('content')
    <h3>Login</h3>
    <span class="text-secondary">Silahkan login untuk melanjutkan</span>

    <form action="" method="POST" class="mt-4">
        @csrf
        <div class="form-floating mt-3">
            <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="test@example.com">
            <label for="floatingInputValue">Email</label>
        </div>
        <div class="form-floating mt-3">
            <input type="password" class="form-control" id="floatingInputValue" placeholder="Masukan password" value="...">
            <label for="floatingInputValue">Password Baru</label>
        </div>
        <div class="d-grid gap-2 mt-3">
            <button class="btn btn-primary" type="submit">Login</button>
        </div>
        <span class="text-secondary mt-3 d-block fs-6">
            belum punya akun ?
            <a href="/daftar">daftar</a>
        </span>
    </form>
@endsection