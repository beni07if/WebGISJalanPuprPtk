<!DOCTYPE html>
<html lang="en">

<head>
    @include('WebGIS.Layouts.HeadStyle')
    <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>
    <!-- ======= Headessrs ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logo/logo-lima-jari.png') }}" alt="">
                <!-- <span>WebGIS PS Ketapang</span> -->
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('tentang') }}">Tentang PS Ketapang</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('galery') }}">Galery</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
                    <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
                    <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
                    <!-- <li><a class="getstarted scrollto" href="{{ route('peta') }}">Peta</a></li> -->
                    <li><a class="getstarted scrollto" href="{{ route('peta2') }}">Peta</a></li>
                    <!-- <li><a class="getstarted scrollto" href="{{ route('petaJs') }}">PetaJs</a></li> -->
                    <!-- <li><a class="getstarted scrollto" href="{{ route('peta3') }}">Peta 3</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @yield('Content')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <!-- <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <!-- <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/img/logo/aiden.png" alt="">
                            <span>PS Ketapang</span>
                        </a>
                        <p>Website penyedia persebaran Perhutanan Sosial (HD dan HKm) di Kabupaten Ketapang..</p> -->
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 footer-links">
                        <h4>Layanan Kami</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index') }}#hero">Beranda</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index') }}#about">Tentang PS Ketapang</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index') }}#portfolio">Galery</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index') }}#team">Kontak Kami</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('peta2') }}">Peta Interaktif</a></li>
                        </ul>
                    </div>

                    <!-- <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div> -->

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Kontak Kami</h4>
                        <p>
                            Jalan.. <br>
                            Ketapang, Indonesia<br>
                            <!-- United States <br> -->
                            <br>
                            <strong>Phone:</strong> +62 813-4744-4794<br>
                            <strong>Email:</strong> info@webgis-psketapang.or.id<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <!-- <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                Designed by <a href="">BootstrapMade</a>
            </div>
        </div> -->
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @yield('IndexJs')

</body>

</html>