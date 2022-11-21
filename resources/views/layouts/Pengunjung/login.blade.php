@extends('templates.mainPengunjung')
@section('container')
<a href="/">
    <img src="img/backButton.png" alt="#" style="width:50px;margin-left:-6%"
        class="position-absolute btn btn-outline-primary mt-4">
</a>
<section class="login-section p-4">
    <div class="container-rataKanan p-4 lh-lg">
        <form class="border border-dark p-4 rounded-3 position-relative start-50 end-50" style="margin-left:-10%">
            <h2 class="fw-semibold text-center mb-4">Login</h2>
            <div class="mb-1">
                <label for="nomorTelepon" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="nomorTelepon" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock">
            </div>
            <div class="text-center mt-4">
                <a type="submit" class="btn btn-primary" href="/">Login</a>
            </div>
            <div class="register text-center">
                <p class="mt-4">Belum punya akun?</p>
                <a type="button" class="text-primary" href="/register" alt="Register">Daftar Sekarang</a>
            </div>
        </form>
    </div>
</section>
@endsection