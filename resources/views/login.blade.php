@extends('templates.auth')
@section('title')
    Login
@endsection

@section('content')
    <h3>Login</h3>
    <span class="text-secondary">Silahkan login untuk melanjutkan</span>

    @if($message = Session::get("failed"))
    <div class="alert alert-danger mt-3">
        <span>{{$message}}</span>
    </div>
    @endif

    <form action="/login/proses" method="POST" class="mt-4">
        @csrf
        <div class="form-floating mt-3">
            <input 
                type="email"
                class="form-control @error('nama') is-invalid @enderror" 
                id="floatingInputValue" 
                placeholder="name@example.com"
                autofocus
                name="email"
            >
            <label for="floatingInputValue">Email</label>

            @error("email")
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
            <label for="floatingInputValue">Password</label>
            @error("password")
            <span class="text-danger mt-2 d-block">{{ $message }}</span>
            @enderror
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