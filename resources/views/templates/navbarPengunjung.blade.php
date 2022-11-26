<!-- ========= NAVBAR ============ -->
<!-- <nav class="navbar position-sticky top-0 bg-white navbar-expand-md navbar-light"> -->
<nav class="navbar position-sticky top-0 navbar-expand-md navbar-dark" style="background-color: #5DA7DB;">
    <div class="container">
        <a class="navbar-brand d-flex flex-grid justify-content-center align-content-center gap-2" href="#">
            <h6 class="my-auto text-center">Dewi Laundry</h6>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-auto gap-1" style="text-align:right">
                <li class="nav-item">
                    <a class="nav-link {{($title==="Home")? 'active': ''}}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{($title==="Cek Estimasi")? 'active': ''}}"" href=" /cekEstimasi">Cek
                        Estimasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{($title==="Masuk")? 'active': ''}}"" href=" /login">Masuk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- =============== END OF NAVBAR ============== -->