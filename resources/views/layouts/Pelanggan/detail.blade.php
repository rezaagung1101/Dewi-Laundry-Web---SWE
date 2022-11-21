@extends('templates.main')
<!--merujuk ke main.blade.php-->
@section('container')
<a href="/">
    <img src="img/backButton.png" alt="#" style="width:50px;margin-left:-6%"
        class="position-absolute btn btn-outline-primary mt-4">
</a>
<section class="detail-section p-4">
    <h2 class="fw-semibold text-center mb-5">Detail Laundry</h2>
    <div class="container-detail p-4 lh-lg border border-dark p-4 rounded-3 position-relative">
        <table>
            <tbody>
                <tr>    
                    <th>Berat Baju(kg)</th>
                    <td>1</td>
                </tr>
                <tr>
                    <th>Jaket</th>
                    <td>2</td>
                </tr>
                <tr>
                    <th>Selimut</th>
                    <td>2</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>Diproses</td>
                </tr>
                <tr>
                    <th>Estimasi Selesai</th>
                    <td>4 hari</td>
                </tr>
                <tr class="another">
                    <th>Total Biaya</th>
                    <td>Rp 35.000,-</td>
                </tr>
                <tr class="another fw-semibold">
                    <th></th>
                    <td>Lunas</td>
                </tr>

            </tbody>
        </table>

    </div>
</section>
@endsection