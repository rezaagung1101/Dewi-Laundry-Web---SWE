@extends('templates.mainPengunjung')
@section('container')
<a href="/login">
    <img src="img/backButton.png" alt="#" style="width:50px;margin-left:-6%"
        class="position-absolute btn btn-outline-primary mt-4">
</a>
<section class="rataKanan">
    <img src="img/bgRegister.png" alt="" draggable="false">
    <h2 class="ms-5 justify-content-center position-absolute start-0 top-50 text-white">Gabung Dewi Laundry<br>
        Maksimalkan Waktumu</h2>
    <div class="d-inline-flex flex-column justify-content-center">
        <div class="container-rataKanan position-absolute start-50 ms-5 p-0">
            <form class="border border-dark p-4 rounded-3">
                <h2 class="fw-semibold text-center">Register</h2>
                <div class="mb-2">
                    <label for="nomorTelepon" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="nomorTelepon" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namaLengkap" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock">
                </div>
                <div class="text-center">
                    <a type="submit" class="mt-4 btn btn-primary" href="/login">Register</a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection