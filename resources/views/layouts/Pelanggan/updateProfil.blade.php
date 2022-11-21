@extends('templates.main')
<!--merujuk ke main.blade.php-->
@section('container')
<a href="/profil">
    <img src="img/backButton.png" alt="#" style="width:50px;margin-left:-6%"
        class="position-absolute btn btn-outline-primary mt-4">
</a>
<section class="profile-section p-4 lh-lg">
    <div class="container-img" style="width:50%;margin-top:10%">
        <img src="img/circleUser.png" alt="" draggable="false">
    </div>
    <div class="container-text flex-column justify-content-center border border-dark p-4 rounded-3" style="width:50%;">
        <h2 class="text-center fw-semibold mb-4">Update Profil</h2>
        <form>
            <div class="mb-3">
                <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="namaLengkap" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp">
            </div>
            <div class="text-center mt-4">
                <a type="submit" class="btn btn-primary" href="/profil" data-bs-toggle="modal"
                    data-bs-target="#updateModal">Simpan</a>
            </div>
        </form>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-4 mb-4">
        <div class="modal-content ">
            <div class="modal-header justify-content-center">
                <h5 class="modal-titlefw-semibold" id="exampleModalLabel">Konfirmasi Update</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body text-center">
                Yakin ingin memperbarui data?
            </div>
            <div class="modal-footer justify-content-center">
                <button type="submit" class="btn btn-primary mr-4"><a href="/profil">Simpan</a></button>
                <button type="submit" class="btn btn-danger ms-4" data-bs-dismiss="modal"
                    style="background-color:#E74545">Batal</button>
            </div>
        </div>
    </div>
</div>
@endsection