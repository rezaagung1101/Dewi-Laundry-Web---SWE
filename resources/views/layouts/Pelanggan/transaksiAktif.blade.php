@extends('templates.main')
@section('container')
<img src="img/backButton.svg" alt="#" style="width:50px;margin-left:-6%"
    class="position-absolute btn btn-outline-primary mt-4">
<section class="table-section p-4">
    <h2 class="fw-semibold text-center">Transaksi Aktif</h2>
    <div class="tabel p-4 top-50">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No Transaksi</th>
                    <th scope="col">Berat Baju(kg)</th>
                    <th scope="col">Total Biaya</th>
                    <th scope="col">Pembayaran</th>
                    <th scope="col">Status</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="no fw-semibold" scope="row">1</td>
                    <td>2</td>
                    <td>Rp 20.000,-</td>
                    <td>Belum Bayar</td>
                    <td>Diproses</td>
                    <td class="text-center">
                        <a type="button" class="text-primary text-center" href="/detail">Lihat</a>
                    </td>
                </tr>
                <tr class="text-center">
                    <td class="no fw-semibold" scope="row">1</td>
                    <td>2</td>
                    <td>Rp 20.000,-</td>
                    <td>Belum Bayar</td>
                    <td>Diproses</td>
                    <td class="text-center">
                        <a type="button" class="text-primary text-center" href="/detail">Lihat</a>
                    </td>
                </tr>
                <tr class="text-center">
                    <td class="no fw-semibold" scope="row">1</td>
                    <td>2</td>
                    <td>Rp 20.000,-</td>
                    <td>Belum Bayar</td>
                    <td>Diproses</td>
                    <td class="text-center">
                        <a type="button" class="text-primary text-center" href="/detail">Lihat</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection