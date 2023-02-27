@extends('auth-layout.main')

@section('content')
<form action="">
    <div class="mb-4">
        <label for="username" class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="name@mail.com" id="username">
    </div>
    <div class="mb-4">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password">
    </div>
    <div class="extra mb-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="remember">
            <label class="form-check-label" for="remember">
                Remember Me
            </label>
        </div>
        <div>
            <a href=""><b><i>Forgot Password</i></b></a>
        </div>
    </div>
    <button class="btn btn-gradient w-100 mb-5" type="submit">Daftar</button>
    <div class="register text-center">
        Sudah punya akun? <a href=""><b><i>Masuk</i></b></a>
    </div>
</form>
@endsection