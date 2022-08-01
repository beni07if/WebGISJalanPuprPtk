    <!-- ======= Headers ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                <img src="assets/img/logo/logo-lima-jari.png" alt="">
                <!-- <span>WebGIS PS Ketapang</span> -->
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('tentang') }}">Tentang PS Ketapang</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('galery') }}">Galery</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }} #contact">Kontak Kami</a></li>
                    <li><a class="getstarted scrollto" href="{{ route('peta2') }}">Peta</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->