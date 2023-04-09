@extends('auth-layout.main')

@section('content')
<form action="">
    <div class="row">
        <div class="col-12 mb-4">
            <label for="username" class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="name@mail.com" id="username">
        </div>
        <div class="col-12 mb-4">
            <label for="telepon" class="form-label">No Telepon</label>
            
            <div class="input-group">
                <span class="input-group-text" id="telepon">+62</span>
                <input type="number" minlength="8" maxlength="12" class="form-control" placeholder="8 - 12 digit tanpa angka 0 di depan" aria-describedby="telepon">
            </div>
        </div>
        <div class="col-12 mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
    </div>
    <button class="btn btn-gradient w-100 mb-5" type="submit">Masuk</button>
    <div class="register text-center">
        Sudah punya akun? <a href="/login"><b><i>Masuk</i></b></a>
    </div>
</form>
@endsection